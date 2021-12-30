<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Classes\Numbering;

class CustomerController extends Controller
{
    // create Customer
    public function store(Request $request)
    {
        // get latest data
        $data_terakhir = Customer::get()->last();
        $data = $request->all();
        $customers = new Customer();
        $id_code = new Numbering();
        if ($data_terakhir == null) {
            $customers->code = $id_code->createNumbering('CSTMR21ABC00000', 'CSTMR', $data['customer_name']);
        } else {
            $customers->code = $id_code->createNumbering($data_terakhir['code'], 'CSTMR', $data['customer_name']);
        }
        $customers->customer_name = $data['customer_name'];
        $customers->customer_address = $data['customer_address'];
        $customers->customer_country = $data['customer_country'];
        $customers->customer_phone = $data['customer_phone'];
        $customers->customer_phone_1 = $data['customer_phone_1'];
        $customers->customer_pic = $data['customer_pic'];
        $customers->customer_faxmile = $data['customer_faxmile'];
        $customers->customer_email = $data['customer_email'];
        $customers->customer_tax_number = $data['customer_tax_number'];
        $customers->customer_pic_phone = $data['customer_pic_phone'];
        $customers->save();
        return response()->json([['message'=>'Succes Input Data'], $data], 201);
    }
}
