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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('upload_img');
            $table->longText('description');
            $table->string('future_trend');
            $table->string('impact_technology');
            $table->string('type_of_career');
            $table->string('preparation');
            $table->string('initial_salary');
            $table->string('skills_req');
            $table->string('course_duration');
            $table->string('course_fee');
            $table->string('stream');
            $table->string('course_level');
            $table->string('min_qualification');
            $table->string('demand');
            $table->string('raise_code');
            $table->string('education_level');
            $table->string('mode_education');
            $table->string('future_trends');
            $table->string('abilities');
            $table->string('introduction');
            $table->string('admission');
            $table->string('entry_path');
            $table->string('avail_course');
            $table->string('outcome');
            $table->string('world_of_work');
            $table->string('personal_attri');
            $table->string('phy_fact');
            $table->string('top_institutes');
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
        Schema::dropIfExists('careers');
    }
};
