<?php 
    //inlcude file
    include_once('connection.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration_Form</title>
	<link rel="stylesheet" type="text/css" href="./style.css">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php if(isset($_SESSION['msg'])):?>
        <div class="msg">
            <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
        </div>
    <?php endif ?>
	<form  method="post" action="connection.php" style="padding-left: 30px;">
		<h1> Registraion Form </h1>

		<input type="text" name="user_name" placeholder="User Name" required><br><br>
		
		<input type="email" name="email_id" placeholder="Email" required><br><br>
		
		<input type="Password" name="password" placeholder="Password" required>
		
		<input type="Password" name="cnfrm_pass" placeholder="Password" required>
		
		<br><br>
		
		<h1>Personal Details</h1>
		
		<br><br>

		<input type="text" name="first_name" placeholder="First Name" required>
		
		<input type="text" name="last_name" placeholder="Last Name"required><br><br>
	       	
	   	<input id="datepicker" width="276" /  name="dob" placeholder="Birth_Date" required>
   			 <script>
        		$('#datepicker').datepicker({ });
    		</script>
	   
	    <br><br>

	    <label>Gender </lable>
	   	<div style="display: inline;">
	   		<input type="radio" name="gender" value="male">male
	   		<input type="radio" name="gender" value="female">female
	   		<input type="radio" name="gender" value="other">other
	   	</div><br><br><br>
	   	    
	    <textarea name="address" placeholder="Address" required></textarea>

	    <label>Country</label>
	    <select  name="country" required>
			<option  value="India">India</option>
			<option  value="France">France</option>
			<option  value="Other">Other</option>
		</select>	     <br><br>

	   	
	   	

		<label>Status</	<label>
		<div style="display: inline;">
			<input type="radio" name="status" value="married">married
			<input type="radio" name="status" value="unmarried">unmarried
			<input type="radio" name="status" value="Divorced">Divorced 
		</div><br><br><br>

		<input type="number" name="ph_no" size="10" placeholder="Phone_Number" required><br><br><br>

		<label>Skill</label>
		 <div style="display: inline;">
			<input type="checkbox" name="skill" value="HTML">HTML
			<input type="checkbox" name="skill" value="CSS">CSS
			<input type="checkbox" name="skill" value="PHP">PHP 
			<input type="checkbox" name="skill" value="JS">JS
			<input type="checkbox" name="skill" value="MySql">MySql
			<input type="checkbox" name="skill" value="Bootstrap">Bootstrap<br><br>
		 </div>
		
		<input type="text" name="one_word" placeholder="Describe yourself in ONE word" required>
		
		<textarea name="hobby" placeholder="Hobby"></textarea><br><br>

		<textarea  name="describe_self" placeholder="Tell About Your Self"></textarea>

		<textarea  name="thinking" placeholder="What you think you can do as a programmer" required></textarea>
		<br><br>
		
		<input type="checkbox" value="" required>terms and condition<br><br>
		
		<button  type="submit" name="save" >Save</button>
	</form>

</body>
</html>