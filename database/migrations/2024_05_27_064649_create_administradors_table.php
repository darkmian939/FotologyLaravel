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
        Schema::create('administradores', function (Blueprint $table) {
            $table->bigIncrements('IDadministrador');
            $table->string('Email', 50)->unique();
            $table->string('password');
            $table->timestamps();
        });

        // Tabla Clientes
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('IDcliente');
            $table->string('nameUser', 255);
            $table->string('username', 90)->nullable();
            $table->string('phone', 15);
            $table->string('document', 50)->nullable();
            $table->date('birthday')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('email', 255)->unique();
            $table->string('password', 255);
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
            $table->string('facebook')->nullable()->change();
            $table->string('instagram')->nullable()->change();
            $table->timestamps();
        });

        // Tabla Portafolio
        Schema::create('portafolios', function (Blueprint $table) {
            $table->string('IDportafolio', 15)->primary();
            $table->unsignedBigInteger('IDfotografo');
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