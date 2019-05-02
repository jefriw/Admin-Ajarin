firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    window.location = 'admin/';

  } else {
    // No user is signed in.
  }
});

$(document).keypress(function(event){

    if(event.which == 13){
      login();
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
