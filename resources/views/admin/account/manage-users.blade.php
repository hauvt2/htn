@extends('admin.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý người dùng</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý người dùng</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-list"></i>  Danh sách tài khoản (<span style="color: red;"></span>)</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Tìm kiếm...">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th colspan="1" style="text-align: center;">STT</th>
                      <th colspan="1" style="text-align: center;">Mã cán bộ</th>
                      <th colspan="1" style="text-align: center;">Họ và Tên</th>
                      <th colspan="1" style="text-align: center;">Ngày Sinh</th>
                      <th colspan="1" style="text-align: center;">Phòng ban</th>
                      <th colspan="1" style="text-align: center;">Chức vụ</th>
                      <th colspan="1" style="text-align: center;">Quyền</th>
                      <th colspan="1" style="text-align: center;">Trạng thái</th>
                      <th colspan="2" style="text-align: center;">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    
                  </tbody>
                </table>
       
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection