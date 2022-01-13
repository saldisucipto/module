<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Classes\ImageFiles;

class InventoryController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            $inventory = Inventory::get()->last();
            return response()->json(['message'=> 'Berhasil Mengambil Data Inventory', 'inventory' => $inventory], 200);
        } elseif ($request->isMethod('post')) {
            return response()->json('Hallo Inventory End Point POST Method');
        }
    }
}
