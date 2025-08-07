<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ecommerce;

class EcommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ecommerce=Ecommerce::first();
        return view('backend.ecommerce.index',compact('ecommerce'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.ecommerce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ecommerce=new Ecommerce ();
        $ecommerce->name=$request->name;
        $ecommerce->email=$request->email;
        $ecommerce->phone=$request->phone;
        $ecommerce->facebook=$request->facebook;
        $ecommerce->instagram=$request->instagram;
        $ecommerce->youtube=$request->youtube;
        $ecommerce->logo=$request->logo;
        $ecommerce->address=$request->address;
        $ecommerce->save();
        return redirect('/ecommerce');
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ecommerce= Ecommerce::find ($id);
        $ecommerce->name=$request->name;
        $ecommerce->email=$request->email;
        $ecommerce->phone=$request->phone;
        $ecommerce->facebook=$request->facebook;
        $ecommerce->instagram=$request->instagram;
        $ecommerce->youtube=$request->youtube;
        $ecommerce->logo=$request->logo;
        $ecommerce->address=$request->address;
        $ecommerce->update();
        return redirect('/ecommerce');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ecommerce=Ecommerce::find($id);
        $ecommerce->delete();
        return redirect('/ecommerce');
    }
}
