<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('code', 12)->primary();
            $table->string('customer_name', 50);
            $table->text('customer_address');
            $table->string('customer_country');
            $table->string('customer_phone', 13);
            $table->string('customer_phone_1', 13)->nullable();
            $table->string('customer_faxmile', 13)->nullable();
            $table->string('customer_email', 50)->nullable();
            $table->string('customer_tax_number', 15)->nullable();
            $table->string('customer_pic', 50);
            $table->string('customer_pic_phone', 13);
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
        Schema::dropIfExists('customers');
    }
}
