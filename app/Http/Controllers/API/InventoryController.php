<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public function index()
    {
        return response()->json('Hallo Inventory End Point');
    }
}
