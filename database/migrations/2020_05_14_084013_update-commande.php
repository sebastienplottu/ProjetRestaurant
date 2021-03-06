<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCommande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('commande', function (Blueprint $table) {
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('client');
            $table->unsignedBigInteger('id_plat');
            $table->foreign('id_plat')->references('id')->on('plat');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
