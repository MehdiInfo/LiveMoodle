window.onload=()=>{

	let texte = document.querySelector("#texte")
	texte.addEventListener("keyup",verifEntree)

	let valid=document.querySelector("#valid")
	valid.addEventListener("click",ajoutMessage)
}

function verifEntree(e){

	if(e.key=="Entrer"){
		ajoutMessage();
	}
}

function ajoutMessage() {

	if(texte!=""){

			let message=document.querySelector("#texte").value
			console.log(message)
	}

}