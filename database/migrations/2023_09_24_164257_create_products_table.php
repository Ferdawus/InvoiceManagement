<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('brand_id');
            $table->bigInteger('customer_id');
            $table->bigInteger('supplier_id');
            $table->bigInteger('category_id');
            $table->string('product_name');
            $table->string('product_code')->nullable();
            $table->decimal('purchase_price')->default(0);
            $table->decimal('sales_price')->default(0);
            $table->decimal('mrp')->default(0);
            $table->integer('quantitiy')->default(0);
            $table->integer('alert_quantity')->default(0);
            $table->integer('tax')->default(0);
            $table->integer('discount')->default(0);
            $table->date('date')->nullable();
            $table->string('barcode')->nullable();
            $table->text('qrcode')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => In-Active | 1 => Active');
            $table->text('note')->nullable();
            $table->text('meta_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
