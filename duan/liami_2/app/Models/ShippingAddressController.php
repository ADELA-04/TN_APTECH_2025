<?php

namespace App\Http\Controllers;

use App\Models\ShippingAddress;
use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    // Hiển thị danh sách địa chỉ giao hàng
    public function index()
    {
        $addresses = ShippingAddress::all();
        return view('shipping_addresses.index', compact('addresses'));
    }

    // Hiển thị form thêm địa chỉ giao hàng
    public function create()
    {
        return view('shipping_addresses.create');
    }

    // Lưu địa chỉ giao hàng mới
    public function store(Request $request)
    {
        $request->validate([
            'CustomerID' => 'required',
            'Phone' => 'required',
            'Country' => 'required',
            'City' => 'required',
            'District' => 'required',
            'Comune' => 'required',
            'AddressDetail' => 'required',
            'IsPickupAddress' => 'boolean',
        ]);

        // Chuyển đổi giá trị boolean thành tinyint
        $request->merge(['IsPickupAddress' => $request->has('IsPickupAddress') ? 1 : 0]);

        ShippingAddress::create($request->all());
        return redirect()->route('shipping_addresses.index')->with('success', 'Địa chỉ đã được thêm thành công.');
    }

    // Hiển thị form chỉnh sửa địa chỉ giao hàng
    public function edit($id)
    {
        $address = ShippingAddress::findOrFail($id);
        return view('shipping_addresses.edit', compact('address'));
    }

     // Cập nhật địa chỉ giao hàng
     public function update(Request $request, $id)
     {
         $request->validate([
             'CustomerID' => 'required',
             'Phone' => 'required',
             'Country' => 'required',
             'City' => 'required',
             'District' => 'required',
             'Comune' => 'required',
             'AddressDetail' => 'required',
             'IsPickupAddress' => 'boolean',
         ]);

         // Chuyển đổi giá trị boolean thành tinyint
         $request->merge(['IsPickupAddress' => $request->has('IsPickupAddress') ? 1 : 0]);

         $address = ShippingAddress::findOrFail($id);
         $address->update($request->all());
         return redirect()->route('shipping_addresses.index')->with('success', 'Địa chỉ đã được cập nhật thành công.');
     }
    // Xóa địa chỉ giao hàng
    public function destroy($id)
    {
        $address = ShippingAddress::findOrFail($id);
        $address->delete();
        return redirect()->route('shipping_addresses.index')->with('success', 'Địa chỉ đã được xóa thành công.');
    }
}
