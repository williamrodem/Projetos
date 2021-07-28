<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('crm_doctor',30)->unique('crm_doctor')->nullable();
            $table->string('name_doctor',30);
            $table->string('specialty_doctor',30);
            $table->string('name_patient', 30);
            $table->string('cpf_patient',20)->unique('cpf_patient')->nullable();
            $table->string('telephone_patient',30);
            $table->string('health_insurance_patient',30);
            $table->DateTime('data')->nullable();
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->engine = 'InnoDB';
        
            /*$table->foreign('id_doctors')->references('id')->on('doctors')->onDelete('CASCADE');
            
            $table->foreign('id_patients')->references('id')->on('patients')->onDelete('CASCADE');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
}
