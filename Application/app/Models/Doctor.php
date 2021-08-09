<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    //relação many to many/ muitos para muitos tabela doctores e pacientes
    public function registerDoctor(){ 
        return $this->BelongsToMany('App\Models\Patient');
    }
     //relação many to many/ muitos para muitos tabela doctores e valores
    public function CommissionValue(){
        return $this->belongsToMany('App\Models\Value');
    }
    public function registerTelephoneTel(){ 
        return $this->BelongsToMany('App\Models\Telephone');
    }
}
