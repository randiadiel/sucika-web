<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Submit Data To Database
        $password=Str::random(5);
        $peoples= new \App\People;
        $peoples->name=$request->get('name');
        $peoples->messages=$request->get('messages');
        $peoples->role=$request->get('role');
        $peoples->password=$password;
        $peoples->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $people = \App\People::where('password',$id)->first();
        return view('view',compact('people','id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $peoples = \App\People::all();
        return view('list',compact('peoples'));
    }

    public function print()
    {
        $peoples = \App\People::all();
        return view('print',compact('peoples'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = \App\People::find($id);
        return view('edit',compact('people','id'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $cari = $request->password;
        $url = 'peoples/'.$cari;
        // dd($url);
        return redirect($url);
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
        $people= \App\People::find($id);
        $people->name=$request->get('name');
        $people->messages=$request->get('messages');
        $people->role=$request->get('role');
        $people->save();
        return redirect('list');
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
