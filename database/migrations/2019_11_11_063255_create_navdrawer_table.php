<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavdrawerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navdrawer', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();            
            $table->char('nav_title')->nullable();
            $table->char('icon')->nullable();
            $table->integer('nav_order')->nullable();
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
        Schema::dropIfExists('navdrawer');
    }
}
