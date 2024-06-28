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
        Schema::create('libro_tiendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_libro');
            $table->unsignedBigInteger('id_tienda');
            $table->timestamps();


            
            $table->foreign('id_libro')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('id_tienda')->references('id')->on('tiendas')->onDelete('cascade');

            $table->unique(['id_libro','id_tienda']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro_tiendas');
    }
};
