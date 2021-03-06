<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();

            $table->string("title",100);
            $table->text("descripcion");
            
            $table->dateTime("start");
            $table->dateTime("end");
            $table->unsignedBigInteger("id_users");
            $table->foreign("id_users")->references('id')->on('users');
            $table->unsignedBigInteger("id_cliente");
            $table->foreign("id_cliente")->references('id')->on('cliente');
            $table->timestamps();
            $table->unsignedBigInteger("id_users");
            $table->foreign("id_users")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
