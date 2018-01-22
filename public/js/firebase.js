// Initialize Firebase
var json_fire;
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

var dbRef = firebase.database().ref('ocorrencias');
var fila = firebase.database().ref('fila_central/aguardando');

fila.on('child_added', snap => {
 	var key = snap.key;
 	var value = snap.val();
 	if(value == true){
	 	dbRef.child(key).on('value', snap2 => { 
		   	var object = snap2.val();
		   	var list = document.getElementById("list");    
			var new_li = document.createElement("LI");       
			new_li.setAttribute('class', 'clearfix btn btn-defoult');
			new_li.setAttribute('style', 'width: 100%');
			new_li.setAttribute('id', snap.key);
			new_li.setAttribute('onClick', 'select_li('+JSON.stringify(object)+','+snap2.key+');');
			var div_avo = document.createElement("DIV");
			div_avo.setAttribute('class', 'feed d-flex justify-content-between');
			var div_pai = document.createElement("DIV");
			div_pai.setAttribute('class', 'feed-body d-flex justify-content-between');
			var img = document.createElement('IMG');
			img.setAttribute('src', 'img/avatar-icon.png');
			img.setAttribute('alt', 'person');
			img.setAttribute('class', 'img-fluid rounded-circle feed-profile');
			var div_filha = document.createElement("DIV");
			div_filha.setAttribute('class', 'content');
			var strong_nome = document.createElement("STRONG");
			strong_nome.innerText = object.solicitante;
			var small_telefone = document.createElement("SMALL");
			small_telefone.innerText = object.contato.telefone;
			var div_neta = document.createElement("DIV");
			div_neta.setAttribute('class', 'full-date');
			var small_hora = document.createElement("SMALL");
			small_hora.innerText = object.hora;
			var div_tempo = document.createElement("DIV");
			div_tempo.setAttribute('class', 'date');
			new_li.appendChild(div_avo); 
			div_avo.appendChild(div_pai);
			div_avo.appendChild(div_tempo);
			div_pai.appendChild(img);
			div_pai.appendChild(div_filha);
			div_filha.appendChild(strong_nome);
			div_filha.appendChild(small_telefone);
			div_filha.appendChild(div_neta);
			div_neta.appendChild(small_hora);
			list.insertBefore(new_li, list.childNodes[0]);  // Insert <li> before the first child of <ul>
			$.playSound("http://www.noiseaddicts.com/samples_1w72b820/3724.mp3");
			contarElementos();
		});
	}
});

// verifica quando a ocorrencia sair da fila de espera.
fila.on("child_changed", snap => {
   	var deletedPost = snap.key;
   	var valuePost = snap.val();
   	if(valuePost == false){
	   	var element = document.getElementById(deletedPost);
	   	element.parentNode.removeChild(element);
	    contarElementos();
	}
});






