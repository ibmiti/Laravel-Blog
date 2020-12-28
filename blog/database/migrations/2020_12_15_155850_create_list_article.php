<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_article', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->string('heading1')->nullable();
            $table->string('image_name')->nullable();
            $table->text('paragraph1')->nullable();
            $table->string('heading2')->nullable();
            $table->string('image2_name')->nullable();
            $table->text('paragraph2')->nullable();
            $table->string('heading3')->nullable();
            $table->string('image3_name')->nullable();
            $table->text('paragraph3')->nullable();
            $table->string('heading4')->nullable();
            $table->string('image4_name')->nullable();
            $table->text('paragraph4')->nullable();
            $table->string('heading5')->nullable();
            $table->string('image5_name')->nullable();
            $table->text('paragraph5')->nullable();
            $table->string('heading6')->nullable();
            $table->string('image6_name')->nullable();
            $table->text('paragraph6')->nullable();
            $table->string('heading7')->nullable();
            $table->string('image7_name')->nullable();
            $table->text('paragraph7')->nullable();
            $table->string('heading8')->nullable();
            $table->string('image8_name')->nullable();
            $table->text('paragraph8')->nullable();   
            $table->string('heading9')->nullable();
            $table->string('image9_name')->nullable();
            $table->text('paragraph9')->nullable();
            $table->string('heading10')->nullable();
            $table->string('image10_name')->nullable();
            $table->text('paragraph10')->nullable();
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
        Schema::dropIfExists('list_article');
        // TODO - add all fields to down method
    }
}
