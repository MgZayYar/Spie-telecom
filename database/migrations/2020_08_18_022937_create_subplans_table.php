<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subplans', function (Blueprint $table) {
            $table->id();
            $table->text('photo');
            $table->string('name');
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('price');
            $table->longText('description');

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('plan_id')
                  ->references('id')->on('plans')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subplans');
    }
}
