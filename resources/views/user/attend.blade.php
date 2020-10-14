@extends('user.layout.layout')
@section('content')
 <div class="col-lg-9">
  <div class="header-attend">
    <h3><b>Điểm danh nhóm Đà Nẵng</b></h3>
    <h4 style="padding:15px;">Trưởng nhóm: Giuse Nguyễn Anh Tuấn</h4>
    <select aria-label="Tháng" name="month" id="month" title="Tháng" class="sl_at">
      <option value="0">Tháng</option>
      @for($i=1; $i<=12; $i++)
          <option @if($i==date("m")) selected @endif value="@if($i<10)0{{$i}}@else{{$i}}@endif">Tháng {{$i}}</option>
      @endfor
    </select>
    <!-- select năm -->
    <select aria-label="Năm" name="year" id="year" title="Năm" class="sl_at">
      <option value="0">Năm</option>
      @for($i=2019; $i<=date("Y"); $i++)
      <option @if($i==date("Y")) selected @endif value="{{$i}}">{{$i}}</option>
      @endfor
    </select>
  </div>
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách điểm danh</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
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
                      <th style="min-width: 180px;">Ghi chú</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @foreach($lstdutu as $dutu)
                    <tr>
                      <td> 1 </td>
                      <td> {{$dutu->name}}</td>
                      <td>{{$dutu->parish}}</td>
                      <td>
                        <input type="checkbox" id="checkboxPrimary2">
                      </td>
                      <td>
                        <input type="text" class="form-control" >
                      </td>
                    </tr>
                    @endforeach
                   
                                        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
@endsection