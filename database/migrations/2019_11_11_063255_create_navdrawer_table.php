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
            $table->char('name')->unique();
            $table->char('icon')->nullable();
            $table->integer('order')->nullable();            
            $table->boolean('active')->default(false);
            $table->unsignedBigInteger('page_id')->nullable();
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
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
