<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Position;
use App\Http\Controllers\Controller;

class PersonnelController extends Controller
{
    public function index()
        {
            $position = Position::all();
            $personnel = Personnel::all()->toArray();
            return view('personnel.personnel', ['personnel' => $personnel],['position' => $position]);
        }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'rate_type' => 'required|max:255',
            'rate' => 'required|max:255',
            'status' => 'required|max:255',
        ]); 

        Personnel::create([
            'name' => $request->name,     
            'position' => $request->position,
            'rate_type' => $request->rate_type,
            'rate' => $request->rate,
            'status' => $request->status,
       
        ]);

        return redirect()->route('dashboard');

    }
}