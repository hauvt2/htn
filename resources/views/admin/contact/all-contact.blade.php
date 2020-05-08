@extends('admin.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Quản lý danh mục tin tức</h1>
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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fa fa-list"></i>  Tất Cả Danh Mục (<span style="color: red;">*</span>)</h3>

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
          @if(Session::has('success'))
          <div class="alert alert-success" style="margin: 1em 1em;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('success')}}</strong>
          </div>
          @endif
          <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th colspan="1" style="text-align: center;">STT</th>
                  <th colspan="1" style="text-align: center;">Tên </th>
                  <th colspan="1" style="text-align: center;">Số điện thoại</th>
                  <th colspan="1" style="text-align: center;">Email</th>
                  <th colspan="1" style="text-align: center;">Tin Nhắn</th>
                  <th colspan="1" style="text-align: center;">Người trả lời</th>
                  <th colspan="2" style="text-align: center;">Ngày Gửi</th>

                </tr>

                <?php
                  $stt = 0;

                ?> 
                @foreach($contact1 as $row)
                <tr>

                  <td>{{ $stt+=1 }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->question }}</td>
                  <td>{{ $row->answered_by }}</td>
                  <td>{{ $row->created_at }}</td>
                  
                  
               </tr>
               @endforeach
             </thead>
             <tbody>


             </tbody>
           </table>

         </div>
         <!-- /.card-body -->
       </div>
       <!-- /.card -->
        {{$contact1->links()}}
     </div>
   </div>
 </div>
 <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection