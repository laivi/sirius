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

var dbRef = firebase.database().ref('ocorrencias');
var aten_ag = firebase.database().ref('fila_central/aguardando');
var aten_aten = firebase.database().ref('fila_central/atendendo');

aten_ag.on('child_added', snap => {
 	var key = snap.key;
 	var value = snap.val();
	dbRef.child(key).on('value', snap2 => { 
		if(value == "true"){
			console.log(snap2.key.toString());
		   	var object = snap2.val();
		   	var list = document.getElementById("list");    
			var new_li = document.createElement("LI");       
			new_li.setAttribute('class', 'clearfix btn btn-defoult');
			new_li.setAttribute('style', 'width: 100%');
			new_li.setAttribute('id', snap.key);
			new_li.setAttribute('onClick', 'select_li('+JSON.stringify(object)+','+JSON.stringify(snap2.key)+');');
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
			$.playSound("http://toquesparabaixar.com/download2/iPhone_SMS_v2_www.ToquesParaBaixar.com.mp3");
			contarElementos();
		}	
	});
	
});

// verifica quando a ocorrencia sair da fila de espera.
aten_ag.on("child_changed", snap => {
   	var deletedPost = snap.key;
   	var valuePost = snap.val();
   	if(valuePost == "false"){
	   	var element = document.getElementById(deletedPost);
	   	element.parentNode.removeChild(element);
	    contarElementos();
	}
});

function accept_oco(key){
	console.log(key);
	aten_ag.update({[key]:"false"});
	aten_aten.update({[key]:"true"});
}
function stop_oco(key){
	console.log(key);
	aten_ag.update({[key]:"false"});
	aten_aten.update({[key]:"false"});
}




