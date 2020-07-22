<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Picture;
use File;

class StatusController extends Controller
{
	 public function index()
    {   
        $no = 1;
        $pic = Picture::all();
        return view('about.index',compact('no','pic'));
    }
     public function create()
    {
        $pic = Picture::all();
        return view ('about.create',compact('pic'));
   }
    public function store(Request $request)
    {
    	$request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $pic = new Picture;
         if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $file->move($destinationPath , $fileName);
            $pic->image = $fileName;
        $pic->tittle = $request->tittle;
        $pic->save();
    }
        return redirect()->route('status.index')->withInfo('status Baru Berhasil Ditambah');
    }
     public function show($id)
    {
        //
    }
    public function edit($id)
    {
         $pic = Picture::find($id);
        return view ('about.edit',compact('pic'));
    }
    public function update(Request $request, $id)
    {
        $pic = Picture::find($id);
        //$pic->update($request->all());
       if($request->hasFile('image')){
            File::delete('images/'.$pic->image);
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $file->move($destinationPath , $fileName);
            $pic->image = $fileName;
    }
       $pic->tittle = $request->tittle;
       $pic->save();

        return redirect()->route('status.index')->withStatus(__('Status successfully updated.'));
    }
    //   public function destroy($id)
    // {
    //     $pic = Picture::find($id);
    //     File::delete('images/'.$pic->image);
    //     $pic->delete();
        
        
    //     return redirect()->route('status.index')->withStatus(__('Image successfully deleted.'));
    // }
    public function delete(Picture $picture){
    $picture->delete();

     return redirect()->route('status.index')->withStatus(__('Status successfully deleted.'));
    }
}
