@extends('client.master')
@section('title','Đăng ký')
@section('content')
<main>
  {{-- <div class="w-form-register">
    <div class="container">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Tài khoản</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tài khoản">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Địa chỉ email của bạn">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mật khẩu</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu của bạn">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Ảnh đại diện</label>
          <input type="file" class="file-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Địa chỉ</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Địa chỉ của bạn">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Số điện thoại</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại của bạn">
        </div>
        <button type="submit" class=" b-submit">Đăng ký</button>
        
      </form>  
    </div>
    
  </div> --}}
  <div class="container">    
    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
      <h4 class="card-title mt-3 text-center">Tạo tài khoản</h4>
      <p class="text-center">Bắt đầu với tài khoản miễn phí của bạn</p>
      <p>
        <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Đăng nhập với Twitter</a>
        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>    Đăng nhập với facebook</a>
      </p>
      <p class="divider-text">
            <span class="bg-light">hoặc</span>
        </p>
      <form>
      <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
            <input name="" class="form-control" placeholder="Họ và tên" type="text">
      </div>
 <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
            <input name="" class="form-control" placeholder="Địa chỉ email" type="email">
        </div> 
  <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i> </span>
          </div>
          <input name="" class="form-control" placeholder="Mật khẩu" type="password">
        </div>
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
        </div>
        <input name="" class="form-control" placeholder="Địa chỉ của bạn" type="text">

      </div>
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <select class="custom-select" style="max-width: 120px;">
            <option selected="">+84</option>
        </select>
          <input name="" class="form-control" placeholder="Số điện thoại" type="text">
        </div> <!-- form-group// -->
 <!-- form-group end.// -->                                  
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Đăng ký tài khoản </button>
        </div> <!-- form-group// -->      
        <p class="text-center">Bạn đã có tài khoản? <a href="/">Đăng nhập</a> </p>                                                                 
    </form>
    </article>
    </div> <!-- card.// -->
    
    </div> 
    <!--container end.//-->
    </main>
@endsection