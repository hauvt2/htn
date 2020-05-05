@extends('admin.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><i class="fa fa-bars"></i> Thêm mới danh mục tin tức</h1>
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
          <h3 class="card-title">Tạo danh mục tin tức  <i class="fas fa-bars"></i></h3>
        </div>
        <!-- /.card-header -->
        @if(Session::has('success'))
          <div class="alert alert-success" style="margin: 1em 1em;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('success')}}</strong>
          </div>
        @endif
        <!-- form start -->
        <form role="form" action="{{Route('admin.save-news-cate')}}" method="post">
         {{ csrf_field() }} 
         <div class="card-body">
          <div class="form-group">
            <label>Tên danh mục (<span style="color: red;">*</span>)</label>
            <input type="name" class="form-control" name="name" placeholder="Nhập tên ..." required="">
          </div>

         <div class="form-group">
            <label>Danh mục (<span style="color: red;">*</span>)</label>
            <select name="status" class="custom-select">
              <option value="1">--Kích hoạt --</option>
              <option value="0">--Vô hiệu hóa--</option>
              
            </select>
          </div>
          
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tạo mới</button>
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