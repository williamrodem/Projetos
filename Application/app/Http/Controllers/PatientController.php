<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;


class PatientController extends Controller
{
    public function index()
    {
        return view('/patient');
    }
 
    public function create()
    {
        //
    }
 
    public function store(Request $request)
    {

    $patient = new Patient();
    
    $patient->name = $request->name;
    $patient->cpf = $request->cpf;
    $patient->age = $request->age;
    $patient->height = $request->height;
    $patient->weight = $request->weight;
    $patient->registration_date = $request->registration_date;
    
    $patient->save();
    }
 
    
    public function show($id)
    {
 
    }
 
    public function edit($id)
    {
        //
    }
 
    public function update(Request $request, $id)
    {
        //
    }
 
 

    public function destroy($id)
    {
        //
    }
}
