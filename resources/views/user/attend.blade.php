
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
                <select style="float: left;" aria-label="Năm SH" name="ac_year" id="ac_year" title="Năm SH" class="sl_at">
                   <option value="ALL">Năm Sinh hoạt</option>
                    @for($i=1; $i<=3; $i++)
                        <option value="{{$i}}">Năm {{$i}}</option>
                    @endfor
                    <option value="4">Dự tu tự do</option>
                  </select>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table id="tableID" class="table table-hover text-nowrap"><thead>
                    <tr>
                      <th style="width: 10px">STT</th>
                      <th>Tên dự tu</th>
                      <th>Giáo xứ</th>
                      <th hidden="true" >Năm SH</th>
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
                      <td hidden="true" >{{$dutu->idyear}}</td>
                      <td>
                        <input name="{{$dutu->id}}" style="min-width: 20px" type="checkbox" id="checkboxPrimary2">
                      </td>
                      <td>
                        <input name="note_{{$dutu->id}}" type="text" class="form-control">
                      </td>
                    </tr>
                    @endforeach          
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <button class="btn btn-warning" id="Save" >Save</button>
          </div>
          <script type="text/javascript">
       $('#Save').click(function () {
          statusList = jQuery('input[type=checkbox]')
          data = []
          for(i=0;i<statusList.length;i++) {
          std = {
            'iddutu': jQuery(statusList[i]).attr('name'),
            'status': jQuery(statusList[i]).prop('checked'),
            'note': jQuery('[name=note_'+jQuery(statusList[i]).attr('name')+']').val()
                }
                data.push(std)
              }
          
              $.post('{{ route('save.attend') }}',
                {'_token': "{{ csrf_token() }}",
                'month': jQuery('[name=month]').val(),
                'year': jQuery('[name=year]').val() ,
                'data': JSON.stringify(data)} 
                ,function(data){
               location.reload()
              });

            });
    </script>
    <script type="text/javascript">
      $('#ac_year').change( function(){
          var sl, filter, table, tr, td, i, slValue;
          sl = $('#ac_year');
          filter = sl.val();
          table = $("#tableID");
          tr = $("tr");
          if (filter === 'ALL') {
               $ ('tr').show ();
           }
           else{
            for (i = 0; i < tr.length; i++) {
                  td = tr[i].children[3];
                  if (td) {
                    slValue = td.textContent || td.innerText;
                    if (slValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  }       
                }
           }
                
            });

    </script>
@endsection