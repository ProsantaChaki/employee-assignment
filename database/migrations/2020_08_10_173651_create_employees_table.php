<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emoplyee_no');
            $table->string('name');
            $table->unsignedInteger('designation_id');
            $table->foreign('designation_id')->references('id')->on('designations');
            $table->string('department');
            $table->string('company');
            $table->float('salary');
            $table->date('joining_date');
            $table->date('termination_date')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
