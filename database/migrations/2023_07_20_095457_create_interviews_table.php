<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->string('location'); 
            $table->string('interview');
            $table->string('contact')->nullable();
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('url')->nullable();
            $table->string('website')->nullable();
            $table->longtext('content')->nullable();
            $table->string('contact_pic')->default('picture.jpg');
            $table->string('interviewee_image')->default('picture.jpg');
            $table->string('interviewee')->nullable();
            $table->string('interviewee_title')->nullable();
            $table->string('issue_id');
            $table->string('issue');
            $table->string('issue_year');
            $table->string('image_url');
            $table->string('company_logo')->nullable();
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
        Schema::dropIfExists('interviews');
    }
}
