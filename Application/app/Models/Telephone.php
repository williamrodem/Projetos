<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Telephone extends Model
{
    use HasFactory;
    public function RegisterTelephoneDoctor(){ 
        return $this->BelongsToMany('App\Models\Doctor');
    }
    public function RegisterTelephonePatient(){
        return $this->belongsToMany('App\Models\Patient');
    }
    
}
