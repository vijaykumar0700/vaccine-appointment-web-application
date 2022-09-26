<?php
include('incl/header.php');
if(isset($_POST['getotp']))
{
	$mobile_no = $_POST['UserMobile'];
	$getotp = $class->getotp($mobile_no);
}
?>
<body>
<!-- Background image -->
<div class="bg-image" style="background-image: url('assets/img/h3.jpg'); height: 100vh">
    <div class="limiter">
		<div class="container-login100  ">
			<div class="wrap-login100">
				<form  action="" method="POST">
					<span class="login100-form-title p-b-34 p-t-27">Enter mobile number</span>
				        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
							<input class="mdl-textfield__input" type="tel"name="UserMobile"  maxlength="10" value="" 
							pattern="-?[0-9]*(\.[0-9]+)?" id="text5" >
							<label class="mdl-textfield__label" for="text5">Enter Mobile Number</label>
							<span class="mdl-textfield__error">Number required!</span>
					    </div>
					    <br>
		     	  	    <div class="container-login100-form-btn">
					        <button type="submit" name="getotp" class="login100-form-btn"> Get OTP </button>
			            </div>
				</form>
			</div>   
        </div>	
	</div>		
</div>	
<?php 
include ('incl/footer2.php');
?>
