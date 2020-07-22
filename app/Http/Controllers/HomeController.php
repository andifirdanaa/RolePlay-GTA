<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Status;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $no = 1;
        $status = Status::all();
        return view('home',compact('no','status'));
    }
     public function create()
    {
        $status = status::all();
        return view ('layouts.create',compact('status'));
    }
     public function store(Request $request)
    {
        $this->validate($request,[  
        'text'=> 'required'
        ]);
        $status = new Status;
        $status->text = $request->text;
        $status->save();


        return redirect()->route('home.index')->withStatus(__('Status successfully created.'));
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
         $status = Status::find($id);
        return view ('layouts.edit',compact('status'));
    }
    public function update(Request $request, $id)
    {
        $status = Status::find($id);
        $status->text = $request->text;
        $status->save();

        return redirect()->route('home.index')->withStatus(__('Status successfully updated.'));
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Status::find($id);
        $status->delete();
        
        return redirect()->route('home.index')->withStatus(__('Status successfully deleted.'));
    }
    public function delete(Status $status){
    $status->delete();

     return redirect()->route('home.index')->withStatus(__('Status successfully deleted.'));
    }
}
