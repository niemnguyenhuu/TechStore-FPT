<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\CateItems;
use App\Models\Products;

class ProductController extends Controller
{
    public function __construct()
    {
        $allPro=Products::all();
        view()->share('allPro', $allPro);
    }
    public function index()
    {
        return view('admin.pages.products.index');
    }
    public function createView()
    {
        $allCate=Categories::all();
        return view('admin.pages.products.create',['allCate'=>$allCate]);
    }
    public function loadCateItem(Request $request)
    {
        $allCateItems=CateItems::where('cate_id',$request->id_cate)->get();
        return response()->json($allCateItems);
    }
    public function create(Request $r)
    {
     
        $pro=new Products();

        if($r->has('file_upload')){
            $file=$r->file_upload;
            $file_name= date('YmdHi').$file->getClientOriginalName();
            //dd($file_name);
            $file->move(public_path('images/products'),$file_name);
        }
        $r->merge(['image'=>$file_name]);

        $pro->name=$r->name;
        $pro->cate_id=$r->cate_id;
        $pro->price=$r->price;
        $pro->discount=$r->discount;
        $pro->image=$r->image;
      //  $pro->date=$r->date;
        $pro->quantity=$r->quantity;
        $pro->detail=$r->detail;
        $pro->hot=$r->hot;
        $pro->status=$r->status;
        $pro->save();

        toastr()->success('Thành công', 'Thêm sản phẩm thành công');
        return redirect(route('listPro'));

    }
    public function loadEdit($id)
    {
        $pro=Products::find($id);
        $allCate=Categories::all();
        return view('admin.pages.products.edit',['pro'=>$pro,'allCate'=>$allCate]);
    }
    public function edit(Request $request)
    {
        $pro=Products::find($request->id);

        if($request->file_upload==''){
            $image=$request->input('image1');
        }
        else if($request->has('file_upload')){
            $file=$request->file_upload;
            $file_name= $file->getClientoriginalName();
            $file->move(public_path('images/products'),$file_name);
            $image=$file_name;
        }

        $pro->name=$request->name;
        $pro->cate_id=$request->cate_id;
        $pro->price=$request->price;
        $pro->discount=$request->discount;
        $pro->image=$image;
       // $pro->date=$request->date;
        $pro->quantity=$request->quantity;
        $pro->detail=$request->detail;
        $pro->hot=$request->hot;
        $pro->status=$request->status;
        $pro->save();
        toastr()->success('Thành công', 'Cập nhật sản phẩm thành công');
        return redirect(route('listPro'));
    }
    public function delete($id)
    {
        $pro=Products::find($id);
        $pro->delete();
        toastr()->success('Thành công', 'Xóa sản phẩm thành công');
        return redirect(route('listPro'));
    }
}
