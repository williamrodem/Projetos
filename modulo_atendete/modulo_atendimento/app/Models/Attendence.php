<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;

    public function attendace(){
        return $this->belongsToMany('App\Models\Attendence');
   
    }
    public $table = 'attendance';
    
    public function doctors(){
        return $this->belongsToMany('App\Models\Doctor');
    }
    public function patient(){
        return $this->belongsToMany('App\Models\Patient');
   
    }

}
