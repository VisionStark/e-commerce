<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about1= About::first();
        return view('backend.about.index',compact('about1'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $about1=new About ();
        $about1->name=$request->name;
        $about1->description=$request->description;
        $about1->short_description=$request->short_description;
        $about1->position=$request->position;
          if ($request->hasFile('image1')) {
            $file = $request->image1;
            $newName = time() . $file->getClientOriginalName();
            $file->move('image1',$newName);
            $about1->image1="image1/$newName";
          }
          if ($request->hasFile('image2')) {
            $file = $request->image2;
            $newName = time() . $file->getClientOriginalName();
            $file->move('image2',$newName);
            $about1->image2="image2/$newName";
          }
        $about1->team_desciption=$request->team_desciption;
        $about1->save();
        return redirect('/about1');
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
        $about1= About::find($id);
        return view('backend.about.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about1= About::find ($id);
        $about1->name=$request->name;
        $about1->description=$request->description;
        $about1->short_description=$request->short_description;
        $about1->position=$request->position;
                if ($request->hasFile('image1')) {
            $file = $request->image1;
            $newName = time() . $file->getClientOriginalName();
            $file->move('image1',$newName);
            $about1->image1="image1/$newName";
          }
          if ($request->hasFile('image2')) {
            $file = $request->image2;
            $newName = time() . $file->getClientOriginalName();
            $file->move('image2',$newName);
            $about1->image2="image2/$newName";
          }
        $about1->team_desciption=$request->team_desciption;
        $about1->update();
        return redirect('/about1');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about1= About::find($id);
        $about1->delete();
        return redirect('/about1');
    }
}
