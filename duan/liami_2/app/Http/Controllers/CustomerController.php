<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Customer;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{
    // Hiển thị danh sách khách hàng
    public function index()
    {
        // Lấy khách hàng cùng với địa chỉ giao hàng có IsPickupAddress = 1
        $customers = Customer::orderBy('created_at', 'desc')->paginate(10);


        return view('managers.m_customer.managerCustomer', compact('customers'));
    }

    // Hiển thị form thêm khách hàng
    public function create()
    {
        return view('managers.m_customer.addCustomer');
    }

    // Lưu khách hàng mới
    public function store(Request $request)
    {
        $exists = Customer::where('Username', $request->Username)->exists();
        if ($exists) {
            return redirect()->back()->with('error', 'Tên người dùng đã tồn tại.');
        }
        $request->validate([
            'Username' => 'required',
            'Password' => 'nullable',
            'FullName' => 'required',
            'Email' => 'required|email',
            'Phone' => 'required|max:20',
            'Country' => 'nullable',
            'City' => 'nullable',
            'District' => 'nullable',
            'Comune' => 'nullable',
            'AddressDetail' => 'nullable|max:255',
            'ImageURL' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        // Kiểm tra tệp tải lên
        if ($request->hasFile('ImageURL')) {
            $file = $request->file('ImageURL');

            if ($file->isValid()) {
                $originalName = time() . '_' . $file->getClientOriginalName(); // Đổi tên tệp để tránh trùng lặp
                $file->move(public_path('assets/images3'), $originalName); // Lưu ảnh vào thư mục

                $imagePath = 'assets/images3/' . $originalName; // Lưu đường dẫn ảnh
                Log::info("Image stored at: " . $imagePath);
            } else {
                Log::error("Uploaded file is not valid.");
                return redirect()->back()->with('error', 'Tệp tải lên không hợp lệ.');
            }
        } else {
            Log::warning("No file uploaded.");
        }

        // Tạo khách hàng mới
        $customer = Customer::create([
            'Username' => $request->Username,
            'FullName' => $request->FullName,
            'Email' => $request->Email,
            'PasswordHash' => bcrypt($request->PasswordHash),
            'Gender' => $request->Gender,
            'ProfilePicture' => $imagePath,
        ]);

        // Thêm địa chỉ giao hàng
        ShippingAddress::create([
           'CustomerID' => $customer->CustomerID,
            'Phone' => $request->Phone,
            'Country' => $request->Country,
            'City' => $request->City,
            'District' => $request->District,
            'Comune' => $request->Comune,
            'AddressDetail' => $request->AddressDetail,
            'IsPickupAddress' => 1,
        ]);

        return redirect()->route('customer.create')->with('success', 'Khách hàng đã được thêm thành công.');
    }
    public function edit($CustomerID)
    {
        $customer = Customer::with('shippingAddress')->findOrFail($CustomerID);
        return view('managers.m_customer.editCustomer', compact('customer'));
    }

    // Cập nhật thông tin khách hàng
    public function update(Request $request, $CustomerID)
    {
        // DB::listen(function ($query) {
        //     Log::info("Query Executed: " . $query->sql);
        // });
        // $exists = Customer::where('Username', $request->Username)
        //     ->where('CustomerID', '<>', $CustomerID) // Đảm bảo sử dụng CustomerID
        //     ->exists();

        // if ($exists) {
        //     return redirect()->back()->with('error', 'Tên người dùng đã tồn tại.');
        // }

        $request->validate([
            'Username' => 'required|unique:customers,Username,' . $CustomerID . ',CustomerID',
            'FullName' => 'required',
            'Password' => 'nullable',
            'Email' => 'required|email',
            'Phone' => 'required|max:20',
            'Country' => 'nullable',
            'City' => 'nullable',
            'District' => 'nullable',
            'Comune' => 'nullable',
            'AddressDetail' => 'nullable|max:255',
            'ImageURL' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $customer = Customer::findOrFail($CustomerID);
        $customer->Username = $request->Username;
        $customer->FullName = $request->FullName;
        $customer->Email = $request->Email;

        if ($request->Password) {
            $customer->PasswordHash = bcrypt($request->Password);
        }

        if ($request->hasFile('ImageURL')) {
            if ($customer->ProfilePicture) {
                Storage::delete($customer->ProfilePicture);
            }

            $file = $request->file('ImageURL');
            $originalName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images3'), $originalName);
            $customer->ProfilePicture = 'assets/images3/' . $originalName;
        }

        $customer->save();

        // Cập nhật địa chỉ giao hàng
        $shippingAddress = ShippingAddress::where('CustomerID', $CustomerID)->first();
        $shippingAddress->Phone = $request->Phone;
        $shippingAddress->Country = $request->Country;
        $shippingAddress->City = $request->City;
        $shippingAddress->District = $request->District;
        $shippingAddress->Comune = $request->Comune;
        $shippingAddress->AddressDetail = $request->AddressDetail;
        $shippingAddress->save();

        return redirect()->route('customers.edit', $CustomerID)->with('success', 'Khách hàng đã được cập nhật thành công.');
    }
    public function destroy($CustomerID)
{
    $customer = Customer::find($CustomerID);

    if ($customer) {
        $customer->delete();
        return redirect()->route('managers.m_customer.manager_customer')->with('success', 'Product deleted successfully!');
    }

    return redirect()->route('managers.m_customer.manager_customer')->with('error', 'Product does not exist.');
}

}
