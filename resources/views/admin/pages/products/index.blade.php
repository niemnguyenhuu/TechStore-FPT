@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Danh sách sản phẩm</p>
            <div class="table-responsive">
              <a class="card-title badge badge-info rounded" href="{{route('loadCreatePro')}}">Thêm mới</a>
              <table id="recent-purchases-listing" class="table table-hover">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Loại</th>
                      <th>Tên</th>
                      <th>Hình</th>
                      <th>Giá</th>
                      <th>Ngày đăng</th>
                      <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($allPro as $pro)
                  <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->Cate_items->name}}</td>
                    <td>{{$pro->name}}</td>
                    <td><img src="{{asset('images/products/'.$pro->image)}}" alt="" style="width:100px; height:100px"></td>
                    <td>{{$pro->price}} VND</td>
                    <td>{{$pro->date}}</td>
                    <td><a class="badge badge-info rounded" href="{{route('loadEditPro',$pro->id)}}">Sửa</a>
                    <a class="badge badge-danger rounded" onclick="return confirm('Xóa mục này?')" href="{{route('deletePro',$pro->id)}}">Xóa</a></td>
                </tr>
                  @endforeach           
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection