<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require_once("connection.php");
if (isset($_POST['register'])){
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$grade = $_POST['grade'];
	$high_school = $_POST['high_school'];
	$email = $_POST['email'];
	// $interests= $_POST['interests'];
		// if(!empty($_POST['interests'])){
		// 	$interests = implode(",",$_POST['interests']);
		// 	$checkEntries = mysqli_query($con, "SELECT * FROM users");
		// 	if(mysqli_num_rows($checkEntries)== 0){
		// 		mysqli_query($con,"INSERT INTO users(interests) VALUES('".$interests."')");
		// 	}else{
		// 		mysqli_query($con,"UPDATE interests SET user='".$interests."'");
		// 	}
		// }



	$q= "INSERT INTO `users`
(`id`, `user_name`, `password`, `name`, `grade`, `high_school`, `email`)	VALUES('', '".$user_name."', '".$password."', '".$name."','".$grade."','".$high_school."','".$email."') "   ;

$r = mysqli_query($con, $q);

if ($r) {
header("location:login.php");
} else{
echo $q;
}}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Spark Joy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="blu.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->

	<div class="main-w3layouts wrapper">
		<h3>SparkJoy</h3><br><br><br><h1>Sign-Up</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">

				<form action="" method="post">
					<input class="input" type="text" name="name" id="name" placeholder= "Name" required=""><br><br>
					<input class="input" type="text" name="grade" id="grade" placeholder="Grade" required=""><br>
					<br><input class="input" type="text" name="high_school" id="high_school" placeholder="High School" required=""><br><br>
					<input class="input" type="email" name="email" id="email" placeholder="Email" required="" ><br><br>
					<input class="input" type="text" name="user_name" id="user_name" onkeyup="check_user()" placeholder="Username" required="" >
					<div id = "checking"></div> <br><br>
					<input class="input" type="password" name="password" id="password" placeholder="Password" required="" >



					<style></style>

			<div class="wthree-text">
						<label class="anim">
							<h1><b> Interests </b></h1><br><br>
							<div class="newspaper">
							<div style="float: right; width: 85%;">

									<ul>

										<!-- $checked_arr=array();
										$fetchInt = mysqli_query($con, "SELECT * FROM users");
										if(mysqli_num_rows($fetchInt)>0){
										$result = mysqli_fetch_assoc($fetchInt);
										$checked_arr = explode(",",$result['interests'])	;
										}

										$users_arr = array(
											"Accounting","Agriculture");
											foreach($users_arr as $interests){
												$checked = "";
												if(in_array($interests,$checked_arr)){
													$checked = "checked";
												}
												echo '<input type="checkbox" name="interests[]" value="'.$interests.'" '.$checked.'>'.$interests."<br>";
											} -->



							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Accounting"><label><font size="+1">Accounting</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Agriculture"><label><font size="+1>">Agriculture</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Animal Sciences" ><label ><font size="+1">Animal Sciences</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Anthropology" ><label><font size="+1>">Anthropology</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Architecture" ><label ><font size="+1>">Architecture</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Art" ><label ><font size="+1>">Art</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Astronomy" ><label ><font size="+1>">Astronomy</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Athletic Training" ><label ><font size="+1>">Athletic Training</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Biblical Studies" ><label><font size="+1>">Biblical Studies</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Biology"><label ><font size="+1>">Biology</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Business" value="Business" id="Business" /><label for="Interest"><font size="+1>">Business</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Chemistry" value="Chemistry" id="Chemistry" /><label for="Interest"><font size="+1>">Chemistry</label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Child Development" value="Child Development" id="Child Development" /><label for="Interest"><font size="+1>">Child Development</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Cooking" value="Cooking" id="Cooking" /><label for="Interest"><font size="+1>">Cooking</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="interests[]" value="Computer Science" /><label ><font size="+1>">Computer Science</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Criminology" value="Criminology" id="Criminology" /><label for="Interest"><font size="+1>">Criminology</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Dance" value="Dance" id="Dance" /><label for="Interest"><font size="+1>">Dance</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Doctor" value="Doctor" id="Doctor" /><label for="Interest"><font size="+1>">Doctor</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Economics" value="Economics" id="Economics" /><label for="Interest"><font size="+1>">Economics</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Education" value="Education" id="Education" /><label for="Interest"><font size="+1>">Education</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="English" value="English" id="English" /><label for="Interest"><font size="+1>">English</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Engineering" value="Engineering" id="Engineering" /><label for="Interest"><font size="+1>">Engineering</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Fashion" value="Fashion" id="Fashion" /><label for="Interest"><font size="+1>">Fashion</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Film" value="Film" id="Film" /><label for="Interest"><font size="+1>">Film</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Gaming" value="Gaming" id="Gaming" /><label for="Interest"><font size="+1>">Gaming</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="History" value="History" id="History" /><label for="Interest"><font size="+1>">History</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Language Studies" value="Language Studies" id="Language Studies" /><label for="Interest"><font size="+1>">Language Studies</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Law" value="Law" id="Law" /><label for="Interest"><font size="+1>">Law</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Mathematics" value="Mathematics" id="Mathematics" /><label for="Interest"><font size="+1>">Mathematics</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Medicine" value="Medicine" id="Medicine" /><label for="Interest"><font size="+1>">Medicine</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Modeling" value="Modeling" id="Modeling" /><label for="Interest"><font size="+1>">Modeling</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Music" value="Music" id="Music" /><label for="Interest"><font size="+1>">Music</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Nursing" value="Nursing" id="Nursing" /><label for="Interest"><font size="+1>">Nursing</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Nutrition" value="Nutrition" id="Nutrition" /><label for="Interest"><font size="+1>">Nutrition</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Philosophy" value="Philosophy" id="Philosophy" /><label for="Interest"><font size="+1>">Philosophy</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Photography" value="Photography" id="Photography" /><label for="Interest"><font size="+1>">Photography</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Physics" value="Physics" id="Physics" /><label for="Interest"><font size="+1>">Physics</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Political Science" value="Political Science" id="Political Science" /><label for="Interest"><font size="+1>">Political Science</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Psychology" value="Psychology" id="Psychology" /><label for="Interest"><font size="+1>">Psychology</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Sculpture" value="Sculpture" id="Sculpture" /><label for="Interest"><font size="+1>">Sculpture</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Singing" value="Singing" id="Singing" /><label for="Interest"><font size="+1>">Singing</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Sociology" value="Sociology" id="Sociology" /><label for="Interest"><font size="+1>">Sociology</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Teaching" value="Teaching" id="Teaching" /><label for="Interest"><font size="+1>">Teaching</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Visual" value="Visual" id="Visual" /><label for="Interest"><font size="+1>">Visual</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Writing" value="Writing" id="Writing" /><label for="Interest"><font size="+1>">Writing</font></label></span><br/>
							<span style="white-space: nowrap;"><input type="checkbox" name="Writing" value="Writing" id="Writing" /><label for="Interest"><font size="+1>">Youtube</font></label></span><br/>
							</div>

									</ul>





						</label>
						<div class="clear"> </div>
						</div>
						<input type= "submit" id="register" name="register" value= "SIGNUP" />

					</form>
					<p>Already have an Account? <a href="login.php"> Login Here!</a></p>
				</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2019 GWC. All rights reserved | Design by Stela,Paola,Chloe,and Joy<a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>







<script src= "sub_file/jquery-3.1.1.min.js"></script>

<script>
document.getElementById("register").disabled=true;
function check_user(){
var user_name=document.getElementById("user_name").value;
// Here we will send the data t ouser_check.php file

$.post("sub_file/user_check.php",
{
user:user_name
},
//in return we will recieve data in this function
function(data,status){
if(data=='<p style = "color:red">User already registered</p>'){
document.getElementById("register").disabled=true;
}else{
document.getElementById("register").disabled=false;
}
document.getElementById("checking").innerHTML = data;
}
);
}
	</script>


</body>
</html>
