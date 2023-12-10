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

        Schema::create('showcases', function (Blueprint $table) {
            $table->id();
            $table->string('location'); 
            $table->string('showcase');
            $table->string('contact')->nullable();
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('url')->nullable();
            $table->string('website')->nullable();
            $table->string('featured')->nullable();
            $table->string('homeslide')->nullable();
            $table->longtext('content')->nullable();
            $table->string('contact_pic')->default('picture.jpg');
            $table->string('logo')->nullable();
            $table->string('issue_id');
            $table->string('issue');
            $table->string('issue_year');
            $table->string('image_url');
            $table->timestamps();
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('showcases');
    }
};
