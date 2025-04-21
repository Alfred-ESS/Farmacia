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

    Schema::create('entradas', function (Blueprint $table) {

        $table->id();

        $table->unsignedBigInteger('id_medicamento');

        $table->integer('cantidad');

        $table->decimal('precio_unitario', 8, 2);

        $table->unsignedBigInteger('id_usuario');

        $table->timestamps();



        $table->foreign('id_medicamento')->references('id')->on('medicamentos');

        $table->foreign('id_usuario')->references('id')->on('users');



        // Hacer que id_proveedor sea opcional

        $table->unsignedBigInteger('id_proveedor')->nullable();

        $table->foreign('id_proveedor')->references('id')->on('proveedores');

    });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};
