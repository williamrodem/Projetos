<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTelephonesDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_telephones_doctors', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('telephone_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('doctor_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->dateTime('data');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->engine = 'InnoDB';
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_telephones_doctors');
    }
}
