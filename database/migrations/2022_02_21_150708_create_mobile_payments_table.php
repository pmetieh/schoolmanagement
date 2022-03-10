<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_payments', function (Blueprint $table) {
            $table->id();
            $table->string('school_id');
            $table->string('guardian_id');
            $table->string('student_id');
            $table->string('mobileNo');
            $table->string('amntpaid');
            $table->string('currency');
            $table->string('description');
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
        Schema::dropIfExists('mobile_payments');
    }
}
