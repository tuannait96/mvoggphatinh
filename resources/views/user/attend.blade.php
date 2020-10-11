@extends('user.layout.layout')
@section('content')
 <div class="col-lg-9">
 	<div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

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
                <table class="table table-hover text-nowrap"><thead>
                    <tr>
                      <th style="width: 10px">STT</th>
                      <th>Tên dự tu</th>
                      <th>Giáo xứ</th>
                      <th style="width: 100px">Trạng thái</th>
                      <th>Ghi chú</th>
                    </tr>
                  </thead>
                  <tbody> 
                    <tr>
                      <td>1.</td>
                      <td>Giuse Nguyễn Anh Tuấn</td>
                      <td>Khe Gát</td>
                      <td>
                        <input type="checkbox" id="checkboxPrimary2">
                      </td>
                      <td>
                        <input type="text" class="form-control" >
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Giuse Nguyễn Anh Tuấn</td>
                      <td>Khe Gát</td>
                      <td>
                        <input type="checkbox" id="checkboxPrimary2">
                      </td>
                      <td>
                        <input type="text" class="form-control" >
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Giuse Nguyễn Anh Tuấn</td>
                      <td>Khe Gát</td>
                      <td>
                        <input type="checkbox" id="checkboxPrimary2">
                      </td>
                      <td>
                        <input type="text" class="form-control" >
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Giuse Nguyễn Anh Tuấn</td>
                      <td>Khe Gát</td>
                      <td>
                        <input type="checkbox" id="checkboxPrimary2">
                      </td>
                      <td>
                        <input type="text" class="form-control" >
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Giuse Nguyễn Anh Tuấn</td>
                      <td>Khe Gát</td>
                      <td>
                        <input type="checkbox" id="checkboxPrimary2">
                      </td>
                      <td>
                        <input type="text" class="form-control" >
                      </td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Giuse Nguyễn Anh Tuấn</td>
                      <td>Khe Gát</td>
                      <td>
                        <input type="checkbox" id="checkboxPrimary2">
                      </td>
                      <td>
                        <input type="text" class="form-control" >
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
@endsection