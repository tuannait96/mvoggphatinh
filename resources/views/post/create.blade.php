<!DOCTYPE html>
@include('ckfinder::setup')
<html lang="en">
<head>
    <meta charset=UTF-8>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>

    <script>
         function openPopup() {
             CKFinder.popup( {
                 chooseFiles: true,
                 onInit: function( finder ) {
                     finder.on( 'files:choose', function( evt ) {
                         var file = evt.data.files.first();
                         document.getElementById( 'url' ).value = file.getUrl();
                     } );
                     finder.on( 'file:choose:resizedImage', function( evt ) {
                         document.getElementById( 'url' ).value = evt.data.resizedUrl;
                     } );
                 }
             } );
         }
     </script>
     <input type="text" size="48" name="url" id="url" /> <button onclick="openPopup()">Select file</button>

    <textarea name=text id="text" cols="300" rows="100"></textarea>
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
    CKEDITOR.replace( 'text', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

    } );
    </script>
	<script>
        function Save()
        {
            var data = CKEDITOR.instances.text.getData();
            // alert(data);
            $.post('{{route('save.post')}}',{
                '_token': "{{ csrf_token() }}",
                'thumbimg': jQuery('[name=url]').val(),
                'title': 'Linh Dao Linh Muc Giao Phan',
                'content': data,
                'status': 1,
                'idpost': 1
            }, function(data){
                // console.log(data.responseText());
                toastr.success('Thành công!!!','THÔNG BÁO');
                toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": true,
                      "progressBar": true,
                      "positionClass": "toast-top-center",
                      "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                }
            }).fail(function(data)
            {
                toastr.error('Không thàng công!!!','THÔNG BÁO');
                toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": true,
                      "progressBar": true,
                      "positionClass": "toast-top-center",
                      "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                }
                // console.log(data.responseText);
            })
        }
		

		// Your code to save "data", usually through Ajax.
	</script>
	<button type="submit" value="Submit" onclick="Save()">Submit</button>
</body>
</html>

