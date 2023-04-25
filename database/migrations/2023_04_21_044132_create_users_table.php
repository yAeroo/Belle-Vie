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
            $table->id(); // Columna 'Id' - Llave primaria, único, autoincrement
            $table->string('username', 15); // Columna 'Username' - String
            $table->string('name', 20); // Columna 'Name' - String
            $table->string('last_name', 20); // Columna 'Last_name' - String
            $table->string('email', 30)->unique(); // Columna 'Email - String, único
            $table->string('phone_number', 9)->nullable(); // Columna 'Phone_number' - String, puede ser Null
            $table->string('password'); // Columna 'Password' - String
            $table->enum('gender', ['M', 'F']); // Columna 'gender' - Femenino y masculino
            $table->enum('type', ['user', 'admin', 'owner']); // Columna 'type' - Rol de usuario, admin y propietario
            $table->string('profile_pic', 30)->default("default-pfp.png"); // Columna 'profile_pic' - string con valor por default "default-pfp.png" para nuevos usuarios
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
