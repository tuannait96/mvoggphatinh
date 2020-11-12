
@extends('user.layout.layout')
@section('content')
<div class="col-lg-9">
<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
               <div class="alert alert-danger print-error-msg" style="display:none"></div>
                <div class="success alert alert-success"></div>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
   
        <div style="min-height: 100%;" class="card card-primary card-outline">
          <form enctype="multipart/form-data" id="infoEdit">
                  <div class="card-body box-profile">
                    <div class="text-center" >
                        <div class="text-center" style="margin-left: 26px;">
                      <img id="preview" class="profile-user-img img-fluid img-circle"
                           src="../../dist/img/user4-128x128.jpg"
                           alt="User profile picture" style="margin-right: -100px;">
                            <label id="c_image" class="btn fa fa-camera" for="my-file-selector"> 
                            <input id="my-file-selector" type="file" style="display:none" 
                            onchange="$('#upload-file-info').html(this.files[0].name)">
                            </label>
                            <span class='label label-info' id="upload-file-info" style="display: none;" ></span>
                          
                    </div>
                    
                    <div class="row text-center" style="margin-bottom: 15px;">
                      <div class="col-sm-6 text-center" style="margin: 0 auto;">
                        <input type="text" class="form-control profile-username thongtinten" value="Giuse" disabled placeholder="Chưa có"> 
                      <input type="text" class="form-control profile-username thongtinten" value="Nguyễn Anh Tuấn" disabled placeholder="Chưa có">
                      </div>
                    </div>
                    <div class="row">
                      <div style="padding:0;" class="col-xs-6 col-md-6">
                      <ul style="padding-right: 5%; padding-left: 2%; border-left: outset #1586ffb5;" class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <a class="float-left">Giáo xứ</a> <b class="float-right"><input type="text" class="form-control thongtin" disabled value="Khe Gát" placeholder="Chưa có"> </b> 
                      </li>
                      <li class="list-group-item">
                        <a class="float-left">Nhóm</a> <b class="float-right"><input type="text" class="form-control thongtin" disabled value="Đà Nẵng" placeholder="Chưa có"></b> 
                      </li>
                      <li class="list-group-item">
                        <a class="float-left">Năm dự tu</a> <b class="float-right"><input type="text" class="form-control thongtin" disabled value="Năm 2" placeholder="Chưa có"></b> 
                      </li>
                      <li class="list-group-item">
                        <a class="float-left">Ngày sinh</a> <b class="float-right"><input type="text" class="form-control thongtin" disabled value="09/09/1996" placeholder="Chưa có"></b> 
                      </li>
                    </ul>
                    </div>
                    <div style="padding:0" class="col-xs-6 col-md-6">
                      <ul style="padding-right: 5%; padding-left: 2%; border-left: outset #1586ffb5;" class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <a class="float-left">Trường học</a> <b class="float-right"><input type="text" class="form-control thongtin" disabled value="Bôn Ba" placeholder="Chưa có"></b> 
                      </li>
                      <li class="list-group-item">
                        <a class="float-left">Ngành học</a> <b class="float-right"><input type="text" class="form-control thongtin" disabled value="Công nghệ thông tin" placeholder="Chưa có"></b> 
                      </li>
                      <li class="list-group-item">
                        <a class="float-left">Trạng thái</a> <b class="float-right"><input type="text" class="form-control thongtin" disabled value="Đang sinh hoạt" placeholder="Chưa có"></b> 
                      </li>
                      
                    </ul>
                    </div>
                    </div>
                    <button style="float: right; margin-left: 2%" id="btnedit" class="btn btn-primary">Chỉnh sửa</button>
                    <button type="submit" style="float: right;" id="btnsave" class="btn btn-primary">Lưu</button>
                  </div>
                  <!-- /.card-body -->
                </div>
            </form>

          <div class="col-sm-12">
            <div class="row">
              <div class="card" style="min-width: 100%">
              <div class="card-header">
                <h3 class="card-title">Thông tin điểm danh</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table style="text-align: center;" class="table table-hover text-nowrap table-bordered">
                  <thead>
                    <tr>
                      <th>T1</th>
                      <th>T2</th>
                      <th>T3</th>
                      <th>T4</th>
                      <th>T5</th>
                      <th>T6</th>
                      <th>T7</th>
                      <th>T8</th>
                      <th>T10</th>
                      <th>T11</th>
                      <th>T12</th>
                      <th>T13</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                      <td><input type='checkbox' disabled id='checkboxSuccess3'> <p style="min-width: 63px; width: 100%;white-space: normal;word-break: break-word;">ngủ quên fdsa sadf sdaf sdf sdf sadf sadf sadf sadf ádf</p></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-12">
            <div class="row">
              <div class="card" style="min-width: 100%">
              <div class="card-header">
                <h3 class="card-title">Thông tin giấy tờ</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                    <table class="table">
                      <tbody>
                        <tr>
                        <th style="width:50%">Đơn dự tu:</th>
                        <td><input style="width:auto;height: auto;" type='checkbox' disabled id='checkboxSuccess3'></td>
                        <th style="width:50%">Chứng thư rửa tội:</th>
                        <td><input style="width:auto;height: auto;" type='checkbox' disabled id='checkboxSuccess3'></td> 
                      </tr>
                      <tr>
                        <th style="width:50%">Đơn dự tu:</th>
                        <td><input style="width:auto;height: auto;" type='checkbox' disabled id='checkboxSuccess3'></td>
                        <th style="width:50%">Chứng thư rửa tội:</th>
                        <td><input style="width:auto;height: auto;" type='checkbox' disabled id='checkboxSuccess3'></td> 
                      </tr>
                      <tr>
                        <th style="width:50%">Đơn dự tu:</th>
                        <td><input style="width:auto;height: auto;" type='checkbox' disabled id='checkboxSuccess3'></td>
                        <th style="width:50%">Chứng thư rửa tội:</th>
                        <td><input style="width:auto;height: auto;" type='checkbox' disabled id='checkboxSuccess3'></td> 
                      </tr>
                      <tr>
                        <th style="width:50%">Đơn dự tu:</th>
                        <td><input style="width:auto;height: auto;" type='checkbox' disabled id='checkboxSuccess3'></td>
                        <th style="width:50%">Chứng thư rửa tội:</th>
                        <td><input style="width:auto;height: auto;" type='checkbox' disabled id='checkboxSuccess3'></td> 
                      </tr>
                    </tbody></table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>

  <script type="text/javascript">

$('#btnedit').click(function(){
  $('.thongtin').removeAttr("disabled");
  $('.thongtinten').removeAttr("disabled");
  $('#c_image').css("visibility","visible")
  $('.thongtin').css("border","solid #007bff 1px");
  $('.thongtinten').css("border","solid #007bff 1px");
})
</script>
<script type="text/javascript">
        $(document).ready(function () {

        $('#infoEdit').submit(function() {
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
             
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
               type:'POST',
               url: "{{route('info')}}",
               data:formData,
               cache:false,
               contentType: false,
               processData: false,
             
                 complete: function(response) 
                {
                    if($.isEmptyObject(response.responseJSON.error)){
                            $('.success').show();
                           setTimeout(function(){
                           $('.success').hide();
                        }, 5000);
                    }else{
                        printErrorMsg(response.responseJSON.error);
                    }
                }

            });
        });
       function printErrorMsg(msg){
               $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
       }
    </script>
 
    @endsection