<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageCreditToGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guides', function (Blueprint $table) {
            $table->string('imageCredit1', 400);
            $table->string('imageCredit2', 400);
            $table->string('imageCredit3', 400);
            $table->string('imageCredit4', 400);
            $table->string('imageCredit5', 400);
            // - these can be null 
            $table->string('imageCredit6', 400)->nullable();
            $table->string('imageCredit7', 400)->nullable();
            $table->string('imageCredit8', 400)->nullable();
            $table->string('imageCredit9', 400)->nullable();
            $table->string('imageCredit10',400)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guides', function (Blueprint $table) {
            $table->dropColumn('imageCredit1');
            $table->dropColumn('imageCredit2');
            $table->dropColumn('imageCredit3');
            $table->dropColumn('imageCredit4');
            $table->dropColumn('imageCredit5');
            $table->dropColumn('imageCredit6');
            $table->dropColumn('imageCredit7');
            $table->dropColumn('imageCredit8');
            $table->dropColumn('imageCredit9');
            $table->dropColumn('imageCredit10');
        });
    }
}
