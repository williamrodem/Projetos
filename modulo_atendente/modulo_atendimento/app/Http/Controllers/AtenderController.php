<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Attendence;
use App\Models\Patient;
use PHPUnit\TextUI\XmlConfiguration\Group;

class AtenderController extends Controller
{
    public function index()
    {
        return Attendence::get();
    }
    public function atendimento()
    {
        $attendece = Attendence::all();
        return view('/atendimento', ['attendece'=>$attendece]);
    }
    
    public function store(Request $request)
    {
        $attendence = new Attendence();
        
       
        $attendence->id = $request->id;
        $attendence->crm_doctor= $request->crm_doctor;
        $attendence->name_doctor = $request->name_doctor;
        $attendence->specialty_doctor = $request->specialty_doctor;
        $attendence->name_patient = $request->name_patient;
        $attendence->cpf_patient = $request->cpf_patient;
        $attendence->telephone_patient = $request->telephone_patient;
        $attendence->health_insurance_patient = $request->health_insurance_patient;
        $attendence->data = $request->data;
        
        $attendence->save();

        return redirect('/atendimento')->with('msg', 'Cadastro criado com sucesso!');
    }

    
}