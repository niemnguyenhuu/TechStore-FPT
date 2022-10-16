@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Thêm Slide</h4>
            <p class="card-description">
            
            </p>
            <form method="POST" action="{{Route('createSlide')}}" enctype="multipart/form-data" class="forms-sample">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Tên Slide</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Nhập tên Slide">
              </div>

              <div class="form-group">
                <label>Hình Ảnh</label>
                <input type="file" name="file_upload" class="form-control">
              </div>
              
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleSelectGender">Vị trí</label>
                      <select class="form-control" name="slide_number" id="exampleSelectGender">
                        <option value="0" selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>ID sản phẩm</label>
                  <input type="number" name="pro_id" class="form-control">
                </div>
                <div>
        </div>
   </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button type="button" class="btn btn-light">Cancel</button>                
          </div>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#cate').click(function(){
      var id_cate=$(this).val();
      $.ajax({
        url: '{{route('loadCateItems')}}',
        method: 'POST',
        data:{
          _token: "{{ csrf_token() }}",
          id_cate:id_cate
        },
        success:function(data){
          $("select[name='cate_id'").html('');
                $.each(data, function(key, value){
                    $("select[name='cate_id']").append(
                        "<option value=" + value.id + ">" + value.name + "</option>"
                    );
                });
        }
      })
    });
  });
</script>
@endsection