<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plan;
use App\Subplan;

class SubplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subplans=Subplan::all();
        return view('backend.subplans.index',compact('subplans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plans=Plan::all();
        $subplans=Subplan::all();
        return view('backend.subplans.create',compact('plans','subplans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:jpeg,bmp,png,jpg,webp',
            'name' => 'required|max:191',
            'plan_id' => 'required',            
            'description' => 'required',
            'price' => 'required'
        ]);

       $imageName= time().'.'.$request->photo->extension();
       $request->photo->move(public_path('images'),$imageName);
       $filepath ='images/'.$imageName;

        $subplans = new Subplan;        
        $subplans->photo = $filepath;
        $subplans->name = $request->name;
        $subplans->plan_id = $request->plan_id;
        $subplans->price = $request->price;
        $subplans->description = $request->description;
        
        $subplans->save();

        return redirect()->route('subplans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plans = Plan::all();
        $subplans = Subplan::find($id); 
        return view('backend.subplans.edit',compact('plans','subplans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'sometimes|mimes:jpeg,bmp,png,jpg,webp',
            'name' => 'required|max:191',
            'plan_id' => 'required',            
            'description' => 'required',
            'price' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            
        $imageName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
            $filepath ='images/'.$imageName;   
            /*unlink($request->oldphoto);*/
        }else{
            $filepath = $request->oldphoto;
        }
            //data update
            $subplans = Subplan::find($id);        
            $subplans->photo = $filepath;
            $subplans->name = $request->name;
            $subplans->plan_id = $request->plan_id;  
            $subplans->price = $request->price;
            $subplans->description = $request->description;
            $subplans->save();

            return redirect()->route('subplans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subplans = Subplan::find($id);
        $subplans -> delete();
        return redirect()->route('subplans.index'); 
    }
}
