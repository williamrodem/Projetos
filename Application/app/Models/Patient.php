<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Doctor;

class Patient extends Model
{
    use HasFactory;
     //relação many to many/ muitos para muitos tabela doctores e pacientes
    public function registerPatient(){
        return $this->BelongsToMany('App\Models\Doctor');
    }
     //relação many to many/ muitos para muitos tabela pacientes e valores
    Public function registerValuesPatient(){
        return $this->belongsToMany('App\Models\Value');
    }
    Public function RegisterTelephonePatient(){
        return $this->belongsToMany('App\Models\Telephone');
    }
}
