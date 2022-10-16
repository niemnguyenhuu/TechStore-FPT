@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Danh sách Slider</p>
            <div class="table-responsive">
              <a class="card-title badge badge-info rounded" href="{{route('createSlide')}}">Thêm mới</a>
              <table id="recent-purchases-listing" class="table table-hover">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Tên</th>
                      <th>Hình</th>
                      <th>Thứ tự</th>
                      <th>Sản phẩm liên kết</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($allslide as $slide)
                  <tr>
                    <td>{{$slide->id}}</td>
                    <td>{{$slide->name}}</td>
                    <td><img src="{{asset('images/slider/'.$slide->image)}}" alt="" style="width:100px; height:100px"></td>
                    <td>{{$slide->silde_number}}</td>
                    <td>{{$slide->pro_id}}</td>
                    <td><a class="badge badge-info rounded" href="{{route('loadEditSlide',$slide->id)}}">Sửa</a>
                    <a class="badge badge-danger rounded" onclick="return confirm('Xóa mục này?')" href="{{route('deleteSlide',$slide->id)}}">Xóa</a></td>
                  
                  <tr>
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