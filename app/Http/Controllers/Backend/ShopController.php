<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shop=Shop::all();
        return view('backend.shop.index',compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.shop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shop=new Shop ();
        $shop->name=$request->name;
        $shop->description=$request->description;
        $shop->price=$request->price;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $shop->image="images/$newName";
        }
        $shop->save();
        return redirect('/shop');
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
        $shop= Shop::find($id);
        return view('backend.shop.edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shop= Shop::find ($id);
        $shop->name=$request->name;
        $shop->description=$request->description;
        $shop->price=$request->price;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('images',$newName);
            $shop->image="images/$newName";
        }
        $shop->update();
        return redirect('/shop');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shop= Shop::find($id);
        $shop->delete();
        return redirect('/shop');
    }
}
