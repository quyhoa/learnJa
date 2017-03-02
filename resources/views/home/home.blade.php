<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <title>@yield('title')</title> -->
    <title>{{$title}}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/submenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dropdownhover.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <!-- <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet"> -->

    <!-- Morris Charts CSS -->
    <!-- <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <!-- <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div class="container">
    <!-- navbar -->
    <nav class="navbar navbar-inverse bg-primary">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/adm">My Language</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="actives"><a href="#">Home</a></li>
          <li><a href="{{route('level5',1)}}">Level 1</a></li>
          <li><a href="{{route('level5',2)}}">Level 2</a></li>
          <li><a href="{{route('level5',3)}}">Level 3</a></li>
          <li><a href="{{route('level5',4)}}">Level 4</a></li>
          <li><a href="{{route('level5',5)}}">Level 5</a></li>
          <li><a href="#">Advance</a></li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </nav>
  </div>
  <!-- content -->
  <div class="container">
    @yield('content')
  </div>
    <!-- /#wrapper -->   

</body>

<!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{asset('js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('js/plugins/morris/morris-data.js')}}"></script>
    <script src="{{asset('js/test.js')}}"></script>
    <!-- <script src="{{asset('js/bootstrap-submenu.js')}}"></script>
    <script src="{{asset('js/bootstrap-dropdownhover.js')}}"></script> -->    

</html>
