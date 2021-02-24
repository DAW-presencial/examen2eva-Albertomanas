<?php

namespace App\Http\Controllers;

use App\Models\Tutores;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutores = Tutores::all();
 
        return view('tutores.index', compact('tutores'));  
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutores.create');

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
                'first_name'=>'required',
                'last_name1'=>'required',
                'last_name2'=>'required',
                'company'=>'required',
                'type_document'=>'required',
                'document'=>'required',
                'country_document'=>'required',
                'province'=>'required',
                'municipe'=>'required',
                'status'=>'required',
                'telephone'=>'required',
                'email'=>'required'
            ]);
      
            $tutores = new Tutores([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'company'=>$request->get('company'),
                'type_document'=>$request->get('type_document'),
                'document'=>$request->get('document'),
                'country_document'=>$request->get('country_document'),
                'province'=>$request->get('province'),
                'municipe'=>$request->get('municipe'),
                'status'=>$request->get('status'),
                'telephone'=>$request->get('comptelephoneany'),
                'email'=>$request->get('email')
            ]);
            $tutores->save();
            return redirect('/tutores')->with('success', 'Contact saved!');   
        }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
