// Initialize Firebase
var json_fire;
var config = {
	apiKey: "AIzaSyBsaoO_dfCrgQ7jYXHMd11pIbo_PleicwI",
	authDomain: "sirius-666.firebaseapp.com",
	databaseURL: "https://sirius-666.firebaseio.com",
	projectId: "sirius-666",
	storageBucket: "sirius-666.appspot.com",
	messagingSenderId: "178245427359"
};

firebase.initializeApp(config);

var database = firebase.database();
var banco = firebase.database().ref('ocorrencias');