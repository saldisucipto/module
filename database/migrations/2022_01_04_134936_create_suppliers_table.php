<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->string('code', 15)->primary();
            $table->string('supplier_name', 50);
            $table->text('supplier_address');
            $table->string('supplier_country');
            $table->string('supplier_phone', 13);
            $table->string('supplier_faxmile', 13)->nullable();
            $table->string('supplier_email', 50)->nullable();
            $table->string('supplier_tax_number', 15)->nullable();
            $table->string('supplier_pic', 50);
            $table->string('supplier_pic_phone', 13);
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
        Schema::dropIfExists('suppliers');
    }
}
