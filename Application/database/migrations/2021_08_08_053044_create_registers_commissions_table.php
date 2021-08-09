<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers_commissions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('values_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('doctors_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('registers_commissions');
    }
}
