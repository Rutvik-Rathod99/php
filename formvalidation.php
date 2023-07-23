<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
#define empty variable
$name_err = $email_err = $mob_err = $pass_err = $cpass_err =$comment_err = $gen_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
if(empty($_POST['name'])){
$name_err = "Enter Name";
}else if(!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
$name_err = "only letters and white space is allowed";
}

if(empty($_POST['email'])){
$email_err = "Enter Email";
}else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
$email_err = "Enter valid Email";
}
if(empty($_POST['monum'])){
$mob_err = "Enter mobile number";
}else if(!preg_match('/^[0-9]{10}$/',$_POST['monum'])) {
$mob_err = "only 10 digits number";
}
if(empty($_POST['pass'])){
$pass_err = "Enter Password";
}else if ((strlen($_POST["pass"]) < 2) || (strlen($_POST["pass"]) > 8)){
$pass_err = "Password length must be between 2 to 8";
}

if(empty($_POST['cpass'])){
$cpass_err = "Enter confirm Password";
}
if($_POST['pass'] != $_POST['cpass']){
$cpass_err = "Password and confirm Password not matched";
}
if(empty($_POST['comment'])){
$comment_err = "Enter comments";
}
if(empty($_POST['gen'])){
$gen_err = "Select Gender";
}
}
?>

<div class="container">
<form method="POST">
<label>Name:</label><br>
<input type="text" name="name" class="name">
<span class="error"><?php echo $name_err; ?></span>
</span>
<br><br>
<label>Email:</label><br>
<input type="text" name="email" class="email">
<span class="error"><?php echo $email_err; ?></span>
<br><br>
<label>Mobile number:</label><br>
<input type="text" name="monum" class="monum">
<span class="error"><?php echo $mob_err; ?></span>
<br><br>

<label>Password:</label><br>
<input type="text" name="pass" class="pass">
<span class="error"><?php echo $pass_err;
?></span>
<br><br>
<label>Confirm Password:</label><br>
<input type="text" name="cpass"
class="cpass">
<span class="error"><?php echo $cpass_err;
?></span>
<br><br>
<label>Comment:</label><br>
<textarea rows="5" cols="36"
name="comment"></textarea>
<span class="error"><?php echo
$comment_err; ?></span><br><br>

<label>Gender:</label><br>
<input type="radio" name="gen" class="gen">Male
<input type="radio" name="gen" class="gen">Female
<input type="radio" name="gen" class="gen">Others
<span class="error"><?php echo $gen_err; ?></span>
<br><br>
<input type="submit" value="submit" class="sub">
</form>
</div>
</body>
</html>