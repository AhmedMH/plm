<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('font-awesome-4.3.0/css/font-awesome.min.css') }}" rel="stylesheet">
      <link rel="shortcut icon" href="{{ asset('imgs/favicon.ico') }}" />
      <!-- <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/master/dist/cdnjs/3.3.1/css/bootstrap-rtl.min.css"> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('bootstrap/js/jquery-1.11.2.min.js') }}"></script>
      
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
    if (window.location.hash == '#_=_') {
    window.location.hash = ''; // for older browsers, leaves a # behind
    history.pushState('', document.title, window.location.pathname); // nice and clean
    e.preventDefault(); // no page reload
}
    </script>
    <script type="text/javascript">
     $(function () {
$("img").hide();   
$("img").bind("load", function() 
                               {
                     $(this).fadeIn(1000);

                 }).each(function() {
                     if(this.complete) $(this).load();
                 });
               });
    </script>
    </head>
  <body style="/*background-color:#D7D9D9;*/">
    <!-- Wrap all page content here -->
<div id="wrap">
  
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Go-Tech Logo</a>
      </div>
      <div class="collapse navbar-collapse">
          
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <!--     <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li> -->
        </ul>
         
@if (Auth::guest())
  <ul class="nav navbar-nav">
            <li><a href="{{ url('/auth/login') }}">Login</a></li>
            <li><a href="{{ url('/auth/register') }}">Register</a></li>
            </ul>
            <ul id="menu-user-menu" class="nav navbar-nav navbar-right">  <li class="dropdown ">
            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Language <b class="caret"></b></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">العربية</a></li>
              <li class="active"><a href="#">English</a></li>
            </ul>
          </li>
</ul>
          @else
 <ul id="menu-user-menu" class="nav navbar-nav navbar-right ">  <li class="dropdown ">
 <div class="btn-group navbar-btn ">
 <img style="border-radius:4px 0px 0px 4px; width:32px; height:32px;" src="imgs/users/user_avatar_{{ Auth::User()->id }}.png" class="pull-left" >
 
            <button href="#" class="dropdown-toggle  btn btn-default btn-primary" data-toggle="dropdown" style="border:none; background:#3588B9; margin-right:5px;">{{ Auth::user()->name }} <b class="caret"></b></button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="{{ url('/profile') }}"><i class="fa fa-user" ></i> Profile</a></li>
              <li><a href="{{ url('/profile') }}"><i class="fa fa-gear" ></i> Settings</a></li>
              <li class="divider"></li>
              <li><a href="#" onclick="$('#logout_form').submit()"><form id="logout_form" action="{{ url('auth/logout') }}" autocomplete="off" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <i class="fa fa-sign-out" ></i> Logout</form></a></li>
            </ul>
            </div>
          </li>
</ul>
@endif

 
          
      </div><!--/.nav-collapse -->
    </div>
  </div>
    <!-- 
  <br><br><br><br><br>

  {{Auth::User()}} -->
<!--

  <nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container">
      <div class="navbar-header pull-left">
        <div class="navbar-brand">Brand</div>
      </div>
      
      
      <div class="navbar-header pull-right">
        <ul class="nav navbar-nav pull-left">
          <li class="active"><a href="">No Collapse</a> </li>
        </ul>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>Change Password</li>
              <li>Update Profile Info</li>
              <li>Log Off</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 -->
  
    <div style=" position: relative; top: 48px; float:none; min-height:52px;" class="col-sm-9 center-block">
    @include('flash::message')
    </div>
    <div class="container" id="topcontainer">
    @yield('content')
    </div>
    
    
  
    
    
    
    
</div>
 @if (count($errors) > 0)
            <div class="alert alert-warning">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <script type="text/javascript">
          $('.btn-social span').attr('data-loading-text',"Connecting..."); 
          $('.btn-social').on('click',function(e){
            $('button').addClass('disabled');
            $(this).children('span').button('loading');

          });
          var margin=($('body').innerHeight()-$('#topcontainer').innerHeight()-189)/2;
          if(margin>0)
          $('#topcontainer').css('margin-top',margin);
          </script>
<div id="footer" style="margin-top:10px;">
  <div class="container">
    <p class="text-muted text-center credit">© Copyright 2015, <a href="http://go-tech.co" target="_blank">Go-Tech</a>, Inc. All rights reserved. </p>
      
  </div>
</div>

      
  </body>
</html>