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
        Schema::create('student_information', function (Blueprint $table) {
            $table->id();
            $table->string('school_year')->nullable();
            $table->integer('grade_level')->nullable();
            $table->string('lrn_stat')->nullable();
            $table->string('balikaral_stat')->nullable();
            $table->string('student_psa')->nullable();
            $table->string('student_lrn')->nullable();
            $table->string('lname')->nullable();
            $table->string('fname')->nullable();
            $table->string('mdname')->nullable();
            $table->string('extname')->nullable();
            $table->string('bdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('placeofbirth')->nullable();
            $table->string('mothertongue')->nullable();
            $table->string('ips')->nullable();
            $table->string('ifyesips')->nullable();
            $table->string('fps')->nullable();
            $table->string('ifyesfps')->nullable();
            $table->string('current_house')->nullable();
            $table->string('current_brgy')->nullable();
            $table->string('current_mun')->nullable();
            $table->string('current_prov')->nullable();
            $table->string('current_zip')->nullable();
            $table->string('current_ctry')->nullable();
            $table->string('permanent_house')->nullable();
            $table->string('permanent_brgy')->nullable();
            $table->string('permanent_mun')->nullable();
            $table->string('permanent_prov')->nullable();
            $table->string('permanent_zip')->nullable();
            $table->string('permanent_ctry')->nullable();
            $table->string('flname')->nullable();
            $table->string('ffname')->nullable();
            $table->string('fmdname')->nullable();
            $table->string('fcontact')->nullable();
            $table->string('mlname')->nullable();
            $table->string('mfname')->nullable();
            $table->string('mmdname')->nullable();
            $table->string('mcontact')->nullable();
            $table->string('glname')->nullable();
            $table->string('gfname')->nullable();
            $table->string('gmdname')->nullable();
            $table->string('gcontact')->nullable();
            $table->string('lastgradelevel')->nullable();
            $table->string('lastschoolyear')->nullable();
            $table->string('schoolid')->nullable();
            $table->string('lastschoolattended')->nullable();
            $table->string('sem')->nullable();
            $table->string('track')->nullable();
            $table->string('strands')->nullable();
            $table->string('modality/ies')->nullable();
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
        Schema::dropIfExists('student_information');
    }
};
