<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: forms.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">


 <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="logo"></div>
<div class="login-block">
	<form action="" method="post">
    <h1>Login</h1>
    <input type="text" value="" placeholder="Username" id="username" name="username" />
    <input type="password" value="" placeholder="Password" id="password" name="password" />
    <button name="submit">Submit</button>
    <span><?php echo $error; ?></span>
</form>
</div>
</body>

</html>