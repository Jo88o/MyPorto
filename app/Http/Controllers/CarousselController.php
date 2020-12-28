<?php

namespace App\Http\Controllers;

use App\Models\Caroussel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarousselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caroussel = Caroussel::all(); 
        return view ('back-office.carousselB', compact('caroussel')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCaroussel = new Caroussel; 
        $newCaroussel->src = $request->file('src')->hashName();
        $newCaroussel->save(); 
        $request->file('src')->storePublicly('img', 'public');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function show(Caroussel $caroussel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Caroussel::find($id); 
        return view('back-office.carousselBE', compact('edit')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Caroussel::find($id); 
        Storage::disk('public')->delete('img/'.$update->src);
       $update->src = $request->file('src')->hashName();
    
       $update->save(); 
       $request->file('src')->storePublicly('img', 'public');

       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Caroussel::find($id); 
        $delete->delete(); 
        Storage::disk('public')->delete('img/'.$delete->src);
        return redirect()->back(); 
    }
}
