@extends('client.master')
@section('title','Thông tin t')
@section('content')
<main>
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-12 mb-4 mb-lg-0">
              <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                  <div class="col-md-3 gradient-custom text-center text-white"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                      alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                    <h5>Trần Hữu Hoà</h5>
                    <p class="text-dark">Thiết kế web</p>
                    <a class="text-dark" href="edit_profile"><i class="far fa-edit mb-5"></i></a>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body p-4">
                      <h6>Thông tin tài khoản</h6>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Email</h6>
                          <p class="text-muted">hoatran@gmail.com</p>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Số điện thoại</h6>
                          <p class="text-muted">0919901493</p>
                        </div>
                      </div>
                      <h6>Chi tiết</h6>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Địa chỉ</h6>
                          <p class="text-muted">Hà Tĩnh</p>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Vai trò</h6>
                          <p class="text-muted">Thành viên</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-start">
                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection