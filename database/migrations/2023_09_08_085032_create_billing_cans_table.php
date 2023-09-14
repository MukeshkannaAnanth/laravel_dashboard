<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingCansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_cans', function (Blueprint $table) {
            $table->id();
            $table->string('day_can_count');
            $table->string('can');
            $table->string('date');
            $table->string('time');
            $table->string('rate');
            $table->string('qty');
            $table->string('type');
            $table->string('offer');
            $table->string('total');
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
        Schema::dropIfExists('billing_cans');
    }
}
