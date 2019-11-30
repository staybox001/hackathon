<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status', 30)->default(0);
            $table->bigInteger('id_produto')->unsigned()->index('fk_entrega_produto');
            $table->integer('quantidade');
            $table->bigInteger('id_cliente')->unsigned()->index('fk_entrega_cliente');
            $table->bigInteger('id_motorista')->unsigned()->nullable()->index('fk_entrega_motorista');
            $table->string('latitude', 30)->nullable();
            $table->string('longitude', 30)->nullable();
            $table->datetime('data_entrega')->nullable();
            $table->string('foto_entrega', 100)->nullable();
            $table->string('foto_nota', 100)->nullable();
            $table->dateTime('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregas');
    }
}
