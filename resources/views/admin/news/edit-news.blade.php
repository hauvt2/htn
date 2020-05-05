@extends('admin.layouts.master')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
</div>
@endif
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><i class="fas fa-newspaper"></i> Thêm mới bài viết</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm mới bài viết</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tạo bài viết <i class="fas fa-newspaper"></i></h3>
          </div>
          <!-- /.card-header -->
          @if(Session::has('edit-success'))
          <div class="alert alert-success" style="margin: 1em 1em;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('edit-success')}}</strong>
          </div>
          @endif
          <!-- form start -->
          <form role="form" action="{{Route('admin.update-news')}}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }} 
            <input type="hidden" name="id" value="{{$news->id}}"> 
             <div class="card-body">
              <div class="form-group">
                <label>Tiêu đề (<span style="color: red;">*</span>)</label>
                <input type="name" value="{{isset($news->title) ? $news->title : ''}}" class="form-control" name="title" placeholder="Nhập tiêu đề ..." required="true">
              </div>

            <div class="form-group">
              <label>Danh mục (<span style="color: red;">*</span>)</label>
              <select name="id_type" class="custom-select"  required="true">
                @foreach($danhmuc as $value)
                  @if(isset($news->id_type) && $news->id_type == $value->id )
                    <option value="{{$value->id}}" selected>{{$value->name}}</option>
                  @else 
                    <option value="{{$value->id}}" >{{$value->name}}</option>
                  @endif
                @endforeach
                
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mô tả ngắn(<span style="color: red;">*</span>)</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="summary" rows="3" placeholder="Nhập mô tả ngắn ..."  required="true">{!!isset($news->summary) ? $news->summary : ''!!}</textarea>
            </div>
            
            <div class="form-group">
              <label >Nội dung (<span style="color: red;">*</span>)</label>
              <textarea class="form-control" name="content" rows="3" id="editor1" required="true"> {!!isset($news->content) ? $news->content : ''!!}</textarea>
            </div>
            <script>
             CKEDITOR.replace( 'editor1', {
              filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
              filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
              filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
              filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
              filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
              filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
            } );
          </script>

          <div class="form-group">
            <label for="exampleInputEmail1">Chọn ảnh đại diện cho bài viết (<span style="color: red;">*</span>)</label>
            <input type="file" name="images" class="form-control" accept="image/png,image/jpg" id="customFile"> <br>
            <img src="public/img/{{isset($news->images) ? $news->images : ''}}" style="margin: 0.5em 0;width: 30%;height: auto;">
          </div>

        <div class="form-group">
          <label>Trạng Thái (<span style="color: red;">*</span>)</label>
          <select name="status" class="custom-select">
            
            @if(isset($news->status) && $news->status == 1 )
                <option value="1" selected>--Kích hoạt --</option>
                <option value="0">--Vô hiệu hóa--</option>
              @else
               <option value="1" >--Kích hoạt --</option>
              <option value="0" selected>--Vô hiệu hóa--</option>
            @endif
          </select>
        </div>

        <div class="form-group">
         <div class="form-check">
            @if(isset($news->highlight) && $news->highlight == 1 )
              <input type="checkbox" value="1" checked class="form-check-input" id="exampleCheck1" name="highlight">
            @else 
              <input type="checkbox" value="0" class="form-check-input" id="exampleCheck1">
            @endif
            <label class="form-check-label" for="exampleCheck1">Tin nổi bật</label>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Xuất bản</label>
        </div>


         <div class="d-flex">
          <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-pencial"></i>Cập nhật</button>
          </div>
          <div class="card-footer">

            <a href="{{ route('admin.all-news') }}" class="btn btn-warning">Quay lại</a>
          </div>
        </div>

      </div>
      <!-- /.card-body -->

    </form>
  </div>
  <!-- /.card -->
</div>
</div>
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection