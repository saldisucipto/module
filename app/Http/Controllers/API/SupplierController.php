<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Classes\Numbering;

class SupplierController extends Controller
{
    //index function
    function index(Request $request)
    {
        $supplier = Supplier::get()->last();
        $allSupplier = Supplier::latest()->get();
        $data = $request->all();
        if ($request->isMethod('GET')) {
            return response()->json(['message' => 'Get Method Supplier Done', 'supplier' => $allSupplier], 200);
        } elseif ($request->isMethod('post')) {
            $supplierNew = new Supplier();
            $id_code = new Numbering();
            if ($supplier == null) {
                $supplierNew->code = $id_code->createNumbering('SPLR21ABC00000', 'SPPLR', $data['supplier_name']);
            } else {
                $supplierNew->code = $id_code->createNumbering($supplier['code'], 'SPPLR', $data['supplier_name']);
            }
            $supplierNew->supplier_name = $data['supplier_name'];
            $supplierNew->supplier_address = $data['supplier_address'];
            $supplierNew->supplier_country = $data['supplier_country'];
            $supplierNew->supplier_phone = $data['supplier_phone'];
            $supplierNew->supplier_pic = $data['supplier_pic'];
            $supplierNew->supplier_faxmile = $data['supplier_faxmile'];
            $supplierNew->supplier_email = $data['supplier_email'];
            $supplierNew->supplier_tax_number = $data['supplier_tax_number'];
            $supplierNew->supplier_pic_phone = $data['supplier_pic_phone'];
            $supplierNew->save();
            return response()->json(['message' => 'Create Supplier Berhasil'], 200);
        }
    }
}
