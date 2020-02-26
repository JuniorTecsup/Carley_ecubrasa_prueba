<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Irregularidades extends Migration
{
    public function up()
    {
        Schema::create('irregularidades',function (Blueprint $table){
                        $table->increments('id');
                        $table->integer('ot_id')->unsigned();
                        $table->string('estado',1);
                        $table->string('mensaje',40);
                        $table->string('placa');//no foreign//relleno automatico 
                    $table->foreign('ot_id')->references('id')->on('ordentrabajo');
                        
            });
    }

    public function down()
    {
        Schema::dropIfExists('irregularidades');
    }
}
