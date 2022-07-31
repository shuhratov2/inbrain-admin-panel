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
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->string("curse");
            $table->string("lesson");
            $table->string("question");
            $table->string("answer_1")->nullable();
            $table->string("answer_2")->nullable();
            $table->string("answer_3")->nullable();  
            $table->string("answer_4")->nullable();
            $table->string("variant_1");
            $table->string("variant_2");
            $table->string("variant_3");
            $table->string("variant_4");
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
        //
    }
};
