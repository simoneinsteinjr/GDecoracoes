<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTalheres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talheres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantidade');
            $table->double('preco');
            $table->string('foto');

            $table->integer('tipo_talhere_id')->unsigned();
            $table->foreign('tipo_talhere_id')->references('id')->on('tipo_talheres')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talheres');
    }
}
