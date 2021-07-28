<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

USE App\Models\User;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){
        
        $patients=Patient::all();

        return view('/cadastro_paciente', ['patients'=>$patients]);
    }
    public function store(Request $request){
        
        $patients = new Patient();
        
        $patients->name = $request->name;
        $patients->cpf = $request->cpf;
        $patients->telephone = $request->telephone;
        $patients->health_insurance = $request->health_insurance;

        $patients->save();
       
        return redirect('/cadastro_paciente')->with('msg', 'Cadastro criado com sucesso!');
            
    }  
}
