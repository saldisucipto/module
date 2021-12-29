<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // create Customer
    public function store(Request $request)
    {
        // $customers = Customer::create($request->all());
        $data = $request->all();
        $customers = new Customer();
        $customers->code = 'CSTMR21ABC00001';
        $customers->customer_name = $data['customer_name'];
        $customers->customer_address = $data['customer_address'];
        $customers->customer_country = $data['customer_country'];
        $customers->customer_phone = $data['customer_phone'];
        $customers->customer_phone_1 = $data['customer_phone_1'];
        $customers->customer_pic = $data['customer_pic'];
        $customers->customer_pic_phone = $data['customer_pic_phone'];
        $customers->save();
        return response()->json([['message'=>'Succes Input Data'], $data], 201);
    }

    // info
    public function info()
    {
        $data = 'data prsing';
        return response()->json([
            'message' => ['Info Oke'], $data
        ], 201);
    }
}
