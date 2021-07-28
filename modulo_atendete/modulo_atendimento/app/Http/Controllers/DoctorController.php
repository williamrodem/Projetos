<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Registrar;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use PhpParser\Comment\Doc;
use Psy\Command\WhereamiCommand;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();

        return view('/cadastro_medico', ['doctors'=>$doctors]);
    }

    public function store(Request $request)
    {
        $doctors = new Doctor();
        
        $doctors->id = $request->id;
        $doctors->crm = $request->crm;
        $doctors->name = $request->name;
        $doctors->specialty = $request->specialty;

        $doctors->save();
       
        $request->validate([
            'crm' => 'required'
        ]);

        return redirect('/cadastro_medico')->with('msg', 'Cadastro criado com sucesso!');
    }

    
}
