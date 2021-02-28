<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMysdgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mysdgs', function (Blueprint $table) {
            $table->id();
            $table->string('sdg');
            $table->string('name');
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
        Schema::dropIfExists('mysdgs');
    }
}
