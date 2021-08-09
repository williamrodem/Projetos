<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    
   public function index(){
        return view('/doctors');
   }

   public function create()
   {
       //
   }

   public function store(Request $request)
   {
    $doctors = new Doctor();
    
    $doctors->name = $request->name;
    $doctors->crm = $request->crm;
    $doctors->specialty = $request->specialty;
    $doctors->registration_date_doctors =$request->registration_date_doctors;
    
    $doctors->save();
   
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
       
   }


   public function destroy($id)
   {
       //
   }
}
