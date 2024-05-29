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
        // Tabla Administrador
        Schema::create('administrador', function (Blueprint $table) {
            $table->bigIncrements('IDadministrador');
            $table->string('Email', 50);
            $table->string('password', 20);
            $table->timestamps();
        });

        // Tabla Cliente
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('IDcliente', 30)->primary();
            $table->string('email', 180)->unique();
            $table->string('nameUser', 180);
            $table->string('username', 90)->unique();
            $table->string('phone', 15);
            $table->string('document', 50)->unique();
            $table->date('birthday');
            $table->string('image', 255)->nullable();
            $table->string('password', 90);
            $table->timestamps();
        });

        // Tabla Fotografo
        Schema::create('fotografos', function (Blueprint $table) {
            $table->bigIncrements('IDfotografo');
            $table->string('email', 180)->unique();
            $table->string('nameUser', 180);
            $table->string('username', 90)->unique();
            $table->string('phone', 15);
            $table->string('adress', 90);
            $table->date('birthday');
            $table->string('image', 255);
            $table->text('description');
            $table->string('password', 90);
            $table->string('facebook', 90);
            $table->string('instagram', 90);
            $table->timestamps();
        });

        // Tabla Portafolio
        Schema::create('portafolios', function (Blueprint $table) {
            $table->string('IDportafolio', 15)->primary();
            $table->unsignedBigInteger('IDfotografo');
            $table->string('Nombre_portafolio', 30);
            $table->timestamps();
        });

        // Tabla Fotografia
        Schema::create('fotografias', function (Blueprint $table) {
            $table->string('IDfotografia', 15)->primary();
            $table->string('title', 50);
            $table->text('description');
            $table->string('IDcategoria', 15);
            $table->unsignedBigInteger('IDfotografo');
            $table->timestamps();
        });

        // Tabla Categorias
        Schema::create('categorias', function (Blueprint $table) {
            $table->string('IDcategoria', 20)->primary();
            $table->string('nameCategorie', 20);
            $table->timestamps();
        });

        // Tabla Calificacion
        Schema::create('calificacions', function (Blueprint $table) {
            $table->bigIncrements('IDcalificacion');
            $table->integer('calification');
            $table->unsignedBigInteger('IDfotografo');
            $table->text('coment');
            $table->timestamps();
        });

        Schema::create('contactofotografos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->string('gmail', 100);
            $table->text('mensaje');
            $table->timestamps();
        });

        Schema::create('contactoclientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->string('gmail', 100);
            $table->text('mensaje');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calificacions');
        Schema::dropIfExists('fotografias');
        Schema::dropIfExists('portafolios');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('fotografos');
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('administrador');
        Schema::dropIfExists('contactofotografos');
        Schema::dropIfExists('contactoclientes');
    }
};
