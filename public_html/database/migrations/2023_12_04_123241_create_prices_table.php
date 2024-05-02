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
        Schema::create('tbl_prices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->string('sale_price')->nullable();
            $table->string('rent_price')->nullable();
            $table->string('damage_deposit')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('encoded_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_prices');
    }
};
