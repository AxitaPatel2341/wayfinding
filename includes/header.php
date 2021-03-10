<!-- Image and text --> 

<link href="https://fonts.googleapis.com/css?family=Crimson+Pro&family=Literata" rel="stylesheet">
  <style>
   *{
    /* font-family: 'Crimson Pro', serif !important; */
        -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
  }

  /*searchbox*/

    .custom_search{
      color: #FFF !important;
      background: transparent;
      border: 0;
      border-radius: 0;
      border-bottom: 2px solid #FFF;
      width: 240px !important;
    }
    .custom_search:focus{
      box-shadow: none;
      background: transparent;
      border-bottom:2px solid #FFF;
    }
    .custom_search + .search_span{
      position: absolute;
      bottom: 0;
      width: 0;
      left: 50%;
      transition: width 0.5s, left 0.5s;
    }
    .custom_search:focus + .search_span{
      width: 240px;
      left: 0;
      border-bottom: 2px solid #fa2929;     
    }
    .custom_search::placeholder{
      color: #FFF !important;
    }

    .search_button{
      background: #fa2929;
      width: 100px;
      border: 0;
    }
    .search_button:focus{
      border: 0;
      box-shadow: none;
    }
    .search_button:active{
      background: #8e24aa !important;
      box-shadow: none !important;
    }

    .search_button:hover{
      background: #fa2929;
    }

/*ripple effect*/

    .tx--white {
        color: #fff;
    }

[ripple] {
  position: relative;
  overflow: hidden;
}
[ripple] .ripple--container {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}
[ripple] .ripple--container span {
  transform: scale(0);
  border-radius: 100%;
  position: absolute;
  opacity: 0.30;
  background-color: #fff;
  animation: ripple 1000ms;
}
@-moz-keyframes ripple {
  to {
    opacity: 0;
    transform: scale(2);
  }
}
@-webkit-keyframes ripple {
  to {
    opacity: 0;
    transform: scale(2);
  }
}
@-o-keyframes ripple {
  to {
    opacity: 0;
    transform: scale(2);
  }
}
@keyframes ripple {
  to {
    opacity: 0;
    transform: scale(2);
  }
}

/*navbar*/

.navbar{
  background: #111 !important;
  line-height: 2.4rem !important; 
  font-family: 'Literata', serif !important;
}

.navbar .navbar-brand{
  color: #FFF !important;
}

.navbar-nav .nav-item .nav-link{
  color: #FFF;
}

.navbar-nav .nav-item .nav-link:hover{
  color: #fa2929;
}
.dropdown-menu {
  background: #22221E;
}
.dropdown-menu .dropdown-item{
  color: #FFF;
  transition: all 0.2s;
}

.dropdown-menu .dropdown-item:hover{
  background: #fa2929;
  color: #FFF;
}

.navbar-toggler-icon{
  color: #FFF !important;
}

.navbar-dark .navbar-toggler{
  border-color: #FFFFFF !important;
}

  </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="image/logo1.png" style="width:50px; height:50px;" /> ESST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Nearest malls</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Join us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="javascript:void(0);">About us</a>
          <a class="dropdown-item" href="javascript:void(0);">Contact us</a>
          <a class="dropdown-item" href="javascript:void(0);">Report Bug</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 col-md-4">
      <div style="position: relative;">
          <input class="custom_search form-control mr-sm-2" type="search" placeholder="Search" pattern="[^'\x22]+" title="Invalid input" aria-label="Search">
          <span class="search_span"></span>
      </div>
      <button class="ml-lg-3 btn btn-success my-2 my-sm-0 search_button tx--white" type="button" ripple="ripple">Search</button>
    </form>
    <!-- <div>
      <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
        <i class='far fa-user-circle' style='font-size:24px'></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="javascript:void(0);">0</a>
          <a class="dropdown-item" href="javascript:void(0);">1</a>
          <a class="dropdown-item" href="javascript:void(0);">2</a>
        </div>
      </li>
      </ul>
    </div> -->
  </div>
</nav> 

