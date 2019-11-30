<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class References extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('produtos', function(Blueprint $table)
		{
            $table->foreign('id_categoria', 'fk_produtos_categoria')->references('id')->on('categorias');
        });
        
        Schema::table('geolocations', function(Blueprint $table)
		{
            $table->foreign('id_motorista', 'fk_geolocation_motorista')->references('id')->on('motoristas');
        });
        
        Schema::table('entregas', function(Blueprint $table)
		{
            $table->foreign('id_produto', 'fk_entrega_produto')->references('id')->on('produtos');
            $table->foreign('id_cliente', 'fk_entrega_cliente')->references('id')->on('clientes');
            $table->foreign('id_motorista', 'fk_entrega_motorista')->references('id')->on('motoristas');
		});

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
