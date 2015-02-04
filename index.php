<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Login - Mega File Hosting</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="favicon.png">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="js/rainbows.js"></script>
	<link type="text/css" rel="stylesheet" href="css/login.css" media="screen" />
<script>
	$(document).ready(function(){
	$("#submit1").hover(
	function() {
	$(this).animate({"opacity": "0"}, "slow");
	},
	function() {
	$(this).animate({"opacity": "1"}, "slow");
	});
 	});
</script>
</head>
<body style="background:url('images/body6.png') fixed center">
	<div id="wrapper">
			<div id="wrappertop"></div>
		<div id="wrappermiddle">
			<h2>Login</h2>
			<form action='proses/chklogin.php' method='post'>
			<div id="username_input">
				<div id="username_inputleft"></div>
				<div id="username_inputmiddle">
					<input required type="text" name="uname" id="url" placeholder="Username">
					<img id="url_user" src="images/mailicon.png" alt="">
				</div>
				<div id="username_inputright"></div>
			</div>
			<div id="password_input">
				<div id="password_inputleft"></div>
				<div id="password_inputmiddle">
					<input required type="password" name="pswd" id="url" placeholder='Your Password'/>
					<img id="url_password" src="images/passicon.png" alt="">
				</div>
				<div id="password_inputright"></div>
			</div>
			<div id="submit">
				<input type="image" src="images/submit_hover.png" id="submit1" value="Login">
				<input type="image" src="images/submit.png" id="submit2" value="Login">
			</div>
			</form>
			<div id="links_left">
			<a href="forgot.php">Forgot your Password?</a>
			</div>
			<div id="links_right"><a href="register.php">Not a Member Yet?</a></div>
		</div>
		<div id="wrapperbottom"></div>
		</div>
	</div>

</body>
</html>

