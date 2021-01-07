<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabyArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baby_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('quip');
            $table->string('image');
            $table->string('image_credit', 400);
            $table->text('excerpt', 100);
            $table->string('heading1', 30);
            $table->text('p1');
            $table->string('heading2', 30)->nullable();
            $table->text('p2')->nullable();
            $table->string('heading3', 30)->nullable();
            $table->text('p3')->nullable();
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
        Schema::dropIfExists('baby_articles');
    }
}
