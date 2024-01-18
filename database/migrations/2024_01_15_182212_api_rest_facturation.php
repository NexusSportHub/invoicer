<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('FACT_METODOS_PAGO')) {
            echo "this table exists";
        }
        if (Schema::hasTable('FACT_PERIODO')) {
            echo "this table exists";
        }
        if (Schema::hasTable('FACT_SUSCRIPCION')) {
            echo "this table exists";
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
