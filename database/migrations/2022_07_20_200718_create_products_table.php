<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_del_pedido');
            $table->string('cliente');
            $table->string('Direccion_de_Entrega');
            $table->string('nombre_del_producto');
            $table->integer('referencia');
            $table->integer('cantidad');
            $table->string('estado_del_pedido');
            $table->date('fecha_estimada_de_entrega');
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
        Schema::dropIfExists('products');
    }
}
