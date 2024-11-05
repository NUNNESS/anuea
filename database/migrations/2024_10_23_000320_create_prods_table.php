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
        Schema::create('prods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string(column: 'prod_name');
            $table->string(column: 'prod_price');
            $table->string(column: 'prod_descri');
            $table->string(column: 'prod_category');
            $table->string(column: 'prod_file_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prods');
    }
};
