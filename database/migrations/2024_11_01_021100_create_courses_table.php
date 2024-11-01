<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //Course ini isiannya Data Science dan Network Security
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("categoryId"); //FK ke tabel category
            $table->unsignedBigInteger("writerId"); //FK ke tabel writeer
            $table->string("courseName");
            $table->text("courseContent");
            $table->string("courseImage");
            $table->timestamps();

            //Fk contraint
            $table->foreign("categoryId")->references("id")->on("categories")->onDelete("cascade");
            $table->foreign("writerId")->references("id")->on("writers")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
