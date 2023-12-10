<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 

        Schema::create('emags', function (Blueprint $table) {
            $table->id();
            $table->string('e_header')->nullable();
            $table->string('e_front')->nullable();
            $table->string('e_back')->nullable();
            $table->bigInteger('e_position')->nullable();
            $table->string('e_sponsor')->nullable();
            $table->string('issue_id')->nullable();
            $table->string('issue')->nullable();
            $table->string('issue_year')->nullable();       
            $table->string('e_url')->nullable();
            $table->longtext('e_body')->nullable();
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
        Schema::dropIfExists('emags');
    }
}
