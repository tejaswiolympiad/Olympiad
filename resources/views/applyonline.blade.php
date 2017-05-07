<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Olympiad NGO</title>
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/css/applyonline.css') }}" />	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('public/js/jquery.min.js') }}" />	
	<link rel="stylesheet" href="{{ asset('public/js/bootstrap.min.js') }}" />	
	<link rel="stylesheet" href="{{ asset('public/js/angular.min.js') }}" />		

</head>
<body class="top-header-line">
	 <div class="container-fluid">
	<div class="container">
		<div class="row">
		</div>
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
		 <div class="col-sm-9">
			<div class="panel panel-primary" style="margin:20px;">
			<div class="panel-heading">
				<h3 class="panel-title">Apply Online</h3>
			</div>
			<div class="panel-body">
				<form>
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-3 col-sm-3">
						<label for="name">Name <span style="color:red;">* </span> </label>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<input type="text" class="form-control input-sm" id="fname" name="fname" placeholder="First Name" required>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<input type="email" class="form-control input-sm" id="mname" name="mname" placeholder="Middle Name" required>
						</div>

						<div class="form-group col-md-3 col-sm-3">
							<input type="text" class="form-control input-sm" id="lname"  name="lname"placeholder="Last Name" required>
						</div>
					</div>	
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-3 col-sm-3">
						<label for="name"> Father Name <span style="color:red;">* </span></label>
						</div>
						<div class="form-group col-md-9 col-sm-9">
							<input type="text" class="form-control input-sm" id="fathername"  name="fathername" placeholder="Father Name" required>
						</div>
					</div>		
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-3 col-sm-3">
						<label for="name"> Mother Name <span style="color:red;">* </span></label>
						</div>
						<div class="form-group col-md-9 col-sm-9">
							<input type="text" class="form-control input-sm" id="mothername" name="mothername" placeholder="Mother Name" required>
						</div>
					</div>	
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-3 col-sm-3">
						<label for="name">Date of Birth <span style="color:red;">* </span> </label>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<select class="form-control input-sm" id="date" name="date" required>
								<option>Select Date</option>
								@for ($i = 1; $i <= 31; $i++)
								<option>{{$i}}</option>									
								@endfor
							</select>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<select class="form-control input-sm" id="month" name="month" required>
								<option>Select Month</option>
								@for ($i = 1; $i <= 12; $i++)
								<option>{{$i}}</option>									
								@endfor
							</select>
						</div>

						<div class="form-group col-md-3 col-sm-3">
							<select class="form-control input-sm" id="year" name="year" required>
								<option>Select Year</option>
								@for ($i = 1970; $i <= 2030; $i++)
								<option>{{$i}}</option>									
								@endfor
							</select>
						</div>
					</div>	
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-3 col-sm-3">
						<label for="name">Gender <span style="color:red;">* </span> </label>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<select class="form-control input-sm" id="gender" name="gender" required>
								<option>Select Gender</option>
								<option>Male</option>	
								<option>Female</option>									
								
							</select>						
						</div>
						<div class="form-group col-md-3 col-sm-3">
						<label for="name">Religion <span style="color:red;">* </span> </label>
						</div>						
						<div class="form-group col-md-3 col-sm-3">
							<select class="form-control input-sm" id="religion" year="religion" required>
								<option>Select religion</option>
								<option>Hindu</option>	
								<option>Muslim</option>									
							</select>						
						</div>
					</div>	
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-3 col-sm-3">
						<label for="name">Category <span style="color:red;">* </span> </label>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<select class="form-control input-sm" id="category" name="category" required>
								<option>Select Category</option>
								<option>General</option>	
								<option>OBC</option>									
								
							</select>						
						</div>
						<div class="form-group col-md-3 col-sm-3">
						<label for="name">Nationality <span style="color:red;">* </span> </label>
						</div>						
						<div class="form-group col-md-3 col-sm-3">
							<select class="form-control input-sm" id="nationality" name="nationality"  disabled required>
								<option>Select religion</option>
								<option selected>Indian</option>	
								<option></option>									
							</select>						
						</div>
					</div>	
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-3 col-sm-3">
						<label for="name"> School Name <span style="color:red;">* </span></label>
						</div>
						<div class="form-group col-md-9 col-sm-9">
							<input type="text" class="form-control input-sm" id="schoolname"  name="schoolname" placeholder="School Name" required>
						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-3 col-sm-3">
						<label for="name">Class <span style="color:red;">* </span> </label>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<input type="text" class="form-control input-sm" id="class" name="class" placeholder="Class" required>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<input type="email" class="form-control input-sm" id="Section" name="section" placeholder="Section" required>
						</div>

						<div class="form-group col-md-3 col-sm-3">
							<input type="text" class="form-control input-sm" id="rno"  name="rno" placeholder="Roll No" required>
						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-3 col-sm-3">
						<label for="name">Subject Selection <span style="color:red;">* </span> </label>
						</div>
						 <div class="form-group col-md-2 col-sm-2">
						 <input type="checkbox" name="physics" value="physics"> Physics<br>
						 </div>
						 <div class="form-group col-md-2 col-sm-2">
						 <input type="checkbox" name="chemistry" value="chemistry"> Chemistry<br>
						 </div>
						 <div class="form-group col-md-2 col-sm-2">
						 <input type="checkbox" name="biology" value="biology"> Biology<br>
						 </div>
						 <div class="form-group col-md-2 col-sm-2">
						 <input type="checkbox" name="maths" value="maths"> Maths<br>
						 </div>
						 <div class="form-group col-md-2 col-sm-2">
						 <input type="checkbox" name="economics" value="economics"> Economics<br>
						 </div>
						 <div class="form-group col-md-2 col-sm-2">
						 <input type="checkbox" name="computers" value="computers"> Computers<br>
						 </div>						 
					</div>					
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-2 col-sm-2">
							<input type="submit" class="btn btn-lg btn-primary btn-block btn-signin" value="Submit" />
						</div>
						<div class="form-group col-md-2 col-sm-2">
							<input type="button" class="btn btn-lg btn-primary btn-block btn-signin" value="Cancel" />
						</div>	
						<div class="form-group col-md-2 col-sm-2">
							<input type="reset" class="btn btn-lg btn-primary btn-block btn-signin" value="Clear" />
						</div>							
					</div>
				</form>
			</div>		
	   </div>
	   </div>
		<div class="col-sm-3">
			<div class="card card-container">
				<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
				<p id="profile-name" class="profile-name-card"></p>
				<p>Anurag K</p>				
				<p>loginuser@gmail.com</p>
			</div>
		</div>
</div>	
<div class="row">
<div class="container text-left" style="border: 1px solid #6891a2;">
  <h3 style="text-align:center;">Instructions</h3>
<li>Application Form Fee is Rs.1060/- and it is Non-Refundable.</li> 
<li>All fields marked with * need to be compulsorily filled.</li> 
<li>An Online Application Number will be displayed, once you successfully submit the online form by making an online payment.
<li>This application form is common for all campuses.</li> 
<li>This is just an application form and does not entitle you to appear for the SRMJEEE (UG) for Engineering & Technology Courses / SRMHSEE (UG) for Medicine & Health Sciences Courses. You need to separately book the slots for SRMJEEE (UG)  for Engineering & Technology Courses / SRMHSEE (UG) for Medicine & Health Sciences Courses as per availability.</li> 
<li>Please keep scanned copies handy of your Coloured Photograph, Signature, 10th Class Marksheet & 12th Class Marksheet (If passed) for uploading . Upload size is limited to 500 KB only.  </li> 
<li>Entrance Examination for M.Tech course will be conducted only on 01-May-2017.</li> 
</div>
</div>
<div class="row" style="height:10px"> </div>	
	
<div class="row">
<div class="container text-center" style="border: 1px solid #6891a2;">
  <h3>How We Work ?</h3>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span><i class="fa fa-pencil-square-o fa-5x" aria-hidden="true" style="color:#6891a2;"></i></span>
      <h4>Fill Application Form</h4>
    </div>
    <div class="col-sm-4">
      <span><i class="fa fa-file-text-o fa-5x" aria-hidden="true" style="color:#6891a2;"></i></span>
      <h4>Upload Important Documents</h4>
    </div>
    <div class="col-sm-4">
      <span ><i class="fa fa-credit-card fa-5x" aria-hidden="true" style="color:#6891a2;"></i></span>
      <h4>One-click Payment Gateway</h4>
    </div>
    </div>
    <br><br>

</div>
</div>


</body>
</html>	
