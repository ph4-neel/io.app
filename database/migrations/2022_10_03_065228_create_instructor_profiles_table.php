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
        Schema::create('instructor_profiles', function (Blueprint $table) {
            $table->id("profile_id");
            $table->string("position");
            $table->string("introduction",255);
            $table->string("experience");
            $table->string("expertise",255);
            $table->unsignedBigInteger("instructor_id");
            $table->foreign("instructor_id")->references("instructor_id")->on("instructors");
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
        Schema::dropIfExists('instructor_profiles');
    }
};
