<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('role', ['cliente', 'entrenador']);
            $table->decimal('peso', 8, 2)->nullable();
            $table->decimal('altura', 8, 2)->nullable();
            $table->enum('genero', ['hombre', 'mujer', 'otro'])->nullable();
            $table->unsignedInteger('edad')->nullable();
            $table->enum('especialidad', ['Preparadorfisico', 'otro'])->nullable();
            $table->text('condicion_fisica_actual')->nullable();
            $table->text('objetivo')->nullable();
            $table->enum('nivel_actividad', ['sedentario', 'ligeramente_activo', 'moderadamente_activo', 'hiperactivo'])->nullable();
            $table->enum('patologias', ['SI', 'NO'])->nullable();
            $table->text('especificacion_patologia')->nullable();
            $table->text('lesiones_molestias')->nullable();
            $table->decimal('bmi_imc', 8, 2)->nullable();
            $table->decimal('grasa_corporal', 8, 2)->nullable();
            $table->decimal('musculatura_corporal', 8, 2)->nullable();
            $table->decimal('calorias_diarias_basales', 8, 2)->nullable();
            $table->unsignedInteger('edad_cuerpo')->nullable();
            $table->decimal('grasa_visceral', 8, 2)->nullable();
            $table->decimal('brazo', 8, 2)->nullable();
            $table->decimal('pierna', 8, 2)->nullable();
            $table->decimal('cintura', 8, 2)->nullable();
            $table->decimal('cadera', 8, 2)->nullable();
            $table->decimal('pecho', 8, 2)->nullable();
            $table->enum('evaluacion_fms', ['sentadilla', 'tobillo', 'zancada', 'hombro'])->nullable();
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
}
