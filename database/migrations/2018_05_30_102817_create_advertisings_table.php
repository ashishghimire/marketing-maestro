<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('file')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('featured');
            $table->string('slug');
            $table->integer('order')->nullable();
            $table->integer('advertising_category_id')->unsigned();
            $table->foreign('advertising_category_id')->references('id')->on('advertising_categories')->onDelete('cascade');
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
        Schema::dropIfExists('advertisings');
    }
}
