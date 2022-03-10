<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('school_id');
            $table->string('mobilepaymentNo_LoneStar');
            $table->string('mobilepaymentNo_Orange');
            $table->string('UBA_AccntRef');
            $table->string('UBA_AccntRef');
            $table->string('ECO_AccntRef');
            $table->string('GTB_AccntRef');
            $table->decimal('fee_highschool');
            $table->decimal('fee_juniorhighSchool');
            $table->decimal('fee_elementary');
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
        Schema::dropIfExists('accounts');
    }
}
