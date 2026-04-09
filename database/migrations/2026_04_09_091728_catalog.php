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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('product_detail',function(Blueprint $table)){
            $table->uuid('id')->primary();

            $table->string('product_name');
            $table->string('product_details');
            $table->decimal('stock');

        }
    }
};
