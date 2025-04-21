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
        Schema::table('medicamentos', function (Blueprint $table) {
            if (!Schema::hasColumn('medicamentos', 'cantidad_por_empaque')) {
                $table->integer('cantidad_por_empaque');
            }
            if (!Schema::hasColumn('medicamentos', 'precio_por_empaque')) {
                $table->decimal('precio_por_empaque', 8, 2)->nullable();
            }
            if (!Schema::hasColumn('medicamentos', 'estado')) {
                $table->string('estado')->default('activo');
            }
            if (!Schema::hasColumn('medicamentos', 'fecha_fabricacion')) {
                $table->date('fecha_fabricacion')->nullable();
            }
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medicamentos', function (Blueprint $table) {
            $table->dropColumn(['precio_por_empaque', 'cantidad_por_empaque', 'estado', 'fecha_fabricacion']);
        });
    }
};