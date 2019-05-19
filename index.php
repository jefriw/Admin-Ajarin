<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>

  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-app.js"></script>

  <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
  <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-firestore.js"></script>

  <script src="firebase.js"></script>
  <script src="login.js"></script>

<body>
<link href="admin/assets/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="admin/assets/js/bootstrap.min.js"></script>
<script src="admin/assets/js/jquery.min.js"></script>
<div id="sblm" class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img id="icon" alt="Icon" />
      <p>Login</p>
    </div>

    <!-- Login Form -->
      <input type="text" class="fadeIn second" placeholder="email" id="email">
      <input type="password" class="fadeIn third" placeholder="password" id="pword" onkeydown="enter()">
      <button class="button" onclick="login()">Login</button>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      
    </div>

  </div>
</div>
</body>
</html>

