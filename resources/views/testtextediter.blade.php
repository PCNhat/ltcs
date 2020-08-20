<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Laravel Filemanager</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/laravel-filemanager/img/72px color.png') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <h1 class="page-header">Integration Demo Page</h1>
    <div class="row">
      <div class="col-md-6">
        <h2 class="mt-4">CKEditor</h2>
        <textarea name="ce" class="form-control"></textarea>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script>
   var route_prefix = "/filemanager";
  </script>
 <!-- CKEditor init -->
 <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
 <script>
   $('textarea[name=ce]').ckeditor({
     height: 100,
     filebrowserImageBrowseUrl: route_prefix + '?type=Images',
     filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
     filebrowserBrowseUrl: route_prefix + '?type=Files',
     filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
   });
 </script>
 </body>
 </html>