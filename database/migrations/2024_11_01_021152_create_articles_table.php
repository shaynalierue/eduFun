<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("articlesTitle");
            $table->text("articleContent");
            $table->integer("articleViews")->default(0);
            $table->string("articleImage");
            $table->unsignedBigInteger("writersId"); //FK ke writers
            $table->timestamps();

            //FK constraint ke tabel writers
            $table->foreign("writersId")->references("id")->on("writers")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
