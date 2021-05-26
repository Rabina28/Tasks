<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dob');
            $table->string('c_address');
            $table->string('p_address');
            $table->string('gender');
            $table->string('f_name');
            $table->string('f_number');
            $table->string('f_email');
            $table->string('f_occupation');
            $table->string('m_name');
            $table->string('m_number');
            $table->string('m_email');
            $table->string('m_occupation');
            $table->string('l_name');
            $table->string('l_number');
            $table->string('relation');
            $table->string('l_email');
            $table->string('l_occupation');
            $table->integer('grade');
            $table->string('last_school');
            $table->string('bus_needed');
            $table->string('pickup_address');
            $table->timestamps();
        });
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('alt_name');
            $table->string('status');
            $table->timestamps();
            $table->foreign('student_id')
                    ->references('id')
                    ->on('students')
                    ->ondelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
