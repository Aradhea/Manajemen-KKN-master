<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request){
        $user = User::create([
            'nama' => $request->name,
            'nrp' => $request->nrp,
            'role' => $request->role,
            'jurusan'=>$request->jurusan,
            'kelas'=>$request->kelas,
            'status' => $request->status,
            'email'=>$request->email,
            'password' => Hash::make($request->password)
            
        ]);
        
        return redirect('/sign-in');
    } 
}
