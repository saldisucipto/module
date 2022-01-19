<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/create-customers', 'API\CustomerController@store')->name('createCutomerData');
    Route::get('/get-all-customers', 'Api\CustomerController@showAllCustomers')->name('getAllCutsomerData');
    // Master Customer API EndPoint
    Route::match(['GET', 'PUT'], '/customer/{code}', 'Api\CustomerController@customersDetail')->name('getCustomersData');
    Route::delete('/customer/delete/{code}', 'API\CustomerController@deleteCust');
    // Master Customer API EndPoint
    Route::group(['prefix' => 'supplier'], function () {
        Route::match(['get', 'post'], '/', 'API\SupplierController@index')->name('supplier');
        Route::match(['get', 'put'], '/{code}', 'API\SupplierController@detailOrEdit')->name('supplierData');
        Route::delete('/d/{code}', 'API\SupplierController@deleteSuppl')->name('deleteSupplier');
    });
    // Master Inventory API EndPoint
    Route::group(['prefix' => 'inventory'], function () {
        Route::match(['get', 'post'], '/', 'API\InventoryController@index')->name('inventory');
        Route::match(['get', 'post'], '/{code}', 'API\InventoryController@infoUpdate')->name('inventoryInformasi');
    });
});


Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();
    if (!$user || !Hash::check($request->password, $user->password)) {
        return response([
            'message' => ['These credentials do not match our records.']
        ], 404);
    }
    $token = $user->createToken('my-app-token')->plainTextToken;

    $response = [
        'user' => $user,
        'token' => $token
    ];

    return response($response, 201);
});
