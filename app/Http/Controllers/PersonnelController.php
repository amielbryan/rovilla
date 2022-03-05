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
        $personnel = Personnel::latest()->paginate(10);
        return view('personnel.personnel', ['personnel' => $personnel],['position' => $position])->with(request()->input('page'));
    }

    public function create(){
        $position = Position::all();
        $personnel = Personnel::latest()->paginate(10);
        return view('personnel.addpersonnel', ['personnel' => $personnel],['position' => $position]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'rate' => 'required|max:255',
            'status' => 'required|max:255',
            'dtr_id',
            'site_id',
        ]); 

        Personnel::create([
            'name' => $request->name,     
            'position' => $request->position,
            'rate' => $request->rate,
            'status' => $request->status,
            'dtr_id' => $request->dtr_id,
            'site_id' => $request->site_id,
       
        ]);

        return redirect()->route('personnel');

    }

    public function show(Personnel $personnel)
    {

    }


    public function edit($id)
    {
        $position = Position::all();
        $personnel = Personnel::find($id);
        return view('personnel.editpersonnel', ['personnel' => $personnel],['position' => $position]);
    }
    
    public function update(Request $request, Personnel $personnel)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'rate' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();
        $personnel->update($input);


        return redirect()->route('personnel'); 
    }

    public function destroy(Personnel $personnel)
    {
        Personnel::destroy($personnel);
        $personnel->delete();
        return redirect()->route('personnel'); 
    }
}