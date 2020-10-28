<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tiendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {           
            Schema::create('tiendas', function (Blueprint $table) {
                $table->string('nombreTienda')->unique();
                $table->string('especialidad');
                $table->string('horario');
                $table->integer('codTienda')->primary()->unique();
            });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiendas');
    }
}