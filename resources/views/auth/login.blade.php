@extends('common')

@section('content')


    
<div class='row' >

    <div class="col-md-5 center-block" style="float:none;">
    	<h2 class="sign-up-title" style="color:dimgray; text-align: center">Welcome back! Please sign in</h2>
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
		<div class="row">
			<div class="col-xs-12">	
			    <form class="omb_loginForm" action="{{ url('/auth/login') }}" autocomplete="off" method="POST">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="text" class="form-control" style="height:40px;" name="email" value="{{ old('email') }}" placeholder="Email Address">
					</div>
					<span class="help-block"></span>
										
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="password" style="height:40px;" placeholder="Password">
					</div>
                    
                    <span class="help-block"></span>
                    <a class="pull-right" href="{{ url('/password/email') }}">Forgot password?</a>
                   <div class="checkbox" style="width:140px;">
				    	<label><input name="remember" type="checkbox"  value="Remember Me" checked> Remember Me</label>
				    </div>
                    <span class="help-block"></span>
					<button class="btn btn-lg btn-success btn-block" type="submit">Log In <i class="fa fa-sign-in"></i></button>
                    <span class="help-block"></span>
				</form>
			</div>
    	</div>
        <br>
        <div class="row">
			<div class="col-xs-12 " style="text-align:center;">
                <hr class="omb_hrOr">
				<span class="omb_spanOr" style="background:#D7D9D9; color:black; border-radius:20px; font-weight:bold;">or</span>
			</div>
		</div>
        <br>
       <!--  <div class="row">
			<div class="col-xs-12 " style="text-align:center;">
				<span class="" style="font-weight:; color:#333;">Login Using</span>
			</div>
		</div> -->
        
        
        <span class="help-block"></span>
        <div class="row  omb_socialButtons" style="text-align:center;">
    	    <div class="col-xs-4" style="text-align:center;">
    	    <form class="omb_loginForm" action="{{ url('login/facebook') }}" autocomplete="off" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit"  class="btn btn-social-icon btn-facebook hidden-md hidden-sm hidden-lg " style="width:100%;">
    	    <i class="fa fa-facebook"></i>
    	    </button>
		        <button type="submit"  class="btn btn-block btn-social btn-facebook   hidden-xs">
			        <i class="fa fa-facebook"></i>
			        <span class=""> Facebook</span>
		        </button>
		        </form>
	        </div>
              <div class="col-xs-4">
               <form class="omb_loginForm" action="{{ url('login/twitter') }}" autocomplete="off" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit"  class="btn btn-social-icon btn-twitter hidden-md hidden-sm hidden-lg " style="width:100%;">
    	    <i class="fa fa-twitter"></i>
    	    </button>
		        <button type="submit"  class="btn btn-block btn-social btn-twitter   hidden-xs">
			        <i class="fa fa-twitter"></i>
			        <span class=""> Twitter</span>
		        </button>
		        </form>
	        </div>
              <div class="col-xs-4">
                  	    <form class="omb_loginForm" action="{{ url('login/google') }}" autocomplete="off" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit"  class="btn btn-social-icon btn-google-plus hidden-md hidden-sm hidden-lg " style="width:100%;">
    	    <i class="fa fa-google-plus"></i>
    	    </button>
		        <button type="submit"  class="btn btn-block btn-social btn-google-plus   hidden-xs">
			        <i class="fa fa-google-plus"></i>
			        <span class=""> Google</span>
		        </button>
		        </form>
	        </div>
        	
		</div>
        
        
        
        
       <!-- <div class="col-md-12">
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
        </div>-->
     
        <br>
        <p class="text-center"><a href="{{ url('/auth/register') }}">Register for an account?</a></p>
     
		<!--<div class="row omb_row-sm-offset-3">
			
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					<a href="#">Forgot password?</a>
				</p>
			</div>
		</div>	   --> 	
	</div>
</div>


        









<!-- 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->
@endsection
