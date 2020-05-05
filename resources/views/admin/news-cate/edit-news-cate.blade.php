@extends('admin.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><i class="fa fa-bars"></i> Sửa danh mục tin tức</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Danh mục tin tức</li>
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
          <h3 class="card-title">Sửa danh mục tin tức  <i class="fas fa-bars"></i></h3>
        </div>
        <!-- /.card-header -->
        @if(Session::has('edit-success'))
        <div class="alert alert-success" style="margin: 1em 1em;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>{{Session::get('edit-success')}}</strong>
        </div>
        @endif
        <!-- form start -->
        <form role="form" action="{{Route('admin.update-news-cate')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }} 
          <input type="hidden" name="id" value="{{$newstype->id}}"> 
          <div class="card-body">
            <div class="form-group">
              <label>Tên danh mục (<span style="color: red;">*</span>)</label>

              <input type="name" value="{{isset($newstype->name) ? $newstype->name : ''}}" class="form-control" name="name" placeholder="Nhập tên ..." required="">
            </div>

            <div class="form-group">
              <label>Trạng Thái (<span style="color: red;">*</span>)</label>
              <br>
              <select name="status" class="custom-select" style="width:15%">
                
                @if(isset($newstype->status) && $newstype->status == 1 )
                    <option value="1" selected>--Kích hoạt --</option>
                    <option value="0">--Vô hiệu hóa--</option>
                  @else
                    <option value="1" >--Kích hoạt --</option>
                    <option value="0" selected>--Vô hiệu hóa--</option>
                @endif
              </select>
            </div>
          
          </div>
          <!-- /.card-body -->
          <div class="d-flex">
            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-pencial"></i>Cập nhật</button>
            </div>
            <div class="card-footer">

              <a href="{{ route('admin.all-news-cate') }}" class="btn btn-warning">Quay lại</a>
            </div>
          </div>
        
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