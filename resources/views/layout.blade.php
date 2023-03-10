<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
       <!-- {{--fonts--}} -->
        

      <!-- {{--BOOTSTRAP CSS--}}  -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <!-- {{--Navbar--}} -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <img src="http://localhost/taskmanage/logo1.webp" style="width: 100px;height:60px; margin-left:-70px;">&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="navbar-brand" href="#">Task App</a>
  <a class="nav-link active" aria-current="page" href="{{url('/logout-user')}}" style="color: grey">Logout</a>
  <a class="nav-link active" aria-current="page" href="contact" style="color: grey">Contact Us</a>
  <a class="nav-link active" aria-current="page" href="project" style="color: grey">Profiles</a>
    {{-- <a class="nav-link" href="{{route('task.create')  }}" style="color: grey">New Task</a> --}} 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index">Home</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="{{route('task.create')  }}">New Task</a>
        </li>
     
    </div>
  </div>
</nav>
        <!-- {{--Body--}} -->
        <div class="container p-5">
        @yield('main-content')
        </div>
        <!-- {{--BOOTSTRAP JS--}} -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
           </body>
</html>
