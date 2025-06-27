<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Hiển thị danh sách khách hàng
public function index(Request $request)
{
    $query = Customer::withCount(['orders as successful_orders' => function ($q) {
        $q->where('OrderStatus', 'Giao hàng thành công');
    }, 'orders as canceled_orders' => function ($q) {
        $q->where('OrderStatus', 'Hủy');
    }])
    ->orderBy('successful_orders', 'desc'); // Sắp xếp theo số đơn hàng thành công

    // Kiểm tra xem có tìm kiếm mã khách hàng không
    if ($request->filled('customer_id')) {
        $query->where('CustomerID', $request->input('customer_id'));
    }

    // Kiểm tra xem có lọc theo trạng thái đơn hàng không
    if ($request->filled('order_status')) {
        $query->whereHas('orders', function ($q) use ($request) {
            $q->where('OrderStatus', $request->input('order_status'));
        });
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
