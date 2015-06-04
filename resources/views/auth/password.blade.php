@extends('common')

@section('content')




    
<div class='row'>

    <div class="col-md-5 center-block" style="float:none;">
    	<h2 class="sign-up-title" style="color:dimgray; text-align: center">Request password reset</h2>
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
			    <form class="omb_loginForm" action="{{ url('/password/email') }}" autocomplete="off" method="POST">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="text" class="form-control" style="height:40px;" name="email" value="{{ old('email') }}" placeholder="Email Address">
					</div>
					<span class="help-block"></span>
					<button class="btn btn-lg btn-success btn-block" type="submit">Send Password Reset Link <i class="fa fa-send"></i></button>
                    <span class="help-block"></span>
				</form>
			</div>
    	</div>
        <br>
      
       <!--  <div class="row">
			<div class="col-xs-12 " style="text-align:center;">
				<span class="" style="font-weight:; color:#333;">Login Using</span>
			</div>
		</div> -->
        
        <p class="text-center"><a href="{{ url('/auth/login') }}">Remembered your password?</a></p>
     
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
				<div class="panel-heading">Reset Password</div>
				<div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Send Password Reset Link
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->
@endsection
