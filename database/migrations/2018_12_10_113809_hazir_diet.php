<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HazirDiet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hazir_diet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('meal');
            $table->text('content');
            $table->string('time');
            $table->timestamp('added_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hazir_diet');
    }
}
