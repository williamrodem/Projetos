<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;
 //relação many to many/ muitos para muitos tabela  pacientes e valores
    Public function registerValuesValue(){
        return $this->belongsToMany('App\Models\Patient');
    }
 //relação many to many/ muitos para muitos tabela doctres e valores
    public function registerCommissionDoctor(){
        return $this->BelongsToMany('App\Models\Doctor');
    }
}
