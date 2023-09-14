<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddDressproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add__dressproducts', function (Blueprint $table) {
            $table->id();
            $table->string('Dress_no');
            $table->string('Dress_name');
            $table->string('Dress_code');
            $table->string('Dress_Rate');
            $table->string('Dress_Stock');
            $table->string('cust_code');
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
        Schema::dropIfExists('add__dressproducts');
    }
}
