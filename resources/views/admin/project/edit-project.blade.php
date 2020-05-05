@extends('admin.layouts.master')

@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-align-justify"></i> Thêm mới sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
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
                <h3 class="card-title">Tạo sản phẩm <i class="fa fa-align-justify"></i></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{Route('admin.update-project')}}" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }} 
                <input type="hidden" name="id" value="{{$project->id}}"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm(<span style="color: red;">*</span>)</label>
                    <input type="name" name="project_name" value="{{isset($project->project_name) ? $project->project_name : ''}}" class="form-control"  placeholder="Nhập tên sản phẩm">
                  </div>
                  
                   <div class="form-group">
                      <label>Danh mục (<span style="color: red;">*</span>)</label>
                      <select name="id_type" class="custom-select"  required="true">
                        @foreach($pro_type as $value)
                          @if(isset($protect->id_type) && $protect->id_type == $value->id )
                            <option value="{{$value->id}}" selected>{{$value->name}}</option>
                          @else 
                            <option value="{{$value->id}}" >{{$value->name}}</option>
                          @endif
                        @endforeach
                        
                      </select>
                    </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mô tả ngắn(<span style="color: red;">*</span>)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Nhập mô ngắn..." >{!!isset($project->description) ? $project->description : ''!!}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nội dung</label>
                    <textarea  name="content" class="form-control" id="noidung" rows="10" placeholder="Nhập nội dung">{!!isset($project->content) ? $project->content : ''!!}
                    </textarea>
                    <script>
                      CKEDITOR.replace( 'noidung',
                    {
                        filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
                        filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
                        filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
                        filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                        filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                        filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
                        
                    }
                    );
                    </script>
                  </div>                  

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Chọn ảnh đại diện cho sẩn phẩm (<span style="color: red;">*</span>)</label>
                    <input type="file" name="images" class="form-control" accept="image/png,image/jpg" id="customFile"> <br>
                    <img src="public/img/{{isset($protect->images) ? $protect->images : ''}}" style="margin: 0.5em 0;width: 30%;height: auto;">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Chọn ảnh chi tiết sản phẩm (<span style="color: red;">*</span>)</label>
                    <input type="file" name="images" class="form-control" accept="image/png,image/jpg" id="customFile"> <br>
                    <img src="public/img/{{isset($protect->images) ? $protect->images : ''}}" style="margin: 0.5em 0;width: 30%;height: auto;">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Link dùng thử</label>
                    <input type="url" name="link_demo" value="{{isset($project->link_demo) ? $project->link_demo : ''}}" class="form-control" style="width: 35%;" placeholder="Nhập link dùng thử">
                  </div>
                

                  <div class="form-group">
                    <label>Trạng Thái (<span style="color: red;">*</span>)</label>
                    <select name="status" class="custom-select">
                       
                      @if(isset($project->status) && $project->status == 1 )
                        <option value="">--Chọn trạng thái--</option>
                        <option value="1" selected>--Kích hoạt --</option>
                        <option value="0">--Vô hiệu hóa--</option>
                      @else
                        <option value="">--Chọn trạng thái--</option>
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

                    <a href="{{ route('admin.all-news') }}" class="btn btn-warning">Quay lại</a>
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