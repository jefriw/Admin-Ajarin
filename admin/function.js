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

function logout(){
  firebase.auth().signOut();
}
