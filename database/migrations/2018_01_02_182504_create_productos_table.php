<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->mediumText('extracto');
            $table->text('descripcion');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
