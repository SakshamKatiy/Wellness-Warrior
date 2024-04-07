<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>Wellness Warriors</title>
    <!-- Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="{{url('frontend/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="our.css">

    <style>
        /* Add your existing styles here */
    
    .dropdown {
        display: inline-block;
        margin-left: 1em;
    }
    
    .dropbtn {
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }
    
    .dropdown-content a {
        color: black;
        padding: 10px 14px;
        text-decoration: none;
        display: block;
    }
    
    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }
    
    .dropdown:hover .dropdown-content {
        display: block;
    }
    .form-align{
        margin-top: 12em;
    }
    </style>
</head>

<body>
    <!-- NAV BAR -->
    <header class="header ">
        <a href="#" class="logo"><i class="fas fa-heartbeat"></i>&nbsp;&nbsp;Wellness Warriors</a>
        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#OurServices">Our Services</a>
            <a href="#about">About</a>
            <a href="#book">Contact Us</a>
            <div class="dropdown">
                <button class="dropbtn">User Area <i class="fas fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="login.html">Login</a>
                    <hr>
                    <a href="register.html">Registration</a>
                    <hr>
                   
                </div>

         
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
   </header>
<div class="container form-align">
    <form class=" my-5 col-6" method="post" action="{{route('frontend.register')}}">
      @csrf

        <div class="form-group   my-4">
          <label for="name" class="col-form-label tm-color-primary">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name">

          @error('name')
          <span class="text-danger" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>


        <div class="form-group   my-4">
          <label for="Email" class="col-form-label tm-color-primary">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email">

          @error('email')
          <span class="text-danger" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>


        <div class="form-group   my-4">
          <label for="password" class="col-form-label tm-color-primary">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter Password">

          @error('password')
          <span class="text-danger" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>


        <div class="form-group   my-4">
          <label for="confirm password" class="col-form-label tm-color-primary">Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password" placeholder="Enter Confirm Email">

          @error('confirm_password')
          <span class="text-danger" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>



        
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
   </form>
  </div>
</body>
</html>
