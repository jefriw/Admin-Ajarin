firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    document.getElementById('sblm').style.display = "none";
    document.getElementById('udh').style.display = "flex";

    var user = firebase.auth().currentUser;

    if(user != null){
      var email_id = user.email;
      document.getElementById('logg').innerHTML = email_id + " Berhasil loggin";
    }
  } else {
    // No user is signed in.
    document.getElementById('sblm').style.display = "flex";
    document.getElementById('udh').style.display = "none";

  }
});

function login(){
  // window.alert("test");
  var userEmail = document.getElementById('email').value;
  var userPass = document.getElementById('pword').value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    // ...

    window.alert("Error : " + errorMessage);
  });
}

function logout(){
  firebase.auth().signOut();
}