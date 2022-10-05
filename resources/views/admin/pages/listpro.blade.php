@extends('admin.master')
@section('noidung')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Danh sách sản phẩm</p>
            <div class="table-responsive">
              <a class="card-title badge badge-info rounded" href="">Thêm mới</a>
              <table id="recent-purchases-listing" class="table table-hover">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Loại</th>
                      <th>Tên</th>
                      <th>Hình</th>
                      <th>Mô tả</th>
                      <th>Gía</th>
                      <th>Ngày đăng</th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>Điện thoại</td>
                      <td>Iphone 14 pro max</td>
                      <td><img src="" alt="" style="width:120px; height:100px"></td>
                      <td>Điện thoại mới nhất</td>
                      <td>1500$</td>
                      <td>15-05-2002</td>
                      <td><a class="badge badge-info rounded" href="">Sửa</a></td>
                      <td><a class="badge badge-danger rounded" href="">Xóa</a></td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>Máy tính</td>
                      <td>Nitro 5</td>
                      <td><img src="" alt=""  style="width:120px; height:100px"></td>
                      <td>Laptop intel I5-I7</td>
                      <td>1000$</td>
                      <td>17-06-2002</td>
                      <td><a class="badge badge-info rounded" href="">Sửa</a></td>
                      <td><a class="badge badge-danger rounded" href="">Xóa</a></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection