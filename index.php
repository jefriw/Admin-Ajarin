<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<link href="admin/assets/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="admin/assets/js/bootstrap.min.js"></script>
<script src="admin/assets/js/jquery.min.js"></script>
<!-- firebase -->
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script src="firebase.js"></script>
<script src="login.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="sblm" class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="ajarin.svg" id="icon" alt="Icon" />
      <p>Login</p>
    </div>

    <!-- Login Form -->
      <input type="text" class="fadeIn second" placeholder="email" id="email">
      <input type="password" class="fadeIn third" placeholder="password" id="pword">
      <button class="button" onclick="login()">Login</button>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      
    </div>

  </div>
</div>
</body>
</html>

