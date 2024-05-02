<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('category_id');
            $table->integer('for_rent')->default(0);
            $table->integer('for_sale')->default(0);
            $table->integer('available_for_rent')->default(0);
            $table->boolean('is_archived')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("ALTER TABLE tbl_products AUTO_INCREMENT = 10000000;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_products');
    }
};
