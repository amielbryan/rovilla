<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{
    public function index()
    {
        $position = Position::latest()->paginate(10);
        return view('position.position', compact('position'))->with(request()->input('page'));

    }

    public function create(){
        return view('position.addposition');
    }

    public function store(Request $request)
    {
        $request->validate([
            'position_name' => 'required'
        ]);

        Position::create($request->all());
        return redirect()->route('position');
    }

    public function show(Position $position)
    {

    }
    
    public function edit($id)
    {
        $position = Position::find($id);
        return view('position.editposition', compact('position'));
    }
    
    public function update(Request $request, Position $position)
    {
        $request->validate([
            'position_name' => 'required'
        ]);

        $input = $request->all();
        $position->update($input);


        return redirect()->route('position'); 
    }

    public function destroy(Position $position)
    {
        Position::destroy($position);
        $position->delete();
        return redirect()->route('position'); 
    }
  

}
