<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $team=Team::all();
        return view('backend.team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team=new Team ();
        $team->name=$request->name;
        $team->description=$request->description;
        $team->position=$request->position;
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('photo',$newName);
            $team->photo="photo/$newName";
        }
        $team->save();
        return redirect('/team');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team= Team::find($id);
        return view('backend.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team= Team::find ($id);
        $team->name=$request->name;
        $team->description=$request->description;
        $team->position=$request->price;
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('photo',$newName);
            $team->photo="photo/$newName";
        }
        $team->update();
        return redirect('/team');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
        $team= Team::find($id);
        $team->delete();
        return redirect('/team');
        }
    }
}
