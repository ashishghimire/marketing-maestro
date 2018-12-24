<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('file');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('featured');
            $table->string('slug');
            $table->integer('order')->nullable();
            $table->integer('other_resource_category_id')->unsigned();
        $table->foreign('other_resource_category_id')->references('id')->on('other_resource_categories')->onDelete('cascade');
        
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
        Schema::dropIfExists('other_resources');
    }
}
