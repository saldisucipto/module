<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->string('code', 15)->primary();
            $table->string('inventory_name', 50);
            $table->text('inventory_description');
            $table->string('inventory_part_number', 15)->nullable();
            $table->string('inventory_type', 4);
            $table->tinyInteger('inventory_unit_1',);
            $table->tinyInteger('inventory_unit_2',);
            $table->bigInteger('inventory_price');
            $table->tinyInteger('inventory_stok',);
            $table->string('inventory_images', 50)->nullable();
            $table->string('inventory_barcode', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
