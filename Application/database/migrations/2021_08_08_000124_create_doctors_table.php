<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name_doctors', 30);//nome do medico
            $table->string('specialty', 30);//especialiadade do medico
            $table->string('crm');//registro do medico no coselho regional de medicos
            $table->dateTime('registration_date_doctors');//registro das datas 
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
        Schema::dropIfExists('doctors');
    }
}
