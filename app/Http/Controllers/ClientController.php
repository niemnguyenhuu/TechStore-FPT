<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\CateItems;
use App\Models\Products;
use App\Models\Comments;
use App\Models\Slider;
use App\Models\Wishlist;
use DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $allCate=Categories::all();
        view()->share('allCate', $allCate);
        $allslide=Slider::all();
        view()->share('allslide', $allslide);
        //slider
        $slider=Slider::orderBy('id','DESC')->where('slide_status',1)->take(4)->get();
        view()->share('slider', $slider);
    }
    public function index()
    {
        $homeTopPr = Products::where('hot','=','1')->limit(3)->get();
        $homeNewPr = Products::orderBy('id','desc')->get();
        $homeSalePr = Products::orderBy('discount','desc')->limit(6)->get();
        return view('client.pages.index',['homeTopPr'=>$homeTopPr,'homeNewPr'=>$homeNewPr,'homeSalePr'=>$homeSalePr]);
    }
    public function contact()
    {
        return view('client.pages.contact');
    }
    public function getProByCate($id)
    {
        $listPro=Categories::find($id)->Products;
        $cti_bar=Categories::find($id)->Cate_items;
        return view('client.pages.category',['listPro'=>$listPro,'cti_bar'=>$cti_bar]);
    }
    public function getProByCateItem($id)
    {
        $listPro=CateItems::find($id)->Products;
        $cti_bar=CateItems::where('cate_id','=',$id)->get();
        return view('client.pages.category',['listPro'=>$listPro,'cti_bar'=>$cti_bar]);
    }
    public function getProById($id)
    {
        $pro=Products::find($id);
        $pro->view=$pro->view+1;
        $pro->save();
        $images=Products::find($id)->Images;

        return view('client.pages.product',['pro'=>$pro,'images'=>$images]);
    }

    public function getCateItemByCate(Request $r)
    {
        $cateItems=CateItems::where('cate_id','=',$r->id_cate)->get();
        return response()->json($cateItems);
    }
    public function signup()
    {
        return view('client.pages.register');
    }
    public function forgotpassword()
    {
        return view('client.pages.forgot_password');
    }
    public function manager()
    {
        return view('client.pages.manager');
    }
    public function edit_profile()
    {
        return view('client.pages.edit_profile');
    }
    // Tìm kiếm
    public function search(){
        $listPro=CateItems::all();
        $cti_bar=Categories::all();
        $keywords = $_GET['keywords'];
        $listPro=Products::where('name','LIKE', '%'.$keywords.'%')
        ->orWhere('detail','LIKE', '%'.$keywords.'%')->get();
        if(count($listPro)==0){
            $listPro = Products::all();
            $MesSearch = 'Không tìm thấy kết quả của từ khóa: '.$keywords.'. Hiển thị danh sách sản phẩm:';
            return view('client.pages.category')->with(compact('listPro','cti_bar','keywords','listPro', 'MesSearch'));
        }else{
            $MesSearch = 'Kết quả của từ khóa: '.$keywords.'.';
            return view('client.pages.category')->with(compact('listPro','cti_bar','keywords','listPro', 'MesSearch'));
        }
    }
    // Danh sách yêu thích
    public function wishlist()
    {
        $wishlist=Wishlist::where('user_id','=', Auth::user()->id)->get();
        return view('client.pages.wishlist', compact('wishlist'));
    }
    public function add(Request $request) {
        if(Auth::check())
        {
            if(Products::find($pro_id))
            {
                $wish = new Wishlist($pro_id);
                $wish->pro_id = $pro_id;
                $wish->user_id = Auth::id();
                $wish->save;
                return response()->json(['status'=>"Sản phẩm đã được thêm vào yêu thích"]);
            }
            else{
                return response()->json(['status'=>"Sản phẩm không tồn tại "]);
            }
        }
        else{
            return response()->json(['status'=>"Đăng nhập để tiếp tục"]);
        }
    }
    public function delete($id)
    {
        
        $wishlist=Wishlist::find($id);
        $wishlist->delete();
        return redirect(route('listWish'));
    }
}