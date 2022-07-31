<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homs', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('text_uz');
            $table->string('text_ru');
            $table->string('text_en');
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
        Schema::dropIfExists('homs');
    }
}
