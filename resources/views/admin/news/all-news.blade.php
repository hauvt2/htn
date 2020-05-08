@extends('admin.layouts.master')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
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
        <h1 class="m-0 text-dark">Quản lý tin tức</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Quản lý tin tức</li>
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
            <h3 class="card-title"><i class="fa fa-list"></i>  Danh sách tin tức (<span style="color: red;">*</span>)</h3>

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
          @if(Session::has('edit-success'))
          <div class="alert alert-success" style="margin: 1em 1em;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('edit-success')}}</strong>
          </div>
          @endif
          <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th colspan="1" style="text-align: center;">Tiêu đề</th>
                  <th colspan="1" style="text-align: center;">Tóm tắt</th>
                  <th colspan="1" style="text-align: center;">Ảnh</th>
                  <th colspan="1" style="text-align: center;">Lượt xem</th>                
                  <th colspan="1" style="text-align: center;">Trạng thái</th>
                  <th colspan="2" style="text-align: center;">Thao tác</th>
                  
                </tr>

                @foreach($news2 as $row)
                <tr>

                  <td>{{ $row->title }}</td>
                  <td>{{ $row->summary }}</td>
                  <td><img src="public/img/{{ $row->images }}" class="img-thumbnail" width="75" /></td>
                 
                  <td>{{ $row->views }}</td>

                  <td>{{ $row->status == 1 ? 'Kích hoạt' : 'Vô hiệu hóa'}}</td>


                  <td>
                    <div class="d-flex justify-content-center">
                      <div>
                        <a class="btn btn-outline-primary mr-2" href="{{ route('admin.edit-news', $row->id) }}">Sửa</a>
                      </div>
                      <div class="">


                       <a class="btn btn-outline-danger mr-2" href="{{ route('admin.delete-news', $row->id) }}">Xóa</a>

                     </div>
                   </div>
                 </td>
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
       {{$news2->links()}}
     </div>
   </div>
 </div>
 <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection