// On attend le chargement du doc


window.onload=() -> {
	// On va chercher la zone de texte
	let texte = document.querySelector("#texte")
	texte.addEventListener("keyup",verifEntree)
	
	// On va chercher le bouton valid
	let valid = document.querySelector("#valid")
	valid.addEventListener("click",ajoutMessage)
}
// Verifie si on a appuyé sur la touche entrée

function verifEntree(event){
	
	if(event.key="Enter"){
		
		ajoutMessage();
	}
}