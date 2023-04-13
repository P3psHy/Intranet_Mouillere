

function verifcontenu(){
  console.clear();
  
  fetch('js/annuaire.json')
  .then(response => response.json())
  .then(data => {
    const etablissement = data;

    //vider le comptenu de la div annuaire si elle a déjà éyé utilisé
    document.getElementById("annuaire").innerHTML = "";


    const nomGroupe = document.getElementById("listeRecherche").value;
    const nomPersonne = document.getElementById("recherche").value;

    const emailsDiv = document.getElementById("annuaire");

    const groupe1 = etablissement.groupes.find(groupe => groupe.nom === nomGroupe);

    if (groupe1) {
      console.log(groupe1.nom);

      //Récupère et ajoute le nom du Groupe
    

      const groupeNom = document.createElement("h2");
      groupeNom.textContent = groupe1.nom;
      groupeNom.id = "::titreGroupe";
      groupeNom.style.cssText ="margin-top:15px; color: #229B7E; font-family: Calibri;"
      emailsDiv.appendChild(groupeNom);

      if(groupe1.mail != " " || groupe1.telephone != " "){
        const infosGroupe ="Mail: " + groupe1.mail + " / Téléphone:" + groupe1.telephone;
        const emailElement = document.createElement("p");
        emailElement.textContent = infosGroupe;
        emailsDiv.appendChild(emailElement);
      }
      
      
      for (let j = 0; j < groupe1.personnes.length; j++) {
        const personne = groupe1.personnes[j];

        if (personne.nom.toLowerCase().includes(nomPersonne.toLowerCase())) {

          //Récupère et ajoute le Nom à la Div
          const nomElement = document.createElement("h3");
          nomElement.textContent = personne.nom;
          emailsDiv.appendChild(nomElement);

          //Récupère et ajoute le Mail et le Téléphone de la personne à la diuv
          const info = "Mail: " + personne.email + " / Téléphone: " + personne.telephone;
          const emailElement = document.createElement("p");
          emailElement.textContent = info;
          emailsDiv.appendChild(emailElement);


          console.log(personne.telephone);
          console.log(personne.email);
        }
      }




    }else{
        if(groupe1 == null){
          for (let i = 0; i < etablissement.groupes.length; i++) {
            const groupe = etablissement.groupes[i];
            console.log(groupe.nom);

            //Récupère et ajoute le nom du Groupe
            const groupeNom = document.createElement("h2");
            groupeNom.textContent = groupe.nom;
            groupeNom.id = "::titreGroupe";
            groupeNom.style.cssText ="margin-top:15px; color: #229B7E; font-family: Calibri;";
            emailsDiv.appendChild(groupeNom);

            var k=0;

            for (let j = 0; j < groupe.personnes.length; j++) {
              const personne = groupe.personnes[j];

              if (personne.nom.toLowerCase().includes(nomPersonne.toLowerCase())) {
                //Récupère et ajoute le Nom à la Div
                const nomElement = document.createElement("h3");
                nomElement.textContent = personne.nom;
                emailsDiv.appendChild(nomElement);

                //Récupère et ajoute le Mail et le Téléphone de la personne à la diuv
                const info = "Mail: " + personne.email + " / Téléphone: " + personne.telephone;
                const emailElement = document.createElement("p");
                emailElement.textContent = info;
                emailsDiv.appendChild(emailElement);
                
              }else{
                k++;
              }
            }
            //Vérifier si aucune personne ne contient les caractères de nomPersonne pour supprimer le Titre du groupe
            //"Si tout le groupe est vide, supprimer le titre du groupe"
            if(groupe.personnes.length == k){
              const dernierElement= emailsDiv.lastChild;
              emailsDiv.removeChild(dernierElement);

            }
          }
          
        }

    }

  })
  .catch(error => console.error(error))
    
}

 