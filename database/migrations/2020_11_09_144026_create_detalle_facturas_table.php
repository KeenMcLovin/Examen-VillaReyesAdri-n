<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->increments('num_detalle');
            $table->integer('numero_factura');
            $table->unsignedInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->integer('cantidad');
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
        Schema::dropIfExists('detalle_facturas');
    }
}
