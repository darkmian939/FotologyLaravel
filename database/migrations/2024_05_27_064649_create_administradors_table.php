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
        // Crear la tabla Fotografias
        Schema::create('fotografias', function (Blueprint $table) {
            $table->string('IDfotografia', 15)->primary();
            $table->string('Titulo', 50);
            $table->text('Descripcion');
            $table->string('IDcategoria', 15);
            $table->integer('IDfotografo');
            $table->integer('IDcalificacion');
            $table->timestamps();
        });

        // Crear la tabla Fotografos
        Schema::create('fotografos', function (Blueprint $table) {
            $table->increments('IDfotografo');
            $table->string('Nombre_fotografo', 50);
            $table->string('Foto_de_perfil', 255);
            $table->text('Descripcion');
            $table->string('Email', 30);
            $table->string('Contrasena', 20);
            $table->string('Direccion', 50);
            $table->string('Telefono', 30);
            $table->string('Portafolio', 50);
            $table->timestamps();
        });

        // Crear la tabla Portafolios
        Schema::create('portafolios', function (Blueprint $table) {
            $table->string('IDportafolio', 15)->primary();
            $table->integer('IDfotografo');
            $table->string('Nombre_portafolio', 30);
            $table->timestamps();
        });

        // Crear la tabla Administradores
        Schema::create('administradores', function (Blueprint $table) {
            $table->bigIncrements('IDadministrador');
            $table->string('Email', 50);
            $table->string('Contrasena', 20);
            $table->timestamps();
        });

        // Crear la tabla Calificaciones
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->increments('IDcalificacion');
            $table->integer('ValorCalificacion');
            $table->string('IDfotografia', 15);
            $table->timestamps();
        });

        // Crear la tabla Categorias
        Schema::create('categorias', function (Blueprint $table) {
            $table->string('IDcategoria', 20)->primary();
            $table->string('Nombre', 20);
            $table->text('Descripcion');
            $table->string('IDportafolio', 15);
            $table->timestamps();
        });

        // Crear la tabla Clientes
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('IDcliente', 30)->primary();
            $table->string('Nombre_cliente', 50);
            $table->string('Email', 50);
            $table->string('Contrasena', 20);
            $table->bigInteger('Telefono');
            $table->string('Foto_de_perfil', 255); // Nueva columna para la foto de perfil
            $table->timestamps();
        });

        // Crear la tabla Comentarios
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('IDcomentario');
            $table->string('IDfotografia', 15);
            $table->string('IDcliente', 30);
            $table->dateTime('Fecha_comentario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotografias');
        Schema::dropIfExists('fotografos');
        Schema::dropIfExists('portafolios');
        Schema::dropIfExists('administradores');
        Schema::dropIfExists('calificaciones');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('comentarios');
    }
};