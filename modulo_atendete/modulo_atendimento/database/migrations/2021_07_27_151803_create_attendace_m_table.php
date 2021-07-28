<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendaceMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendace_m', function (Blueprint $table) {
            $table->foreignId('doctors_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('patients_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->primary('doctors_id','patients_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendace_m');
    }
}
