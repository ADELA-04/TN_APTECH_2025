<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    // Hiển thị danh sách khách hàng
    public function index(Request $request)
    {
        $query = Customer::withCount('orders')
            ->with(['orders' => function ($query) {
                $query->select('OrderID', 'CustomerID', 'Phone');
            }])
            ->orderBy('created_at', 'desc');

        // Kiểm tra xem có tìm kiếm không
        if ($request->filled('customer_id')) {
            $query->where('CustomerID', $request->input('customer_id'));
        }

        $customers = $query->paginate(10);

        return view('managers.m_customer.managerCustomer', compact('customers'));
    }

    public function destroy($CustomerID)
    {
        $customer = Customer::find($CustomerID);

        if ($customer) {
            $customer->delete();
            return redirect()->route('manager_customer')->with('success', 'Xóa thành công!');
        }

        return redirect()->route('manager_customer')->with('error', 'Xóa thất bại.');
    }
}
