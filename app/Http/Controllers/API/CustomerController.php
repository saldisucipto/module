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
        return response()->json([['message' => 'Succes Input Data'], $data], 201);
    }

    // Show Customer Data On Table
    public function showAllCustomers()
    {
        // $customers = Customer::orderBy('created_at')->get();
        $customers = Customer::latest()->get();
        return response()->json(['message' => 'Succesfully Request', 'customers' => $customers], 200);
    }

    // Customers Detail
    public function customersDetail(Request $request, $code = null)
    {
        if ($request->isMethod('get')) {
            $customer = Customer::find($code);
            return response()->json(['message' => 'Succesfully Request', 'customer' => $customer], 200);
        } elseif ($request->isMethod('put')) {
            $dataInpitan = $request->all();
            $customerUpdate = Customer::find($code);
            $customerUpdate->customer_name = $dataInpitan['customer_name'];
            $customerUpdate->customer_address = $dataInpitan['customer_address'];
            $customerUpdate->customer_country = $dataInpitan['customer_country'];
            $customerUpdate->customer_phone = $dataInpitan['customer_phone'];
            $customerUpdate->customer_phone_1 = $dataInpitan['customer_phone_1'];
            $customerUpdate->customer_pic = $dataInpitan['customer_pic'];
            $customerUpdate->customer_faxmile = $dataInpitan['customer_faxmile'];
            $customerUpdate->customer_email = $dataInpitan['customer_email'];
            $customerUpdate->customer_tax_number = $dataInpitan['customer_tax_number'];
            $customerUpdate->customer_pic_phone = $dataInpitan['customer_pic_phone'];
            $customerUpdate->update();
            return response()->json(['message' => 'Data Berhasil Di Update', 'data' => $dataInpitan], 200);
        }
    }

    // Customers Delete
    function deleteCust($code = null)
    {
        $customer = Customer::find($code);
        $customer->delete();
        return response()->json(['message' => 'Berhasil Untuk Menghapus Data', 'customer' => $customer]);
    }
}
