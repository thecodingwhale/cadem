<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentCourseSections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_course_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enrollment_course_id')->unsigned();
            $table->foreign('enrollment_course_id')->references('id')->on('enrollment_courses');
            $table->string('section');
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
        Schema::drop('enrollment_course_sections');
    }
}
