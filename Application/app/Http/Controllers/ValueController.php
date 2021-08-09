<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Value;

class ValueController extends Controller
{
    //
    public function index()
    {
        
    }
 
    public function create()
    {
        //
    }
 
    public function store(Request $request)
    {
        $value = new Value();

        $value->query_values->$request->query_values;
        $value->parcel_values->$request->parcel_values;
        $value->commission_values->$request->commission_values;
        $value->registration_date_values->$request->registration_date_values;

        $value->save();


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
