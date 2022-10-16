<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
class SLideController extends Controller
{
    public function __construct()
    {
        $allslide=Slider::all();
        view()->share('allslide', $allslide);
    }
    public function index()
    {
        return view('admin.pages.slider.index');
    }
    public function loadCreate()
    {
        return view('admin.pages.slider.create');
    }
    public function create(Request $r)
    {
        $slide=new Slider();

        if($r->has('file_upload')){
            $file=$r->file_upload;
            $file_name= date('YmdHi').$file->getClientOriginalName();
            //dd($file_name);
            $file->move(public_path('images/slider'),$file_name);
        }
        $r->merge(['image'=>$file_name]);

        $slide->name=$r->name;
        $slide->image=$r->image;
        $slide->slide_number=$r->slide_number;
        $slide->pro_id=$r->pro_id;
        $slide->save();

        return redirect(route('listSlide'));

    }
    public function loadEdit($id)
    {
        var_dump($id);
        $slide=Slider::find($id);
        return view('admin.pages.slider.edit',['slide'=>$slide]);
    }
    public function edit(Request $request)
    {
        $slide=Slider::find($request->id);

        if($request->file_upload==''){
            $image=$request->input('image1');
        }
        else if($request->has('file_upload')){
            $file=$request->file_upload;
            $file_name= $file->getClientoriginalName();
            $file->move(public_path('images/slider'),$file_name);
            $image=$file_name;
        }

       $slide->name=$request->name;
        $slide->image=$image;
        $slide->slide_number=$request->slide_number;
        $slide->pro_id=$request->pro_id;
        $slide->save();
        
        return redirect(route('listSlide'));

    }
    public function delete($id)
    {
        $slide=Slider::find($id);
        $slide->delete($id);
        return redirect(route('listSlide'));
    }
}
