<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<p>THIS PAGE WILL BE FOR MY FORM IN INPUTING DATA FOR MY BLOGS THAT I POST</p>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>