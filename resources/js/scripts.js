// On va attendre le chargement du doc

window.onload = () =>{

    // On va écouter la zone de texte
    let texte = document.querySelector("#texte")
    texte.addEventListener("keyup",verifEntree) // On vérifie qu'on appuie sur la touche "Entrée"

    // On va écouter le bouton valid

        let valid=document.querySelector("#valid")
        valid.addEventListener("click",ajoutMessage)


}

// Fonction vérifiant si Entrée est appuyé

function verifEntree(e){

    if(e.key=="Enter"){

        ajoutMessage();

    }

}

// Fonction envoyant le message en Ajax à un fichier ajoutMessage.php

function ajoutMessage() {

// On récupère le message
    let message=document.querySelector("#texte").value
        // On vérifie si message == vide

        if(message != ""){
            // On crée un objet js

            let donnees={}
            donnees["message"] = message
            console.log(donnees)



        }
}