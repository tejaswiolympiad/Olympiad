<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Olympiad</title>
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/login.css') }}" />  
  <script src="{{ asset('public/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>	
  <script src="{{ asset('public/js/angular.min.js') }}"></script>	  
	<body class="top-header-line">
		<div class="container">
		<div class="row">
		  <div class="col-sm-4">
			  <div class=" media-left" >
				  <a href="{{url('/')}}">
				  <img class="logo" src="{{asset('public/images/logo.png')}}" class="img-responsive media-object" alt="Tejaswi Olympiad" title="Tejaswi Olympiad">
				  </a>
			  </div>
		  </div>
		  <div class="col-sm-4">
		  <div class="wrap-info">
			  <h1 class="animated fadeInDown">Tejaswi Olympiad</h1>
			  <p style="padding:0 7em;">Learn, Register,Join</p>
		  </div>
		  </div>
		  <div class="col-sm-4"></div>
		</div>		
			<div class="row">
<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">School Registration Form</h3>
	</div>
<div class="panel-body">
    <form>
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-1 col-sm-1">
            <label for="name">Name*	</label>
            </div>
            <div class="form-group col-md-3 col-sm-3">
            <input type="text" class="form-control input-sm" id="name" placeholder="First Name">
            </div>
            <div class="form-group col-md-1 col-sm-1">
            <label for="name">Middle Name*	</label>
            </div>
            <div class="form-group col-md-3 col-sm-3">
            <input type="text" class="form-control input-sm" id="middlename" placeholder="Middle Name">
            </div>
            <div class="form-group col-md-1 col-sm-1">
            <label for="name">Last Name*	</label>
            </div>
            <div class="form-group col-md-3 col-sm-3">
            <input type="text" class="form-control input-sm" id="lastname" placeholder="Last Name">
            </div>
            </div>
            <div class="col-md-12 col-sm-12">
	         <div class="form-group col-md-1 col-sm-1">
            <label for="name">School Name*</label>
            </div>
            <div class="form-group col-md-11 col-sm-11">
            <input type="text" class="form-control input-sm" id="schoolname" placeholder="School Name">
            </div>
            </div>
            <div class="col-md-12 col-sm-12">
	         <div class="form-group col-md-1 col-sm-1">
            <label for="name">School address*	</label>
            </div>
            <div class="form-group col-md-11 col-sm-11">
            
            <div class="form-group">
            <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
        
            </div>
            </div>
            <div class="col-md-12 col-sm-12">
	         <div class="form-group col-md-1 col-sm-1">
            <label for="name">School  Contact*</label>
            </div>
            <div class="form-group col-md-5 col-sm-5">
            <input type="text" class="form-control input-sm" id="schoolcontact" placeholder="School  Contact">
            </div>
            <div class="form-group col-md-1 col-sm-1">
            <label for="name">Email*	</label>
            </div>
            <div class="form-group col-md-5 col-sm-5">
            <input type="text" class="form-control input-sm" id="email" placeholder="Email">
            </div>
            </div>
            <div class="col-md-12 col-sm-12">
         	<div class="form-group col-md-1 col-sm-1">
            <label for="name">Controller	</label>
            </div>
            <div class="form-group col-md-5 col-sm-5">
            <input type="text" class="form-control input-sm" id="controller" placeholder="Controller">
            </div>
            <div class="form-group col-md-1 col-sm-1">
            <label for="name">Contact</label>
            </div>
            <div class="form-group col-md-5 col-sm-5">
            <input type="text" class="form-control input-sm" id="contact" placeholder="Contact">
            </div>
            </div>
           
            <div class="col-md-12 col-sm-12">
         	<div class="form-group col-md-1 col-sm-1">
            <label for="name">Administrator Name</label>
            </div>
            <div class="form-group col-md-5 col-sm-5">
            <input type="text" class="form-control input-sm" id="administratorname" placeholder="Administrator Name">
            </div>
</div>
            
            
        
</div>

</div>
			</div>
		</div>
	</div>	
</body>

</html>		