<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_probable');
            $table->string('fecha_contacto');
            $table->string('acuerdo');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('cliente_id')->unsigned();
            $table->bigInteger('producto_id')->unsigned();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onUpdate('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
