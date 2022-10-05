@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm Sản Phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                        <li class="breadcrumb-item active">Thêm Sản Phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
  <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                                    <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm Sản Phẩm</h3>
                </div>

                 <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="">
                        <div class="card-body">
                        <div>
                                                        
                        <div class="form-group">
                            <label>Danh Mục</label>
                            <select class="form-control" name="danhMuc_id" id="exampleSelectGender">
                              </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputPassword1">Tên Sản Phẩm</label>
                                    <input type="text" class="form-control" name="tin_tieuDe" placeholder="Nhập tiêu đề">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputPassword1">Giá bán</label>
                                    <input type="text" class="form-control" name="tin_tomTat"
                                        placeholder="Nhập tóm tắt">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-5">
                                    <label for="exampleInputPassword1">Nội Dung sản phẩm</label>
                                    <textarea id="w3review" name="tin_noiDung" rows="6" cols="135"></textarea>
                                </div>
                            </div>
                            <div class="row">
                              <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" class="form-control-file border" name="image">
                                </div>
                            </div>
                            <div class="row">
                              <div class="form-group">
                                <label for="">Mô tả:</label>
                                <textarea class="form-control" rows="5" name="detail"
                                    placeholder="Mô tả hàng hóa ..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="">Mã loại?</label>
                              <select id="show_cate" name="cate_id" class="form-control">
                            <div class="row">
                           

                        </div>
                    </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button  name="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!-- /.content -->
    </div>
    @endsection
            <!-- Main Footer -->
  