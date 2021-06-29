<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Login Form</title>
</head>
<body>
	<div class="container" pt-3>
		<form action="{{route('tests.store')}}" method="POST" id="LOGIN">
		@csrf
		<div class="card-body pl-4 pr-4">
			<div class="row">
				<div class="col-xl-6">
					<div class="form-group">
						<label for="name">Name:<span class="text-danger">*</span> </label>
                             <input type="text" name="name" id="Name" class="form-control" placeholder="Enter Name">
						</label>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-xl-6">
					<div class="form-group">
						<label for="email">Email:<span class="text-danger">*</span> </label>
                             <input type="Email" name="email" id="Email" class="form-control" placeholder="Enter Email">
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6">
					<div class="form-group">
						<label for="password">Password:<span class="text-danger">*</span> </label>
                             <input type="Password" name="password" id="Password" class="form-control" placeholder="Enter Password">
						</label>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-xl-6 offset-lg-6 text-left">
                    <button type="submit" class="btn btn-success"> Submit </button>
                 </div>
             </div>
		</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script>
    	$(document).ready(function(){
    		$("#LOGIN").validate({
    			rules:{
    				name:{
    					required:true,
    					maxlength:30
    				},
    				email:{
    					required:true,
    					email:true,
    					maxlength:25
    				},
    				password:{
    					required:true,
    					minlength:5
    				}
    			},
    			message:{
    				name:{
    					required:"Name id required field",
    					maxlength:"Max length would be 30"
    				},
    				email:{
    					required:"Email is required",
    					email:"Email must be valid email address",
    					maxlength:"Email address length must be less than 25"
    				},
    				password:{
    					required:"Password is required",
    					minlength:"Password min length 5"
    				}
    			}
    		});
    	});
    </script>
</body>
</html>