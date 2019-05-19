firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    
    var user = firebase.auth().currentUser;

    if(user != null){
      var email_id = user.email;
      var conv = email_id.split("@");
      document.getElementById('masuk').innerHTML = "Hello, " + conv[0];
    }
    
  } else {
    // No user is signed in.
    window.location = "../";
  }
});

function edit() {
  var user = firebase.auth().currentUser;
  var newPassword = document.getElementById("v_password").value;

  user.updatePassword(newPassword).then(function() {
  // Update successful.
    window.alert("Password telah di ubah");
  }).catch(function(error) {
  // An error happened.
  });
}

function logout(){
  firebase.auth().signOut();
}
