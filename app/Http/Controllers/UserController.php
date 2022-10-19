<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CateItems;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Comments;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $allUser=User::all();
        view()->share('allUser', $allUser);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //View client
        $allCom=Comments::all();
        $allPro=Products::all();
        $allUser=User::all();
        return view('admin.pages.users.index')->with(compact('allPro' , 'allUser', 'allCom'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        //View client
        $keywords = $_GET['keywords'];
        $allCom=Comments::all();
        $allPro=Products::all();
        $allUser=User::where('id','LIKE', '%'.$keywords.'%')->orWhere('name','LIKE', '%'.$keywords.'%')
        ->orWhere('address','LIKE', '%'.$keywords.'%')->get();
        if(count($allUser)!=0){
            $message = 'Kết quả của: '.$keywords.'.';
            return view('admin.pages.users.index')->with(compact('allPro' , 'allUser', 'allCom','message'));
        }
        else{
            $message = 'Không tìm thấy kết quả của: '.$keywords.'.';
            return view('admin.pages.users.index')->with(compact('allPro' , 'allUser', 'allCom','message'));
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user= User::find($id);
        $user->delete();
        toastr()->success('Thành công', 'Xóa bình luận thành công');
        return redirect(route('listUser'));
    }
}
