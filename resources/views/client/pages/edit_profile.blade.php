@extends('client.master')
@section('title','Thông tin tài khoản')
@section('content')
<main>
<section>
<div class="container bg-light"> 
    <div class="row"> 
        <div class="col-md-3 border-right"> 
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="img-fluid rounded-circle mt-5" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp">
                <span class="font-weight-bold">Trần Hữu Hoà</span>
                <span class="text-black-50">hoadeptry02@gmail.com</span>
                <span></span>
            </div> 
        </div> 
        <div class="col-md-9 border-right"> 
            <div class="p-3 py-5"> 
                <div class="d-flex justify-content-between align-items-center mb-3"> 
                    <h4 class="text-right">Thay đổi thông tin</h4> 
                </div> <div class="row mt-2"> 
                    <div class="col-md-6">
                        <label class="labels">Họ và tên</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div> 
                    <div class="col-md-6">
                        <label class="labels">Địa chỉ email</label>
                        <input type="text" class="form-control" value="" placeholder="surname">
                    </div> 
                </div> 
            </div> <div class="row mt-2"> 
                <div class="col-md-6">
                    <label class="labels">Ngày tạo</label>
                    <input type="date" disabled class="form-control" placeholder="first name" value="2022-10-14">
                </div> 
                <div class="col-md-6">
                    <label class="labels">Ngày chỉnh sửa</label>
                    <input type="date" class="form-control" value="" placeholder="surname">
                </div> 
            </div> 
                <div class="mt-5 text-center">
                    <button class="btn btn-form" type="button">Cập nhật thông tin</button>
                </div> 
            </div> 
        </div> 
 
    </div>
</div>
</div>
</div>
</section>
@endsection