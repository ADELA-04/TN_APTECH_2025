<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeValue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
class ProductAttributeController extends Controller
{
    public function create()
    {
        return view('managers.m_product.addAtribute');
    }
    public function store(Request $request)
    {
        Log::info('Request Data:', $request->all());

        $validator = Validator::make($request->all(), [
            'AttributeName' => 'required|string|max:255',
            'Value' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            Log::error('Validation errors:', $validator->errors()->toArray());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $attribute = ProductAttribute::create([
                'AttributeName' => $request->AttributeName,
            ]);

            Log::info('Attribute created:', $attribute->toArray());

            ProductAttributeValue::create([
                'AttributeID' => $attribute->AttributeID,
                'Value' => $request->Value,
            ]);

            Log::info('Attribute Value created:', ['AttributeID' => $attribute->AttributeID, 'Value' => $request->Value]);

            return redirect()->route('products.create')->with('success', 'Thêm thuộc tính thành công!');
        } catch (\Exception $e) {
            Log::error('Error creating attribute or value:', ['message' => $e->getMessage()]);
            return redirect()->route('products.create')->with('error', 'Thêm thuộc tính thất bại.');
        }
    }

//
}
