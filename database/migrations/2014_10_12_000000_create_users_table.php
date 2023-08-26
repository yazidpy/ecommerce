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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('telephone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('adresse_livraison')->nullable();
            $table->string('adresse_fact')->nullable();
            $table->date('date_naissance')->nullable();
            $table->enum('sexe',['Homme',['Femme']])->nullable();
            $table->enum('preference',['Email','SMS'])->default('Email');
            $table->string('statut')->default('active');
            $table->string('role')->default('utilisateur');
            $table->binary('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
