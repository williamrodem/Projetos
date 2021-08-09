<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telephone;

class TelephoneController extends Controller
{
    public function index()
    {
        //
    }
 
    public function create()
    {
        //
    }
 
    public function store(Request $request)
    {
        $telephone = new Telephone();
    
        $telephone->name = $request->name;
        $telephone->cpf = $request->cpf;
        $telephone->age = $request->age;
        $telephone->height = $request->height;
        $telephone->weight = $request->weight;
        $telephone->registration_date = $request->registration_date;
        
        $telephone->save();
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
