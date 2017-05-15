@include('layouts.nav')

	<div style='margin-top:5%' class="container-fluid">
		<div style='width: 30%;margin:auto' class="panel panel-default">
			<h2 style='margin-left:5%' >Change Password</h2>
				<hr>
	        			 @if (Session::has('danger'))
	        <div style='margin-left:7%;text-align:center' class="alert alert-success col-sm-10"> 
	             {{Session::get('danger')}}
	        </div>
	        @endif

	        			 @if (Session::has('warning'))
	        <div style='margin-left:7%;text-align:center' class="alert alert-success col-sm-10"> 
	             {{Session::get('warning')}}
	        </div>
	        @endif


			<form id="form-change-password" role="form" action="passwordUpdate" method="post">
					<div style='margin:10%' >
					  	<div class="form-group">
					  	  <label for="current-password">Current Password:</label>
					  	  <input type="hidden" name="_token" value="{{csrf_token()}}">
					  	  <input type="password" name="current_password" class="form-control" id="current_password" placeholder="Password">
					  	   @if($errors->has('password'))<div style='margin-top:5px' class="alert alert-danger"> <p>{{$errors->first('password')}}</p> </div>@endif
					  	</div>
	
						<div class="form-group">
						    <label for="password">New Password:</label>
						    <input type="password" name="password" class="form-control" id="password" placeholder="New password">
						     @if($errors->has('password'))<div style='margin-top:5px' class="alert alert-danger"> <p>{{$errors->first('password')}}</p> </div>@endif
						</div>

						<div class="form-group">
						    <label for="password-confirmation">Confirm Password:</label>
						    <input type="password" name="password-confirmation" class="form-control" id="password-confirmation" placeholder="Re-enter password">
						     @if($errors->has('password'))<div style='margin-top:5px' class="alert alert-danger"> <p>{{$errors->first('password')}}</p> </div>@endif
						</div>



					</div>
				 <hr>
  			<p style='text-align: center'>
        	  <a style='border-color:#ccc' href="{{URL::to('/my_account')}}" class="btn btn-secondary">Cancel</a>
        	  <button style='margin-left:20px' href="#" class="btn btn-primary">Apply change</button>

        	</p>
			</form>
		</div>

	</div>

@include('layouts.footer')
</body>
</html>