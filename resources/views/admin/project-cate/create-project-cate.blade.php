@extends('admin.layouts.master')

@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-user-plus"></i> Thêm mới danh mục sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm mới danh mục sản phẩm</li>
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
                <h3 class="card-title">Tạo danh mục <i class="fa fa-users"></i></h3>
              </div>
              <!-- /.card-header -->

               @if(Session::has('success'))
                  <div class="alert alert-success" style="margin: 1em 1em;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{Session::get('success')}}</strong>
                  </div>
                @endif
              <!-- form start -->
              <form role="form" action="{{Route('admin.save-project-cate')}}" method="post">
                 {{ csrf_field() }} 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục(<span style="color: red;">*</span>)</label>
                    <input type="name" name="name" class="form-control"  placeholder="Nhập tên sản phẩm">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Trạng thái</label>
                    <br>
                    <select class="custom-select" name="status" style="width: 15%;">
                      <option value="">--Chọn trạng thái--</option>
                      <option value="1">Xuất bản</option>
                      <option value="2">Không xuất bản</option>
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