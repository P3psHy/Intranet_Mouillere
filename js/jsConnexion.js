function verifUsername(){
    const username = document.getElementById("username");
    const errorUsername = document.getElementById("erreurUsername");

    if(!(/^[a-z]+\.[a-z]+$/.test(username.value))){
        
        if(errorUsername){
            document.getElementById("erreurUsername").remove();
        }

        var error = document.createElement("p")
        error.textContent="Nom d'utilisateur incorrect, veuillez utiliser ce format: prenom.nom";
        error.setAttribute('id', 'erreurUsername');
        error.style.cssText="color: red";

        username.parentNode.appendChild(error, username);
        console.log('error');
    }else{
        console.log('ok');
        if(errorUsername){
            document.getElementById("erreurUsername").remove();
        }
        

    }


}