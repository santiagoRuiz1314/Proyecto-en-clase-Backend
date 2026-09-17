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
        Schema::table('table_products', function (Blueprint $table) {
            // decimal() sin argumentos equivale a decimal(8,2): solo admite hasta 999999.99
            $table->decimal('price', 12, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_products', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->change();
        });
    }
};
