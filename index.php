<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<script type="text/javascript">
	function act(btn)
	{
		var username = document.getElementById('username').value;
		var pass = document.getElementById('password').value;
		var url = "action.php?username="+username+"&pass="+pass+"&btn="+btn;

		location.href=url;
	}
</script>
<body>
<link href="admin/assets/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="admin/assets/js/bootstrap.min.js"></script>
<script src="admin/assets/js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="" id="icon" alt="Icon" />
      <p>Login</p>
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="username" class="fadeIn second" name="login" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="button" name="btn" id="btn" class="fadeIn fourth" value="Login" onclick="act(this.value)">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="register.php">Register</a>
    </div>

  </div>
</div>
</body>
</html>

