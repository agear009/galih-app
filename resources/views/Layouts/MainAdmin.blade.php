<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/tinymce/js/tinymce/tinymce.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    @include('Partials.Navbar')
    @yield('Container')


  </body>
  <script src="assets/tinymce/js/tinymce/tinymce.min.js"></script>

  <script type="text/javascript">

  tinymce.init({

      selector: "textarea",

      plugins: [

          "advlist autolink lists link image charmap print preview anchor",

          "searchreplace visualblocks code fullscreen",

          "insertdatetime media table contextmenu paste"

      ],

  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"

  });

  </script>
</html>
