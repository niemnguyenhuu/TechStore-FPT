@extends('client.master')
@section('title','Danh mục')
@section('content')
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content d-md-flex justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
          <h2>Danh sách yêu thích</h2>
          <p>Sản phẩm yêu thích</p>
        </div>
        <div class="page_link">
          <a href="index.html">Home</a>
          <a href="#">Danh sách yêu thích</a>
          <a href="category.html"></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cart_area">
  <div class="container">
    <div class="cart_inner">
      <div class="table-responsive">
        @foreach ($wishlist as $item)
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Sản phẩm</th>
              <th scope="col">Giá</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Hành động</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="media">
                  <div class="row product_data">
                    <img src="{{asset('/images/products/'.$item->products->image)}}" alt=""style="width:50%">
                  </div>
                  <div class="col-md-6 my-auto">
                    <h6>{{$item->products->name}}</h6> 
                  </div>
                </div>
              </td>
              <td>
                <div class="media-body">
                <h6>{{$item->products->price}}</h6>
                </div>
              </td>
              <td>
                <div class="product_count">
                  <input
                    type="text"
                    name="qty"
                    id="sst"
                    maxlength="12"
                    value="1"
                    title="Quantity:"
                    class="input-text qty"
                  />
                  <button
                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                    class="increase items-count"
                    type="button"
                  >
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                  <button
                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                    class="reduced items-count"
                    type="button"
                  >
                    <i class="lnr lnr-chevron-down"></i>
                  </button>
                </div>
              </td>
              <div class="col-md-2 my-auto"></div>
              <td>
                <h5><button class="btn btn-success"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button></h5>
              </td>
              <td>
                <h5><a href="{{route('deleteWish',$item->id)}}"><button class="btn btn-danger" onclick="return confirm('Xóa mục này?')"> <i class="fa fa-trash"></i> Xóa</button></a></h5>
              </td>
            </tr>
            <tr>
              <td>
        </table>
      </div>
      @endforeach
    </div>
  </div>
</section>
      <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
@endsection