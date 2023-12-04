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
        Schema::create('tablaproductos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_vencimiento');
            $table->decimal('precio', 8, 2);
            $table->integer('cantidad');
            $table->boolean('estado')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tablaproductos');
    }
};
