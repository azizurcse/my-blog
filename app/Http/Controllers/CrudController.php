<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Crud::all();
        return view('layout.home',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $insert=new Crud;
       $this->validate($request,[
            'title'=>'required|unique:cruds',
            'post'=>'required',
            'image'=>'required|image',
       ]);

       $insert->title=$request->title;
       $insert->post=$request->post;
       $insert->image=asset('storage').'/'.$request->image->store('images');

       $insert->save();
       return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Crud::find($id);
        return view('layout.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Crud::find($id);
        return view('layout.edit',compact('item'));
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
        $insert=Crud::find($id);
        $this->validate($request,[
            'title'=>'required',
            'post'=>'required',
            'image'=>'required|image',
        ]);

        $insert->title=$request->title;
        $insert->post=$request->post;
        $insert->image=asset('storage').'/'.$request->image->store('images');

        $insert->save();
        session()->flash('message','Updated Successfully');
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Crud::find($id);
        $item->delete();
        session()->flash('message','Deleted Successfully');
        return redirect('/blog');
    }
}
