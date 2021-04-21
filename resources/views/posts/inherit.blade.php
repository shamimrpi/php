<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Laravel Post List</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="{{url('template/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{url('template/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->

  <link rel="stylesheet" href="{{url('template/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- DataTables -->

  <link rel="stylesheet" href="{{url('template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->

  <link rel="stylesheet" href="{{url('template/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('template/dist/css/skins/_all-skins.min.css')}}">


   <link rel="stylesheet" href="{{url('template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{url('template/custome.css')}}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
  @yield('body')
<!-- jQuery 3 -->

<script src="{{url('template/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->

<script src="{{url('template/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->

<script src="{{url('template/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="{{url('template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->

<script src="{{url('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->

<script src="{{url('template/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->


<script src="{{url('template/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{url('template/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->

<script src="{{url('template/dist/js/demo.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
