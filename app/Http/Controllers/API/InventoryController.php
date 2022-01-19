<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Classes\ImageHandling;
use App\Classes\Numbering;
use App\Classes\BarcodeGenerator;

class InventoryController extends Controller
{
    //
    public function index(Request $request)
    {
        $data_parsing = $request->all();
        $inventory_terakhir = Inventory::get()->last();
        $inventory = Inventory::latest()->get();
        if ($request->isMethod('get')) {
            return response()->json(['message' => 'Berhasil Mengambil Data Inventory', 'inventory' => $inventory], 200);
        } elseif ($request->isMethod('post')) {
            $createInventory = new Inventory;
            $number = new Numbering;
            $image = new ImageHandling;
            $barcode = new BarcodeGenerator;
            // return response()->json($request->file('inventory_images'));
            // die;

            if ($inventory_terakhir == null) {
                $createInventory->code = $number->createNumbering('INVT21ABC000000', 'INVT', $data_parsing['inventory_name']);
            } else {
                $createInventory->code = $number->createNumbering($inventory_terakhir['code'], 'INVT', $data_parsing['inventory_name']);
            }
            $createInventory->inventory_name = $data_parsing['inventory_name'];
            $createInventory->inventory_description = $data_parsing['inventory_description'];
            $createInventory->inventory_type_1 = $data_parsing['inventory_type_1'];
            $createInventory->inventory_type_2 = $data_parsing['inventory_type_2'];
            $createInventory->inventory_unit_1 = $data_parsing['inventory_unit_1'];
            $createInventory->inventory_unit_2 = $data_parsing['inventory_unit_2'];
            $createInventory->inventory_price = $data_parsing['inventory_price'];
            $createInventory->inventory_stok = $data_parsing['inventory_stok'];
            $createInventory->inventory_barcode = $barcode->createBarcode('qrinventory-' . $createInventory->code, $createInventory->code, 'inventory');
            $createInventory->inventory_part_number = $data_parsing['inventory_part_number'];
            $createInventory->inventory_images = $image->upload($request->file('inventory_images'), 'Inventory', 'inventory');
            $createInventory->save();
            return response()->json(['message' => 'Berhasil Membuat Inventory Baru', 'data' => $data_parsing], 201);
        }
    }

    // update info
    public function infoUpdate(Request $request, $code = null)
    {
        $infoInventory = Inventory::find($code);
        $data_parsing = $request->all();
        $image = new ImageHandling;
        if ($request->isMethod('get')) {
            return response()->json(['message' => 'success getting data', 'data' => $infoInventory], 200);
        } elseif ($request->isMethod('post')) {
            // debug
            // return response()->json(['data' => $data_parsing]);
            // die;
            $infoInventory->inventory_name = $data_parsing['inventory_name'];
            $infoInventory->inventory_description = $data_parsing['inventory_description'];
            $infoInventory->inventory_type_1 = $data_parsing['inventory_type_1'];
            $infoInventory->inventory_type_2 = $data_parsing['inventory_type_2'];
            $infoInventory->inventory_unit_1 = $data_parsing['inventory_unit_1'];
            $infoInventory->inventory_unit_2 = $data_parsing['inventory_unit_2'];
            $infoInventory->inventory_price = $data_parsing['inventory_price'];
            $infoInventory->inventory_stok = $data_parsing['inventory_stok'];
            $infoInventory->inventory_part_number = $data_parsing['inventory_part_number'];
            if ($request->file('inventory_images')) {
                $infoInventory->inventory_images = $image->upload($request->file('inventory_images'), 'Inventory', 'inventory');
                $infoInventory->inventory_images = $image->update($infoInventory->inventory_images, 'inventory');
            }
            $infoInventory->update();
            return response()->json(['message' => 'success puting data', 'data' => $infoInventory], 201);
        }
    }
}
