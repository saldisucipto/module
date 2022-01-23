<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_info', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 60);
            $table->string('company_name_tag', 100)->nullable();
            $table->string('company_address');
            $table->string('company_email', 70)->nullable();
            $table->string('company_phone_1', 13);
            $table->string('company_phone_2', 13)->nullable();
            $table->string('company_fax', 13)->nullable();
            $table->string('company_taxt_number', 50)->nullable();
            $table->string('company_rekening_name', 50)->nullable();
            $table->string('company_rekening_number', 15)->nullable();
            $table->string('company_rekening_name_1', 50)->nullable();
            $table->string('company_rekening_number_1', 15)->nullable();
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
        Schema::dropIfExists('company_info');
    }
}
