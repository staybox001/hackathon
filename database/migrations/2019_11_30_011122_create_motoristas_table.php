<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotoristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motoristas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('cpf', 30);
            $table->datetime('data_nascimento');
            $table->string('senha', 255);
            $table->string('foto', 255);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motoristas');
    }
}
