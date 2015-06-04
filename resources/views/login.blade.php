@extends('common')

@section('content')


    
<div class='row' >

    <div class="col-md-5 center-block" style="float:none;">
      <h2 class="sign-up-title" style="color:dimgray; text-align: center">Welcome! Please sign in</h2>
        <hr style="height: 5px;
  border-top: 0;
  background: #669AE1;
  border-radius: 5px;">
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
    
        
        <div class="row " style="text-align:center;">
          <div class="col-xs-12" style="margin-bottom:20px;">
          <!-- <a href="{{ url('login/facebook') }}" class="btn btn-social-icon  btn-lg  btn-facebook hidden-md hidden-sm hidden-lg " style="width:100%;">
          <i class="fa fa-facebook"></i>
          </a>
           -->  <form class="omb_loginForm" action="{{ url('login/facebook') }}" autocomplete="off" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-block btn-social btn-lg btn-facebook ">
              <i class="fa fa-facebook"></i>
              <span class=""> Sign in with Facebook</span>
            </button>
            </form>
          </div>
              <div class="col-xs-12"style="margin-bottom:20px;">
            <!--             <a href="{{ url('login/twitter') }}" class="btn  btn-lg  btn-social-icon btn-twitter hidden-md hidden-sm hidden-lg " style="width:100%;">
          <i class="fa fa-twitter"></i>
          </a> -->

             <form class="omb_loginForm" action="{{ url('login/twitter') }}" autocomplete="off" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-block btn-social btn-lg btn-twitter ">
              <i class="fa fa-twitter"></i>
              <span class=""> Sign in with Twitter</span>
            </button>
            </form>
          </div>
              <div class="col-xs-12" style="margin-bottom:20px;">
<!--                         <a href="{{ url('login/google') }}" class="btn  btn-lg  btn-social-icon btn-google-plus hidden-md hidden-sm hidden-lg" style="width:100%;">
          <i class="fa fa-google-plus"></i>
          </a>

 -->             <form class="omb_loginForm" action="{{ url('login/google') }}" autocomplete="off" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-block btn-social btn-lg btn-google-plus ">
              <i class="fa fa-google-plus"></i>
              <span class=""> Sign in with Google</span>
            </button>
            </form>
          </div>
          
    </div>

        
       <!--  <div class="col-md-12">
          <a class="btn btn-block btn-social btn-lg  btn-facebook">
        <i class="fa fa-facebook"></i> Sign in with Facebook
      </a>
        </div>
        <br><br><br>
        <div class="col-xs-12">
         <a class="btn btn-block btn-social btn-lg  btn-twitter ">
        <i class="fa fa-twitter"></i> Sign in with Twitter
      </a>
        </div>
             <br><br><br>
<div class="col-xs-12">
      <a class="btn btn-block btn-social btn-lg  btn-google-plus">
        <i class="fa fa-google-plus"></i> Sign in with Google
      </a>
        </div>
     
        <br> -->
  </div>
</div>


     
@endsection
