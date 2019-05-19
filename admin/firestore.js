// Your web app's Firebase configuration
	var firebaseConfig = {
	apiKey: "AIzaSyAP_lJoCoBzIyiiM58yU76JOHzUxKa_wwE",
	authDomain: "ajarin-f515.firebaseapp.com",
	databaseURL: "https://ajarin-f515.firebaseio.com",
	projectId: "ajarin-f515",
	storageBucket: "ajarin-f515.appspot.com",
	messagingSenderId: "670749567079",
	appId: "1:670749567079:web:47f5ed922a2f33ae"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);
	let db = firebase.firestore();

	db.collection("users").where("profession", "==", "Guru").get().then(function(querySnapshot) {
	    querySnapshot.forEach(function(doc) {
	        // doc.data() is never undefined for query doc snapshots
	        console.log(doc.id, " => ", doc.data());
	    });
	});