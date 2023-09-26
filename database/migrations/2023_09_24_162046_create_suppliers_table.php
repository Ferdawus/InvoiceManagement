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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('customer_name');
            $table->string('contact_number');
            $table->string('alternative_contact_number')->nullable();
            $table->string('email')->nullable();
            $table->string('credit_limit')->nullable();
            $table->string('address')->nullable();
            $table->decimal('opening_balance')->default(0);
            $table->string('nid_no')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => In-Active | 1 => Active');
            $table->text('photo')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
};
