<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('ferisoft_barcode_id');
            $table->integer('marketplace_type');
            $table->integer('package_status');
            $table->string('order_date');
            $table->text('shipment_full_address');
            $table->string('shipment_full_name');
            $table->text('invoice_full_address');
            $table->string('invoice_full_name');
            $table->integer('order_number');
            $table->integer('package_no');
            $table->string('customer_first_name');
            $table->string('customer_last_name');
            $table->string('customer_email');
            $table->string('quantity');
            $table->string('merchant_sku');
            $table->integer('barcode');
            $table->string('price');
            $table->string('currency_code');
            $table->string('cargo_provide_name');
            $table->string('cargo_tracking_number');
            $table->string('cargo_tracking_link');
            $table->string('agreed_delivery_date');
            $table->string('fast_delivery');
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
        Schema::dropIfExists('registered_orders');
    }
};
