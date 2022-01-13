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
        $inventory = Inventory::get()->last();
        if ($request->isMethod('get')) {
            return response()->json(['message' => 'Berhasil Mengambil Data Inventory', 'inventory' => $inventory], 200);
        } elseif ($request->isMethod('post')) {
            $createInventory = new Inventory;
            $number = new Numbering;
            $image = new ImageHandling;
            $barcode = new BarcodeGenerator;

            $createInventory->code = $data_parsing['code'];
            $createInventory->inventory_name = $data_parsing['inventory_name'];
            $createInventory->inventory_description = $data_parsing['inventory_description'];
            $createInventory->inventory_type = $data_parsing['inventory_type'];
            $createInventory->inventory_unit_1 = $data_parsing['inventory_unit_1'];
            $createInventory->inventory_unit_2 = $data_parsing['inventory_unit_2'];
            $createInventory->inventory_price = $data_parsing['inventory_price'];
            $createInventory->inventory_stok = $data_parsing['inventory_stok'];
            $createInventory->inventory_barcode = $barcode->createBarcode('qrinventory', $data_parsing['code'], 'inventory');
            $createInventory->inventory_part_number = $data_parsing['inventory_part_number'];
            $createInventory->inventory_images = $image->upload($request->file('inventory_images'), 'Inventory', 'inventory');
            $createInventory->save();
            return response()->json(['message' => 'Berhasil Membuat Inventory Baru', 'data' => $data_parsing], 201);
        }
    }
}
