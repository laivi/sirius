
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyCebkSI0S5no1hiHQDwP1K-Co-TX_sTRzo", 
        authDomain: "my-p-9d3e3.firebaseapp.com",
        databaseURL: "https://my-p-9d3e3.firebaseio.com",
        projectId: "my-p-9d3e3",
        storageBucket: "my-p-9d3e3.appspot.com",
        messagingSenderId: "585837304892"
      };
      firebase.initializeApp(config);

      var database = firebase.database();

      var bigOne = document.getElementById('bigOne');

      var dbRef = firebase.database().ref().child('ocorrencias');

      dbRef.on('value', snap => {bigOne.innerText = JSON.stringify(snap.val(),null, 3);
      });

      dbRef.on("child_changed", function(snapshot) {
		  var changedPost = snapshot.val();
		  console.log("The updated post title is " + changedPost.title);
		  var audio = new Audio("{{ asset('bip.mp3') }}"); // não funciona, sinal sonoro para sinalizar uma nova ocorrencia
		  audio.play();
		});

   