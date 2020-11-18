<!DOCTYPE html>
@include('ckfinder::setup')
<html lang="en">
<head>
    <meta charset=UTF-8>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
     <img src="{{$post->thumbimg}}" width="200" height="200">

    <textarea name=text id="text" cols="300" rows="100">{{$post->content}}</textarea>
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
            $.post('{{route('update.post',$post->id)}}',{
                '_token': "{{ csrf_token() }}",
                'thumbimg': jQuery('[name=url]').val(),
                'title': 'Linh Dao Linh Muc Giao Phan',
                'content': data,
                'status': 1,
                'idpost': 1
            }, function(data){
                console.log(data);
            })
        }
		

		// Your code to save "data", usually through Ajax.
	</script>
	<button type="submit" value="Submit" onclick="Save()">Submit</button>
</body>
</html>

