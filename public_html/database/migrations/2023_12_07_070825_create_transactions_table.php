<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->string('transaction_date');
            $table->string('scheduled_return_date')->nullable();
            $table->string('status');
            $table->bigInteger('encoded_by');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("ALTER TABLE tbl_transactions AUTO_INCREMENT = 20000000;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_transactions');
    }
};
