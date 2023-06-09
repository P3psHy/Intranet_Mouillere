var check1=false;
var check2=false;
var check3=false;

function verifDateDebut(){
    const dateDeb = document.getElementById("dateDebut");
    const dateDebut = new Date(document.getElementById("dateDebut").value);
    const checkIfElementExist = document.getElementById("errorDateDebut");

    var q = new Date();
    var date = new Date(q.getFullYear(),q.getMonth(),q.getDate());

    if(dateDebut < date){
        
        if(checkIfElementExist){
            checkIfElementExist.remove();
        }

        var error = document.createElement("p")
        error.textContent="Date incorrect ! Veuillez saisir la date du jour ou une date ultérieur.";
        error.setAttribute('id', 'errorDateDebut');
        error.style.cssText="color: red";

        dateDeb.parentNode.appendChild(error, dateDeb);

        check1=false;
        verifButtonViewVehicle();
    }else{
        if(checkIfElementExist){
            checkIfElementExist.remove();
        }
        check1=true;
        verifButtonViewVehicle();
    }
}


function verifDateFin(){

    const dateDebut = new Date(document.getElementById("dateDebut").value);
    const dateFin = new Date(document.getElementById("dateFin").value);
    const dateEnd = document.getElementById("dateFin");
    const checkIfElementExist = document.getElementById("errorDateFin");


    var Difference_In_Time = dateFin.getTime() - dateDebut.getTime();
    var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

    if(Difference_In_Days<0 || Difference_In_Days>7){

        if(checkIfElementExist){
            checkIfElementExist.remove();
        }

        var error = document.createElement("p")
        error.textContent="'Date incorrect ! La date de fin ne doit ni être antérieur ni excéder 7 jour après la date de réservation.";
        error.setAttribute('id', 'errorDateFin');
        error.style.cssText="color: red";

        dateEnd.parentNode.appendChild(error, dateEnd);

        check2=false;
        verifButtonViewVehicle();
    }else{
        
        if(checkIfElementExist){
            checkIfElementExist.remove();
        }
        check2=true;
        verifButtonViewVehicle();
    
    }

}

function verifButtonViewVehicle(){

    if(check1 && check2){
        document.getElementById('voirVehicules').disabled = false;
    }else{
        document.getElementById('voirVehicules').disabled = true;
    }
}


function verifVehicule(){

    const listeVehicule = document.getElementById("listeVehicule");
    const checkIfElementExist = document.getElementById("errorVehicule");


    if(listeVehicule.value == "default"){

        if(checkIfElementExist){
            checkIfElementExist.remove();
        }

        var error = document.createElement("p")
        error.textContent="Veuillez sélectionner un véhicule.";
        error.setAttribute('id', 'errorVehicule');
        error.style.cssText="color: red";

        listeVehicule.parentNode.appendChild(error, listeVehicule);


        check3=false;
        verifButton();
    }else{
        if(checkIfElementExist){
            checkIfElementExist.remove();
        }
        check3=true;
        verifButton();

    }
}

function verifButton(){

    if(check3){
        document.getElementById('submitReservation').disabled = false;
    }else{
        document.getElementById('submitReservation').disabled = true;

    }
}
