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
            $table->string('article');
            $table->string('author');
            $table->string('issue');
            $table->string('issue_year');
            $table->string('title');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->longtext('content')->nullable();
            $table->string('picture')->default('picture.jpg');
            $table->string('url')->nullable();
            $table->string('image_url');
            $table->string('featured')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('issue_id');



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
