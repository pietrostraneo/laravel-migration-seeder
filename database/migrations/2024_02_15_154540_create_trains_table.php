<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('arrival', 100);
            $table->string('departure', 100);
            $table->time('arrival_time');
            $table->time('departure_time');
            $table->integer('train_code');
            $table->smallInteger('carriages');
            $table->tinyInteger('on_time')->default('1');
            $table->tinyInteger('ereased')->default('0');
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
        Schema::dropIfExists('trains');
    }
};
