<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMysourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mysources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('source');
            $table->string('instrument');
            $table->string('montant');
            $table->unsignedBigInteger('component_id');
            $table->foreign('component_id')
                            ->references('id')
                            ->on('mycomponents')
                            ->onDelete('cascade');
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
        Schema::dropIfExists('mysources');
    }
}
