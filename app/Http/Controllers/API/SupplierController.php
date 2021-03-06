<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Classes\Numbering;

class SupplierController extends Controller
{
    //index function
    public function index(Request $request)
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

    // detailOrEdit
    public function detailOrEdit(Request $update, $code = null)
    {
        $data = $update->all();
        $supplier = Supplier::find($code);
        if ($update->isMethod('get')) {
            return response()->json(['message' => 'done geting data', 'supplier' => $supplier]);
        } elseif ($update->isMethod('put')) {
            $supplier->supplier_name = $data['supplier_name'];
            $supplier->supplier_address = $data['supplier_address'];
            $supplier->supplier_country = $data['supplier_country'];
            $supplier->supplier_phone = $data['supplier_phone'];
            $supplier->supplier_pic = $data['supplier_pic'];
            $supplier->supplier_faxmile = $data['supplier_faxmile'];
            $supplier->supplier_email = $data['supplier_email'];
            $supplier->supplier_tax_number = $data['supplier_tax_number'];
            $supplier->supplier_pic_phone = $data['supplier_pic_phone'];
            $supplier->update();
            return response()->json(['message' => "Berhasil Memperbaharui Data $supplier->supplier_name "], 200);
        }
    }

    // deleteFunction
    public function deleteSuppl($code = null)
    {
        $supplier = Supplier::find($code);
        $supplier->delete();
        return response(['message'=>"Supplier $supplier->supplier_name Berhasil dihapus"], 201);
    }
}
