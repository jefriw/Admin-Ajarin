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
      <a class="underlineHover" href="register.php">Register</a>
    </div>

  </div>
</div>
<div id="udh">
      <input type="text" class="fadeIn second" placeholder="email" id="email">
      <p id="logg">Berhasil login</p>
      <input type="password" class="fadeIn third" placeholder="password" id="pword">
      <button class="button" onclick="logout()">Logout</button>
</div>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAP_lJoCoBzIyiiM58yU76JOHzUxKa_wwE",
    authDomain: "ajarin-f515.firebaseapp.com",
    databaseURL: "https://ajarin-f515.firebaseio.com",
    projectId: "ajarin-f515",
    storageBucket: "ajarin-f515.appspot.com",
    messagingSenderId: "670749567079"
  };
  firebase.initializeApp(config);
</script>

<script src="login.js"></script>
</body>
</html>

