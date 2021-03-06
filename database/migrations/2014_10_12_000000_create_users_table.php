<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('servicio');
            $table->string('direccion');
            $table->string('descripcion');
            $table->string('telefono');
            $table->timestamps();
<<<<<<< HEAD
            $table->string('rol');

            // telefono, servicio, direccion, descripcion.
=======
           
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
