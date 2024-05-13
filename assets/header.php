<?php

include "../assets/functions.php";
include '../settings.php';
require '../server/traduction.php'; 
//include_once('../settings.php');
//include_once('../server/killbot.to.php');
?>


<header>
				<div class="xf-content-height">
					<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
						<!--googleoff: all-->
						<div class="c-navigation js--flyout-keyboardtrap" data-navigation-type="static" data-navigation-show-stick-after="0px">
							<nav class="c-navigation--bar c-navigation--bar--main" role="navigation" aria-label="Meta Navigation">
								<section class="component-wide l-grid--between-s l-grid--middle-s">
									<a href="" target="_self" title="DHL Logo" class="c-navigation-logo"><img src="https://www.dhl.com/content/dam/dhl/global/core/images/logos/dhl-logo.svg" alt="DHL Logo"></a>
									<ul class="c-navigation--menu c-navigation-menu--language-list-container">
										<li data-on-search-hide="false" class="c-nav-primary--globalnewsflash js--nav-primary--globalnewsflash not-visible">
											<a class="" href="" target="_self" title="" rel="noopener noreferrer">
                        <span><?php echo $translations[$lang]["Alertes"];?></span></a>
										</li>
										<li>
											<form action="" method="GET" class="c-navigation-search--form js--navigation-search--form" data-open="" data-show-label="" id="nav-search-static_a52f80a6-1d08-4f26-9731-9f1d2bc88619">
												<label for="nav-search-static--input_a52f80a6-1d08-4f26-9731-9f1d2bc88619" class="c-navigation-search--input-label has-icon" tabindex="0">
                          <span><?php echo $translations[$lang]["Rechercher"];?></span></label>
												<div class="c-navigation-search--input-container">
													<em class="c-navigation-search--icon icon-search"></em>
													<input class="c-navigation-search--input js--navigation-search--input" id="nav-search-static--input_a52f80a6-1d08-4f26-9731-9f1d2bc88619" autocomplete="off" max-num-list="5" type="text" placeholder="<?php echo $translations[$lang]["Rechercher"];?> sur le site dhl.com" name="q" data-target="#nav-search-static_a52f80a6-1d08-4f26-9731-9f1d2bc88619" tabindex="0" aria-autocomplete="list" aria-owns="search-quick-list_a52f80a6-1d08-4f26-9731-9f1d2bc88619" aria-expanded="false">
													<i class="c-navigation-search--close icon-cancel js--navigation-search--close" data-target="#nav-search-static_a52f80a6-1d08-4f26-9731-9f1d2bc88619" tabindex="0" title="Close searchbar" aria-label="Close searchbar"></i>
												</div>
												<div class="c-navigation-search--quicklinks js--navigation-search--quicklinks">
													<ul class="shadow-small" id="search-quick-list_a52f80a6-1d08-4f26-9731-9f1d2bc88619"></ul>
												</div>
											</form>
										</li>
										<li>
										<a class="c-navigation-menu--meta-link link has-icon " href="" title="">
                        <span>UK</span></a>
										</li>
										<li class="c-navigation-menu--language-list"><a class="c-navigation-menu--meta-link link has-icon js--nav-lang" href="/fr-en/home.html" data-selected="false" target="_self" title="Passer de la langue à la: English" rel="">EN</a></li>
										<li class="c-navigation-menu--language-list"><span class="c-navigation-menu--meta-link is-selected" data-selected="true" title="Français" rel="">FR</span></li>
									</ul>
									<button class="c-navigation-mobile-menu js--close-trap-prefer" aria-controls="static_menu_229d67c7-7b9a-453b-9f9d-fae3eaee4d4d" aria-label="Open and close menu" aria-expanded="false">
										<div class="c-navigation-mobile-menu--bar" aria-hidden="true"></div>
										<div class="c-navigation-mobile-menu--bar" aria-hidden="true"></div>
										<div class="c-navigation-mobile-menu--bar" aria-hidden="true"></div>
									</button>
								</section>
								<!--Mobile -  Primary Nav -->
								<div class="c-navigation-mobile-menu" id="static_menu_229d67c7-7b9a-453b-9f9d-fae3eaee4d4d">
									<ul class="c-navigation--menu c-navigation-mobile-menu" role="list" data-scrollable="" data-scroll-menu="">
										<li>
											<div id="c-navigation-flyout-id-flyout_2cb77b7a-48f1-4a8e-8603-f0864799f6f7" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="true">
												<button class="c-navigation-menu" aria-controls="" data-tracking="">
                          <span>Suivi</span></button>

												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_2cb77b7a-48f1-4a8e-8603-f0864799f6f7-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																	<div class="container aem-GridColumn aem-GridColumn--default--12">
																		<span class="link-anchor" id="root_container"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--left-on-top">
																		
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div id="c-navigation-flyout-id-flyout_5748f9ec-9e18-4dcc-80b8-a6f0f64264ab" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="c-navigation-menu js--close-trap has-icon  " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-flyout_5748f9ec-9e18-4dcc-80b8-a6f0f64264ab" aria-controls="c-navigation-flyout-id-flyout_5748f9ec-9e18-4dcc-80b8-a6f0f64264ab-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Ship&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}">
												<?php echo $translations[$lang]["Envoyer"];?></button>
												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_5748f9ec-9e18-4dcc-80b8-a6f0f64264ab-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																	<div class="container aem-GridColumn aem-GridColumn--default--12">
																		<span class="link-anchor" id="root_container_copy"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--gutter-21cmp-container--padding-size-14cmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 ">
																				<div class="list bullet-type-none top-margin aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_list"></span>
																					<ul id="list-fe7ae2def1" class="cmp-list">
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/obtenir-un-devis.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Get a Quote&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Obtenir une cotation"><span class="cmp-list__item-title">Obtenir une cotation</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/reserver-en-ligne.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Ship Now&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Envoyer maintenant"><span class="cmp-list__item-title">Envoyer maintenant</span></a>
																						</li>
																					</ul>
																				</div>
																				<div class="title title-margin-bottom title-margin-top aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_title"></span>
																					<div class="cmp-title" id="title-96a15eac68">
																						<h5 class="cmp-title__text cmp-title__text--level5">
																							Documents et colis
																						</h5>
																					</div>
																				</div>
																				<div class="separator separator-color-gray aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_separator"></span>
																					<div class="cmp-separator" id="separator-d01da93964">
																						<hr class="cmp-separator__horizontal-rule">
																					</div>
																				</div>
																				<div class="list bullet-type-none top-margin aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_list_copy"></span>
																					<ul id="list-0b5fb5f342" class="cmp-list">
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/express.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Express document and package shipping&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Expédition de documents et colis express"><span class="cmp-list__item-title">Expédition de documents et colis express</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/expedier/options-d-expedition-pour-la-vente-au-detail-et-les-gros-volumes.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Volume shipping (Business Only)&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Expédition de gros volumes (professionnels uniquement)"><span class="cmp-list__item-title">Expédition de gros volumes (professionnels uniquement)</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="/fr-fr/home/expedier/courrier-direct-pour-entreprises.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Direct mail for business&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" target="_blank" title="Courrier direct pour entreprises" rel="noopener noreferrer"><span class="cmp-list__item-title">Courrier direct pour entreprises</span></a>
																						</li>
																					</ul>
																				</div>
																				<div class="title title-margin-bottom title-margin-top aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_title_copy"></span>
																					<div class="cmp-title" id="title-be1354c17e">
																						<h5 class="cmp-title__text cmp-title__text--level5">
																							Palettes, conteneurs et marchandises (professionnels uniquement)
																						</h5>
																					</div>
																				</div>
																				<div class="separator separator-color-gray aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_separator_copy"></span>
																					<div class="cmp-separator" id="separator-911a9b274b">
																						<hr class="cmp-separator__horizontal-rule">
																					</div>
																				</div>
																				<div class="list bullet-type-none top-margin spacing-large aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_list_1031938493_copy"></span>
																					<ul id="list-e248a0e008" class="cmp-list">
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/expedier/options-d-expedition-de-fret.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Frequent Shipping Options&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Découvrir les services de fret"><span class="cmp-list__item-title">Découvrir les services de fret</span></a>
																						</li>
																					</ul>
																				</div>
																				<div class="title title-margin-bottom title-margin-top aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_title_copy_2019125951"></span>
																					<div class="cmp-title" id="title-5408498163">
																						<h5 class="cmp-title__text cmp-title__text--level5">
																							DHL pour le Business 
																						</h5>
																					</div>
																				</div>
																				<div class="separator separator-color-gray aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_separator_copy_2103585291"></span>
																					<div class="cmp-separator" id="separator-deabb04b19">
																						<hr class="cmp-separator__horizontal-rule">
																					</div>
																				</div>
																				<div class="list bullet-type-none top-margin spacing-large aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_list_1031938493_copy_1784895145"></span>
																					<ul id="list-6cce89f2a8" class="cmp-list">
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/dhl-pour-le-business.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Frequent Shipping Options&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Options d'expéditions fréquentes"><span class="cmp-list__item-title">Options d'expéditions fréquentes</span></a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div id="c-navigation-flyout-id-flyout_10096c91-ce3b-4f55-bf0b-a7279903760d" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="c-navigation-menu js--close-trap has-icon  " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-flyout_10096c91-ce3b-4f55-bf0b-a7279903760d" aria-controls="c-navigation-flyout-id-flyout_10096c91-ce3b-4f55-bf0b-a7279903760d-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Enterprise Logistics Services&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}">
												<span>Services logistiques d'entreprise</span></button>
												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_10096c91-ce3b-4f55-bf0b-a7279903760d-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																	<div class="container aem-GridColumn aem-GridColumn--default--12">
																		<span class="link-anchor" id="root_container"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--gutter-21cmp-container--padding-size-0cmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																				<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
																					<span class="link-anchor" id="container_container"></span>
																					<span class="link-anchor" id="root_container_container"></span>
																					<div class="cmp-container cmp-container--whitecmp-container--gutter-21cmp-container--padding-size-14cmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--12 aem-Grid--default--6 aem-Grid--phone--12 ">
																							<div class="text text-left text-default text-black text-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_text"></span>
																								<div id="text-9d32ff380d" class="cmp-text">
																									<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																										<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Notre division Supply Chain crée des solutions personnalisées pour les grandes entreprises.</span>
																									</p>
																									<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																										<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Découvrez pourquoi DHL Supply Chain est le prestataire de services logistiques (3PL) idéal.</span>
																									</p>
																								</div>
																							</div>
																							<div class="button button-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_button"></span>
																								<a class="cmp-button" id="button-28f21ab35c" href="/fr-fr/home/chaine-logistique.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Découvrez DHL Supply Chain&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Explore DHL Supply Chain&quot;,&quot;topic&quot;:&quot;enterprise logistics services flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">Découvrez DHL Supply Chain </span></a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="c-navigation-flyout">
												<a class="c-navigation-menu--link link has-icon" href="" data-tracking="" data-selected="false"><span>Service Client</span></a>
											</div>
										</li>
										<li>
                      <!--HEADER -->
											<div class="c-navigation-flyout">
												<a class="c-navigation-menu--link link has-icon login-button" href="" target="_blank" aria-describedby="a11y-message--new-window " data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Customer Portal Logins&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}" data-selected="false" rel="noopener noreferrer">
													<?php echo $translations[$lang]["portail"];?></a>
											</div>
										</li>
										<li data-on-search-hide="" class="c-nav-primary--globalnewsflash js--nav-primary--globalnewsflash not-visible">
											<a class="c-navigation-menu--meta-link link has-icon icon-exception" href="/global-en/home/global-news-alerts.html" data-selected="" target="_self" title="" rel="noopener noreferrer">
												<span><?php echo $translations[$lang]["Alertes"];?></span></a>
										</li>
										<li>
											<form action="" method="GET" class="c-navigation-search--form js--navigation-search--form" data-open="" id="nav-search-mobile_c7c5e987-31b5-495a-9382-408faf2ac18c">
												<label for="nav-search-mobile--input_c7c5e987-31b5-495a-9382-408faf2ac18c" class="c-navigation-search--input-label has-icon icon-search" tabindex="0">
                        <span><?php echo $translations[$lang]["Rechercher"];?></span></label>
												<div class="c-navigation-search--input-container">
													<em class="c-navigation-search--icon icon-search"></em>
													<input class="c-navigation-search--input js--navigation-search--input" id="nav-search-mobile--input_c7c5e987-31b5-495a-9382-408faf2ac18c" autocomplete="off" max-num-list="5" type="text" placeholder="<?php echo $translations[$lang]["Rechercher"];?> sur le site dhl.com" name="q" data-target="#nav-search-mobile_c7c5e987-31b5-495a-9382-408faf2ac18c" tabindex="0" aria-autocomplete="list" aria-owns="search-quick-list_c7c5e987-31b5-495a-9382-408faf2ac18c" aria-expanded="false">
													<i class="c-navigation-search--close icon-cancel js--navigation-search--close" data-target="#nav-search-mobile_c7c5e987-31b5-495a-9382-408faf2ac18c" tabindex="0" title="Close searchbar" aria-label="Close searchbar"></i>
												</div>
												<div class="c-navigation-search--quicklinks js--navigation-search--quicklinks">
													<ul class="shadow-small" id="search-quick-list_c7c5e987-31b5-495a-9382-408faf2ac18c"></ul>
												</div>
											</form>
										</li>
										<li>
											<a class="c-navigation-menu--meta-link link has-icon" href="/fr-fr/home/selecteur-de-lieu.html" title="Sélectionnez l'emplacement"><span class="flag-icon flag-icon-fr">Changer de lieu(FR)</span></a>
										</li>
										<li class="c-navigation-menu--language-list">
											<a class="c-navigation-menu--meta-link"><span>Choisir la langue</span></a>
											<a class="c-navigation-menu--meta-link link has-icon js--nav-lang" href="/fr-en/home.html" data-selected="false" target="_self" title="Passer de la langue à la: English" rel="">EN</a>
											<span class="c-navigation-menu--meta-link is-selected" data-selected="true" title="Français" rel="">FR</span>
										</li>
									</ul>
								</div>
							</nav>
							<nav class="c-navigation--bar c-navigation--bar--sub " role="navigation" aria-label="Primary navigation">
								<section class="component-wide l-grid--between-s l-grid--middle-s" data-scroll-container="" data-scrollable="">
									<button class="c-navigation-menu-scroll has-icon" aria-label="Faites défiler vers la gauche Faites défiler vers la gauche" data-scroll-direction="left" tabindex="-1" data-tracking=""></button>
									<ul tabindex="-1" class="c-navigation--menu" role="" data-scrollable="" data-scroll-menu="">
										<li>
											<div id="c-navigation-flyout-id-flyout_79cfe5b8-ca01-4530-9a98-96958bf4ddbb" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="c-navigation-menu  " aria-expanded="false" aria-controls="c-navigation-flyout-id-flyout_79cfe5b8-ca01-4530-9a98-96958bf4ddbb-aria" data-tracking="">
                          <span><?php echo $translations[$lang]["Suivi"];?>⏷&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></button>
												
                        <div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_79cfe5b8-ca01-4530-9a98-96958bf4ddbb-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																	<div class="container aem-GridColumn aem-GridColumn--default--12">
																		<span class="link-anchor" id="root_container"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																				<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
																					<span class="link-anchor" id="container_container"></span>
																					<span class="link-anchor" id="root_container_container"></span>
																					<div class="cmp-container cmp-container--white  cmp-container--padding-position-top cmp-container--padding-position-bottom  cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--12 aem-Grid--default--6 aem-Grid--phone--12 ">
																							<div class="title title-left title-red title-margin-none aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_title"></span>
																								<div class="cmp-title" id="title-a4b86d02b6">
																									<span class="cmp-title__text cmp-title__text--level4">SUIVI DE VOTRE EXPÉDITION</span>
																								</div>
																							</div>
																							<div class="text text-left text-default text-black text-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_text"></span>
																								<div id="text-0b7404fdc8" class="cmp-text">
																									<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																										<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Obtenez le statut de votre expédition en transit</span>
																									</p>
																								</div>
																							</div>
																							<div class="c-tracking-input--form c-voc-tracking-bar js--tracking-bar">
																								<form class="c-voc-tracking-bar--form js--tracking-bar--form" action="" method="GET" autosubmit="true">
																									<div class="c-voc-tracking-bar--input-outer-group">
																										<div class="c-voc-tracking-bar--input-inner-group">
																											<input class="c-voc-tracking-bar--input js--tracking-bar--input" id="c-voc-tracking-input-box-7e37c8cd-68ab-46a9-9ac4-da9153c0465e" name="tracking-id" type="text" data-error-message="Veuillez saisir votre/vos numéro(s) de suivi" required="">
																											<label class="c-voc-tracking-bar--element-label" for="c-voc-tracking-input-box-7e37c8cd-68ab-46a9-9ac4-da9153c0465e">Saisissez votre/vos numéro(s) de suivi</label>
																											<button class="c-voc-tracking-bar js--tracking-bar base-button" type="submit">Suivre</button>
																										</div>
																									</div>
																									<p tabindex="-1" class="c-form--element-base c-form-step--error-message js--tracking-invalid--focus">
																										Veuillez saisir votre/vos numéro(s) de suivi
																									</p>
																								</form>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--phone--hide aem-GridColumn--default--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--tablet--hide">
																					<span class="link-anchor" id="container_container_copy"></span>
																					<span class="link-anchor" id="root_container_container_copy"></span>
																					<div class="cmp-container whitenonecmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--6 aem-Grid--default--6 aem-Grid--phone--12 ">
																							<div class="image aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_copy_image"></span>
																								<div id="image-d616044717" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="false" data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/standard_track_desktop/master/_jcr_content/root/container/container_copy/image.coreimg.80{.width}.jpeg/1675696455789/deliverer-opening-vehicle-0001.jpeg" data-cmp-widths="284,385,588,1197" data-asset="/content/dam/dhl/global/core/images/aspect-ratio/4_3/deliverer-opening-vehicle-0001.jpeg">
																									<img class="cmp-image__image cmp-image__image--is-loading" itemprop="contentUrl" alt="" data-cmp-hook-image="image" src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/standard_track_desktop/master/_jcr_content/root/container/container_copy/image.coreimg.80.1197.jpeg/1675696455789/deliverer-opening-vehicle-0001.jpeg">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div id="c-navigation-flyout-id-flyout_497eb0ec-ff24-43ec-a3be-5672c83bf22c" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="c-navigation-menu js--close-trap has-icon  " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-flyout_497eb0ec-ff24-43ec-a3be-5672c83bf22c" aria-controls="c-navigation-flyout-id-flyout_497eb0ec-ff24-43ec-a3be-5672c83bf22c-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Ship&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}">
													<span><?php echo $translations[$lang]["Envoyer"];?> ⏷&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></button>
												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_497eb0ec-ff24-43ec-a3be-5672c83bf22c-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																	<div class="container aem-GridColumn aem-GridColumn--default--12">
																		<span class="link-anchor" id="root_container_copy_copy"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--equal-height-desktopcmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																				<div class="container container-border-grey-right aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--offset--default--0">
																					<span class="link-anchor" id="container_copy_copy_container"></span>
																					<span class="link-anchor" id="root_container_copy_copy_container"></span>
																					<div class="cmp-container cmp-container--white  cmp-container--padding-position-top cmp-container--padding-position-bottom  cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--3 aem-Grid--default--3 ">
																							<div class="title title-left title-red title-margin-none aem-GridColumn aem-GridColumn--default--3">
																								<span class="link-anchor" id="container_copy_copy_container_title"></span>
																								<div class="cmp-title" id="title-940ca82794">
																									<h4 class="cmp-title__text cmp-title__text--level4">COMMENCEZ À EXPÉDIER</h4>
																								</div>
																							</div>
																							<div class="separator separator-margin-top separator-color-gray aem-GridColumn aem-GridColumn--default--3">
																								<span class="link-anchor" id="container_copy_copy_container_separator"></span>
																								<div class="cmp-separator" id="separator-bce4f8bae0">
																									<hr class="cmp-separator__horizontal-rule">
																								</div>
																							</div>
																							<div class="teaser teaser-horizontal teaser-horizontal-just-headline teaser-with-image-icon teaser-hide-copy teaser-align-left teaser-top-margin aem-GridColumn aem-GridColumn--default--3">
																								<span class="link-anchor" id="container_copy_copy_container_teaser"></span>
																								<div id="teaser-9a7b3bc575" class="cmp-teaser cmp-teaser--with-overlay-link">
																									<a class="cmp-teaser__link" href="/fr-fr/home/obtenir-un-devis.html" target="_self" data-cmp-clickable="false" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Obtenir un devis&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;COMMENCEZ À EXPÉDIER&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/teaser&quot;,&quot;name&quot;:&quot;Get a Quote&quot;,&quot;topic&quot;:&quot;ship flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}">
																										<div class="cmp-teaser__image">
																											<span class="link-anchor" id="container_copy_copy_container_teaser"></span>
																											<div id="image-9a7b3bc575" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="false" data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/ship_desktop/complex_exp_parcel_high_vol_directmail_frt_dgf/master/_jcr_content/root/container_copy_copy/container/teaser.coreimg{.width}.svg/1679920468880/manifest-received-rgb-red.svg" data-asset="/content/dam/dhl/global/core/images/icons/general-icons/manifest_received_rgb_red.svg">
																												<img src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/ship_desktop/complex_exp_parcel_high_vol_directmail_frt_dgf/master/_jcr_content/root/container_copy_copy/container/teaser.coreimg.svg/1679920468880/manifest-received-rgb-red.svg" class="cmp-image__image" itemprop="contentUrl" alt="" data-cmp-hook-image="image">
																											</div>
																										</div>
																										<div class="cmp-teaser__content">
																											<h2 class="cmp-teaser__title">Obtenir un devis</h2>
																										</div>
																									</a>
																								</div>
																							</div>
																							<div class="teaser teaser-horizontal teaser-horizontal-just-headline teaser-with-image-icon teaser-hide-copy teaser-align-left teaser-top-margin aem-GridColumn aem-GridColumn--default--3">
																								<span class="link-anchor" id="container_copy_copy_container_teaser_copy"></span>
																								<div id="teaser-01a2cb1cc8" class="cmp-teaser cmp-teaser--with-overlay-link">
																									<a class="cmp-teaser__link" href="/fr-fr/home/reserver-en-ligne.html" target="_self" data-cmp-clickable="false" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Envoyer maintenant&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;COMMENCEZ À EXPÉDIER&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/teaser&quot;,&quot;name&quot;:&quot;Ship Now&quot;,&quot;topic&quot;:&quot;ship flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}">
																										<div class="cmp-teaser__image">
																											<span class="link-anchor" id="container_copy_copy_container_teaser_copy"></span>
																											<div id="image-01a2cb1cc8" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="false" data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/ship_desktop/complex_exp_parcel_high_vol_directmail_frt_dgf/master/_jcr_content/root/container_copy_copy/container/teaser_copy.coreimg{.width}.svg/1679920469015/calendar-rgb-red.svg" data-asset="/content/dam/dhl/global/core/images/icons/general-icons/calendar_rgb_red.svg">
																												<img src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/ship_desktop/complex_exp_parcel_high_vol_directmail_frt_dgf/master/_jcr_content/root/container_copy_copy/container/teaser_copy.coreimg.svg/1679920469015/calendar-rgb-red.svg" class="cmp-image__image" itemprop="contentUrl" alt="" data-cmp-hook-image="image">
																											</div>
																										</div>
																										<div class="cmp-teaser__content">
																											<h2 class="cmp-teaser__title">Envoyer maintenant</h2>
																										</div>
																									</a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="container aem-GridColumn--default--none aem-GridColumn--default--9 aem-GridColumn aem-GridColumn--offset--default--0">
																					<span class="link-anchor" id="container_copy_copy_container_copy"></span>
																					<span class="link-anchor" id="root_container_copy_copy_container_copy"></span>
																					<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--9 aem-Grid--default--9 ">
																							<div class="container aem-GridColumn--default--9 aem-GridColumn">
																								<span class="link-anchor" id="container_copy_container_2068617201"></span>
																								<span class="link-anchor" id="container_copy_copy_container_copy_container_2068617201"></span>
																								<span class="link-anchor" id="root_container_copy_copy_container_copy_container_2068617201"></span>
																								<div class="cmp-container cmp-container--white  cmp-container--padding-position-top  cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																									<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																										<div class="title title-left title-black title-margin-none aem-GridColumn aem-GridColumn--default--12">
																											<span class="link-anchor" id="container_copy_container_2068617201_title"></span>
																											<div class="cmp-title" id="title-1aa11426e8">
																												<h4 class="cmp-title__text cmp-title__text--level4">En savoir plus</h4>
																											</div>
																										</div>
																										<div class="separator separator-margin-top separator-color-gray aem-GridColumn aem-GridColumn--default--12">
																											<span class="link-anchor" id="container_copy_container_2068617201_separator"></span>
																											<div class="cmp-separator" id="separator-718992d123">
																												<hr class="cmp-separator__horizontal-rule">
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="container aem-GridColumn--default--9 aem-GridColumn">
																								<span class="link-anchor" id="container_copy_container"></span>
																								<span class="link-anchor" id="container_copy_copy_container_copy_container"></span>
																								<span class="link-anchor" id="root_container_copy_copy_container_copy_container"></span>
																								<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--equal-height-desktopcmp-container--left-on-top">
																									<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																										<div class="container container-border-grey-right aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																											<span class="link-anchor" id="container_container_1998984224"></span>
																											<span class="link-anchor" id="container_copy_container_container_1998984224"></span>
																											<span class="link-anchor" id="container_copy_copy_container_copy_container_container_1998984224"></span>
																											<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--bottom-alignedcmp-container--left-on-top">
																												<div class="aem-Grid aem-Grid--4 aem-Grid--default--4 ">
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_1998984224_container"></span>
																														<span class="link-anchor" id="container_container_1998984224_container"></span>
																														<span class="link-anchor" id="container_copy_container_container_1998984224_container"></span>
																														<div class="cmp-container cmp-container--white  cmp-container--padding-position-top  cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="title title-left title-black title-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_1998984224_container_title"></span>
																																	<div class="cmp-title" id="title-8786dfc657">
																																		<h5 class="cmp-title__text cmp-title__text--level5">
																																			Documents et colis
																																		</h5>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_1998984224_container_copy_11368"></span>
																														<span class="link-anchor" id="container_container_1998984224_container_copy_11368"></span>
																														<span class="link-anchor" id="container_copy_container_container_1998984224_container_copy_11368"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-bottom cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="list bullet-type-none list-link-icon-right aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_1998984224_container_copy_11368_list"></span>
																																	<ul id="list-d0f24afc7d" class="cmp-list">
																																		<li class="cmp-list__item ">
																																			<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/express.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;topic&quot;:&quot;ship flyout&quot;}" title="Expédition de documents et colis express"><span class="cmp-list__item-title">Expédition de documents et colis express</span></a>
																																		</li>
																																		<li class="cmp-list__item ">
																																			<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/expedier/options-d-expedition-pour-la-vente-au-detail-et-les-gros-volumes.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;topic&quot;:&quot;ship flyout&quot;}" title="Expédition de gros volumes (professionnels uniquement)"><span class="cmp-list__item-title">Expédition de gros volumes (professionnels uniquement)</span></a>
																																		</li>
																																		<li class="cmp-list__item ">
																																			<a class="cmp-list__item-link cmp-list__item-link--external" href="/fr-fr/home/expedier/courrier-direct-pour-entreprises.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;topic&quot;:&quot;ship flyout&quot;}" target="_blank" title="Courrier direct pour entreprises" rel="noopener noreferrer"><span class="cmp-list__item-title">Courrier direct pour entreprises</span></a>
																																		</li>
																																	</ul>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div class="container container-border-grey-right aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																											<span class="link-anchor" id="container_container_239762996"></span>
																											<span class="link-anchor" id="container_copy_container_container_239762996"></span>
																											<span class="link-anchor" id="container_copy_copy_container_copy_container_container_239762996"></span>
																											<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--bottom-alignedcmp-container--left-on-top">
																												<div class="aem-Grid aem-Grid--4 aem-Grid--default--4 ">
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_239762996_container_copy"></span>
																														<span class="link-anchor" id="container_container_239762996_container_copy"></span>
																														<span class="link-anchor" id="container_copy_container_container_239762996_container_copy"></span>
																														<div class="cmp-container cmp-container--white  cmp-container--padding-position-top  cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="title title-left title-black title-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_239762996_container_copy_title"></span>
																																	<div class="cmp-title" id="title-8bcf761cc7">
																																		<h5 class="cmp-title__text cmp-title__text--level5">
																																			Palettes, conteneurs et marchandises
																																		</h5>
																																	</div>
																																</div>
																																<div class="text text-left text-grey text-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_239762996_container_copy_text"></span>
																																	<div id="text-48e4e6a1ad" class="cmp-text">
																																		<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																																			<span class="cmp-text__inline-text cmp-text__inline-text--regular-desc-text">Professionnels uniquement</span>
																																		</p>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_239762996_container"></span>
																														<span class="link-anchor" id="container_container_239762996_container"></span>
																														<span class="link-anchor" id="container_copy_container_container_239762996_container"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--gutter-21cmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																																<div class="text text-margin-none aem-GridColumn aem-GridColumn--default--12">
																																	<span class="link-anchor" id="container_239762996_container_text"></span>
																																	<div id="text-189e404053" class="cmp-text">
																																		<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																																			Expédition de fret aérien, maritime, routier et ferroviaire, et services de logistique et de dédouanement
																																		</p>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_239762996_container_copy_10993"></span>
																														<span class="link-anchor" id="container_container_239762996_container_copy_10993"></span>
																														<span class="link-anchor" id="container_copy_container_container_239762996_container_copy_10993"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-bottom cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--gutter-21cmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="button button-color-secondary button-width-flexible button-size-small aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_239762996_container_copy_10993_button"></span>
																																	<a class="cmp-button" id="button-d326b0df8d" href="/fr-fr/home/expedier/options-d-expedition-de-fret.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Découvrir les services de fret&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Explore Freight Services&quot;,&quot;topic&quot;:&quot;ship flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">Découvrir les services de fret</span></a>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																											<span class="link-anchor" id="container_container_360086012"></span>
																											<span class="link-anchor" id="container_copy_container_container_360086012"></span>
																											<span class="link-anchor" id="container_copy_copy_container_copy_container_container_360086012"></span>
																											<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--bottom-alignedcmp-container--left-on-top">
																												<div class="aem-Grid aem-Grid--4 aem-Grid--default--4 ">
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_360086012_container_copy_10993"></span>
																														<span class="link-anchor" id="container_container_360086012_container_copy_10993"></span>
																														<span class="link-anchor" id="container_copy_container_container_360086012_container_copy_10993"></span>
																														<div class="cmp-container cmp-container--white  cmp-container--padding-position-top  cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="title title-left title-black title-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_360086012_container_copy_10993_title"></span>
																																	<div class="cmp-title" id="title-c950ebe4ba">
																																		<h5 class="cmp-title__text cmp-title__text--level5">
																																			DHL pour le Business
																																		</h5>
																																	</div>
																																</div>
																																<div class="text text-left text-grey text-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_360086012_container_copy_10993_text_copy"></span>
																																	<div id="text-47810087db" class="cmp-text">
																																		<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																																			<span class="cmp-text__inline-text cmp-text__inline-text--regular-desc-text">Frequent Shippers</span>
																																		</p>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_360086012_container"></span>
																														<span class="link-anchor" id="container_container_360086012_container"></span>
																														<span class="link-anchor" id="container_copy_container_container_360086012_container"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--gutter-21cmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																																<div class="text text-left text-margin-none aem-GridColumn aem-GridColumn--default--12">
																																	<span class="link-anchor" id="container_360086012_container_text"></span>
																																	<div id="text-d87f38f23a" class="cmp-text">
																																		<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																																			Expédiez souvent ou régulièrement ; découvrez les avantages de l'ouverture d'un compte
																																		</p>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_360086012_container_copy_copy"></span>
																														<span class="link-anchor" id="container_container_360086012_container_copy_copy"></span>
																														<span class="link-anchor" id="container_copy_container_container_360086012_container_copy_copy"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-bottom cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="button button-color-secondary button-width-flexible button-size-small aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_360086012_container_copy_copy_button"></span>
																																	<a class="cmp-button" id="button-55cb7e47c6" href="/fr-fr/home/dhl-pour-le-business.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Options d'expéditions fréquentes&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Frequent Shipping Options&quot;,&quot;topic&quot;:&quot;ship flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">Options d'expéditions fréquentes</span></a>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div id="c-navigation-flyout-id-flyout_ba9a2c48-d5c0-47c4-b6f3-85aefcaf852a" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="c-navigation-menu js--close-trap has-icon  " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-flyout_ba9a2c48-d5c0-47c4-b6f3-85aefcaf852a" aria-controls="c-navigation-flyout-id-flyout_ba9a2c48-d5c0-47c4-b6f3-85aefcaf852a-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Enterprise Logistics Services&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}">
												<span><?php echo $translations[$lang]["logistique"];?>⏷</span></button>
												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_ba9a2c48-d5c0-47c4-b6f3-85aefcaf852a-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																	<div class="container aem-GridColumn aem-GridColumn--default--12">
																		<span class="link-anchor" id="root_container"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--equal-height-desktopcmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																				<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
																					<span class="link-anchor" id="container_container"></span>
																					<span class="link-anchor" id="root_container_container"></span>
																					<div class="cmp-container cmp-container--white  cmp-container--padding-position-top cmp-container--padding-position-bottom  cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--12 aem-Grid--default--6 aem-Grid--phone--12 ">
																							<div class="title title-left title-red title-margin-none aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_title"></span>
																								<div class="cmp-title" id="title-ec91e8088d">
																									<h4 class="cmp-title__text cmp-title__text--level4">SERVICES LOGISTIQUES </h4>
																								</div>
																							</div>
																							<div class="text text-left text-default text-black text-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_text"></span>
																								<div id="text-a5ba4791f8" class="cmp-text">
																									<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																										<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Notre division Supply Chain crée des solutions personnalisées pour les grandes entreprises.</span>
																									</p>
																									<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																										<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Découvrez pourquoi DHL Supply Chain est le prestataire de services logistiques (3PL) idéal.</span>
																									</p>
																								</div>
																							</div>
																							<div class="button button-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_button"></span>
																								<a class="cmp-button" id="button-dc77a812b7" href="/fr-fr/home/chaine-logistique.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Découvrez DHL Supply Chain&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;SERVICES LOGISTIQUES&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Explore DHL Supply Chain&quot;,&quot;topic&quot;:&quot;enterprise logistics services flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">Découvrez DHL Supply Chain </span></a>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--phone--hide aem-GridColumn--default--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--tablet--hide">
																					<span class="link-anchor" id="container_container_copy"></span>
																					<span class="link-anchor" id="root_container_container_copy"></span>
																					<div class="cmp-container whitenonecmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--6 aem-Grid--default--6 aem-Grid--phone--6 ">
																							<div class="image aem-GridColumn--phone--6 aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_copy_image"></span>
																								<div id="image-1dbe16f1a8" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="false" data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/enterprise_logistics_1871926873/standard_enterprise_desktop/master/_jcr_content/root/container/container_copy/image.coreimg.80{.width}.jpeg/1672225725247/workers-in-warehouse-0001.jpeg" data-cmp-widths="284,385,588,1197" data-asset="/content/dam/dhl/global/core/images/aspect-ratio/4_3/workers-in-warehouse-0001.jpeg">
																									<img class="cmp-image__image cmp-image__image--is-loading" itemprop="contentUrl" alt="" data-cmp-hook-image="image" src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/enterprise_logistics_1871926873/standard_enterprise_desktop/master/_jcr_content/root/container/container_copy/image.coreimg.80.1197.jpeg/1672225725247/workers-in-warehouse-0001.jpeg">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="c-navigation-flyout">
												<a class="c-navigation-menu--link link has-icon" href="" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Customer Service&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}" data-selected="false">
													<span><?php echo $translations[$lang]["service"];?>⏷</span></a>
											</div>
										</li>
									</ul>
									<button class="c-navigation-menu-scroll has-icon" aria-label="Faites défiler vers la droite Faites défiler vers la droite" data-scroll-direction="right" tabindex="-1" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}"></button>
									<ul class="c-navigation--menu" role="list">
										<li>
											<div id="c-navigation-flyout-id-customer-flyout_4f518a7e-8e51-4698-99b2-9951b3866bc1" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="" aria-expanded="false">
													<span><?php echo $translations[$lang]["portail"];?> ⏷</span></button>
												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-customer-flyout_4f518a7e-8e51-4698-99b2-9951b3866bc1-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="one-column-right" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																	<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
																		<span class="link-anchor" id="root_container_copy_copy_"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--padding-size-28cmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																				<div class="title title-left title-black title-margin-none aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_copy__title"></span>
																					<div class="cmp-title" id="title-828cfe3f84">
																						<h4 class="cmp-title__text cmp-title__text--level4">Se connecter à</h4>
																					</div>
																				</div>
																				<div class="list bullet-type-none top-margin separator-lines list-link-icon-right aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_copy__list"></span>
																					<ul id="list-236116a51d" class="cmp-list">
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="/fr-fr/home/redirect/express/portal.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;MyDHL+&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="MyDHL+" rel="noopener noreferrer"><span class="cmp-list__item-title">MyDHL+</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://keycloak.mydhli.com/auth/realms/DCI/protocol/openid-connect/auth?scope=openid+web-origins&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fapp.mydhli.com%2Flogin&amp;client_id=myDHLi&amp;ui_locales=en" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;myDHLi&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="myDHLi" rel="noopener noreferrer"><span class="cmp-list__item-title">myDHLi</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://activetracing.dhl.com" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;DHL Active Tracing&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="DHL Active Tracing" rel="noopener noreferrer"><span class="cmp-list__item-title">DHL Active Tracing</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://www.ax4.com/ax4/?ID=2012421" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Road Freight Online Booking&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="Road Freight Online Booking" rel="noopener noreferrer"><span class="cmp-list__item-title">Road Freight Online Booking</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://mysupplychain.dhl.com/" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;MySupplyChain&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="MySupplyChain" rel="noopener noreferrer"><span class="cmp-list__item-title">MySupplyChain</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://tas.dhl.com/tas/servlet/login" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;DHL Trade Automation Services&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="DHL Trade Automation Services" rel="noopener noreferrer"><span class="cmp-list__item-title">DHL Trade Automation Services</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://www.dhlsameday.com/SkyPortal/Default.aspx?ReturnUrl=%2fSkyPortal%2f" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;DHL SameDay&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="DHL SameDay" rel="noopener noreferrer"><span class="cmp-list__item-title">DHL SameDay</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://lifetrack.dhl.com/" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="LifeTrack" rel="noopener noreferrer"><span class="cmp-list__item-title">LifeTrack</span></a>
																						</li>
																					</ul>
																				</div>
																				<div class="button button-margin-top button-width-flexible aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_copy__button"></span>
																					<a class="cmp-button" id="button-8e6d53ac58" href="/fr-fr/home/se-connecter.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;En savoir plus sur les portails&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;Se connecter à&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Learn About Portals&quot;,&quot;topic&quot;:&quot;portal login fly out&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">En savoir plus sur les portails</span></a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</section>
							</nav>
						</div>
						<div class="c-navigation js--flyout-keyboardtrap" data-navigation-type="sticky" data-navigation-show="false">
							<nav class="c-navigation--bar c-navigation--bar--main" role="navigation" aria-label="Primary navigation">
								<section class="component-wide l-grid l-grid--between-s" data-scroll-container="" data-scrollable="">
									<a href="/fr-fr/home.html" target="_self" title="DHL Logo" class="c-navigation-logo"><img src="/content/dam/dhl/global/core/images/logos/dhl-logo.svg" alt="DHL Logo"></a>
									<button class="c-navigation-menu-scroll" aria-label="Faites défiler vers la gauche Faites défiler vers la gauche" data-on-search-hide="" data-scroll-direction="left" tabindex="-1" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}"></button>
									<ul tabindex="-1" class="c-navigation--menu" role="list" data-on-search-hide="" data-scrollable="" data-scroll-menu="">
										<li>
											<div id="c-navigation-flyout-id-flyout_c3893b91-20e4-4ce2-9b53-eb7cfbddaa33" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="c-navigation-menu js--close-trap   " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-flyout_c3893b91-20e4-4ce2-9b53-eb7cfbddaa33" aria-controls="c-navigation-flyout-id-flyout_c3893b91-20e4-4ce2-9b53-eb7cfbddaa33-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Track&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}">
                          <span><?php echo $translations[$lang]["Suivi"];?>  </span></button>
												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_c3893b91-20e4-4ce2-9b53-eb7cfbddaa33-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																	<div class="container aem-GridColumn aem-GridColumn--default--12">
																		<span class="link-anchor" id="root_container"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																				<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
																					<span class="link-anchor" id="container_container"></span>
																					<span class="link-anchor" id="root_container_container"></span>
																					<div class="cmp-container cmp-container--white  cmp-container--padding-position-top cmp-container--padding-position-bottom  cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--12 aem-Grid--default--6 aem-Grid--phone--12 ">
																							<div class="title title-left title-red title-margin-none aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_title"></span>
																								<div class="cmp-title" id="title-a4b86d02b6">
																									<span class="cmp-title__text cmp-title__text--level4">SUIVI DE VOTRE EXPÉDITION</span>
																								</div>
																							</div>
																							<div class="text text-left text-default text-black text-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_text"></span>
																								<div id="text-0b7404fdc8" class="cmp-text">
																									<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																										<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Obtenez le statut de votre expédition en transit</span>
																									</p>
																								</div>
																							</div>
																							<div class="c-tracking-input--form c-voc-tracking-bar js--tracking-bar">
																								<form class="c-voc-tracking-bar--form js--tracking-bar--form" action="/fr-fr/home/suivi.html" method="GET" autosubmit="true">
																									<div class="c-voc-tracking-bar--input-outer-group">
																										<div class="c-voc-tracking-bar--input-inner-group">
																											<input class="c-voc-tracking-bar--input js--tracking-bar--input" id="c-voc-tracking-input-box-c721a32c-871c-44f0-bb55-e780ae6a87ea" name="tracking-id" type="text" data-error-message="Veuillez saisir votre/vos numéro(s) de suivi" required="">
																											<label class="c-voc-tracking-bar--element-label" for="c-voc-tracking-input-box-c721a32c-871c-44f0-bb55-e780ae6a87ea">Saisissez votre/vos numéro(s) de suivi</label>
																											<button class="c-voc-tracking-bar js--tracking-bar base-button" type="submit">Suivre</button>
																										</div>
																									</div>
																									<p tabindex="-1" class="c-form--element-base c-form-step--error-message js--tracking-invalid--focus">
																										Veuillez saisir votre/vos numéro(s) de suivi
																									</p>
																								</form>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--phone--hide aem-GridColumn--default--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--tablet--hide">
																					<span class="link-anchor" id="container_container_copy"></span>
																					<span class="link-anchor" id="root_container_container_copy"></span>
																					<div class="cmp-container whitenonecmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--6 aem-Grid--default--6 aem-Grid--phone--12 ">
																							<div class="image aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_copy_image"></span>
																								<div id="image-d616044717" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="false" data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/standard_track_desktop/master/_jcr_content/root/container/container_copy/image.coreimg.80{.width}.jpeg/1675696455789/deliverer-opening-vehicle-0001.jpeg" data-cmp-widths="284,385,588,1197" data-asset="/content/dam/dhl/global/core/images/aspect-ratio/4_3/deliverer-opening-vehicle-0001.jpeg">
																									<img class="cmp-image__image cmp-image__image--is-loading" itemprop="contentUrl" alt="" data-cmp-hook-image="image" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div id="c-navigation-flyout-id-flyout_26dbaf17-b454-43cd-b976-3560afb80214" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="c-navigation-menu js--close-trap  " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-flyout_26dbaf17-b454-43cd-b976-3560afb80214" aria-controls="c-navigation-flyout-id-flyout_26dbaf17-b454-43cd-b976-3560afb80214-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Ship&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}">
													<?php echo $translations[$lang]["Envoyer"];?></button>
												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_26dbaf17-b454-43cd-b976-3560afb80214-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																	<div class="container aem-GridColumn aem-GridColumn--default--12">
																		<span class="link-anchor" id="root_container_copy_copy"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--equal-height-desktopcmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																				<div class="container container-border-grey-right aem-GridColumn--default--none aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--offset--default--0">
																					<span class="link-anchor" id="container_copy_copy_container"></span>
																					<span class="link-anchor" id="root_container_copy_copy_container"></span>
																					<div class="cmp-container cmp-container--white  cmp-container--padding-position-top cmp-container--padding-position-bottom  cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--3 aem-Grid--default--3 ">
																							<div class="title title-left title-red title-margin-none aem-GridColumn aem-GridColumn--default--3">
																								<span class="link-anchor" id="container_copy_copy_container_title"></span>
																								<div class="cmp-title" id="title-940ca82794">
																									<h4 class="cmp-title__text cmp-title__text--level4">COMMENCEZ À EXPÉDIER</h4>
																								</div>
																							</div>
																							<div class="separator separator-margin-top separator-color-gray aem-GridColumn aem-GridColumn--default--3">
																								<span class="link-anchor" id="container_copy_copy_container_separator"></span>
																								<div class="cmp-separator" id="separator-bce4f8bae0">
																									<hr class="cmp-separator__horizontal-rule">
																								</div>
																							</div>
																							<div class="teaser teaser-horizontal teaser-horizontal-just-headline teaser-with-image-icon teaser-hide-copy teaser-align-left teaser-top-margin aem-GridColumn aem-GridColumn--default--3">
																								<span class="link-anchor" id="container_copy_copy_container_teaser"></span>
																								<div id="teaser-9a7b3bc575" class="cmp-teaser cmp-teaser--with-overlay-link">
																									<a class="cmp-teaser__link" href="/fr-fr/home/obtenir-un-devis.html" target="_self" data-cmp-clickable="false" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Obtenir un devis&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;COMMENCEZ À EXPÉDIER&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/teaser&quot;,&quot;name&quot;:&quot;Get a Quote&quot;,&quot;topic&quot;:&quot;ship flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}">
																										<div class="cmp-teaser__image">
																											<span class="link-anchor" id="container_copy_copy_container_teaser"></span>
																											<div id="image-9a7b3bc575" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="false" data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/ship_desktop/complex_exp_parcel_high_vol_directmail_frt_dgf/master/_jcr_content/root/container_copy_copy/container/teaser.coreimg{.width}.svg/1679920468880/manifest-received-rgb-red.svg" data-asset="/content/dam/dhl/global/core/images/icons/general-icons/manifest_received_rgb_red.svg">
																												<img src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/ship_desktop/complex_exp_parcel_high_vol_directmail_frt_dgf/master/_jcr_content/root/container_copy_copy/container/teaser.coreimg.svg/1679920468880/manifest-received-rgb-red.svg" class="cmp-image__image" itemprop="contentUrl" alt="" data-cmp-hook-image="image">
																											</div>
																										</div>
																										<div class="cmp-teaser__content">
																											<h2 class="cmp-teaser__title">Obtenir un devis</h2>
																										</div>
																									</a>
																								</div>
																							</div>
																							<div class="teaser teaser-horizontal teaser-horizontal-just-headline teaser-with-image-icon teaser-hide-copy teaser-align-left teaser-top-margin aem-GridColumn aem-GridColumn--default--3">
																								<span class="link-anchor" id="container_copy_copy_container_teaser_copy"></span>
																								<div id="teaser-01a2cb1cc8" class="cmp-teaser cmp-teaser--with-overlay-link">
																									<a class="cmp-teaser__link" href="/fr-fr/home/reserver-en-ligne.html" target="_self" data-cmp-clickable="false" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Envoyer maintenant&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;COMMENCEZ À EXPÉDIER&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/teaser&quot;,&quot;name&quot;:&quot;Ship Now&quot;,&quot;topic&quot;:&quot;ship flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}">
																										<div class="cmp-teaser__image">
																											<span class="link-anchor" id="container_copy_copy_container_teaser_copy"></span>
																											<div id="image-01a2cb1cc8" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="false" data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/ship_desktop/complex_exp_parcel_high_vol_directmail_frt_dgf/master/_jcr_content/root/container_copy_copy/container/teaser_copy.coreimg{.width}.svg/1679920469015/calendar-rgb-red.svg" data-asset="/content/dam/dhl/global/core/images/icons/general-icons/calendar_rgb_red.svg">
																												<img src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/ship_desktop/complex_exp_parcel_high_vol_directmail_frt_dgf/master/_jcr_content/root/container_copy_copy/container/teaser_copy.coreimg.svg/1679920469015/calendar-rgb-red.svg" class="cmp-image__image" itemprop="contentUrl" alt="" data-cmp-hook-image="image">
																											</div>
																										</div>
																										<div class="cmp-teaser__content">
																											<h2 class="cmp-teaser__title">Envoyer maintenant</h2>
																										</div>
																									</a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="container aem-GridColumn--default--none aem-GridColumn--default--9 aem-GridColumn aem-GridColumn--offset--default--0">
																					<span class="link-anchor" id="container_copy_copy_container_copy"></span>
																					<span class="link-anchor" id="root_container_copy_copy_container_copy"></span>
																					<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--9 aem-Grid--default--9 ">
																							<div class="container aem-GridColumn--default--9 aem-GridColumn">
																								<span class="link-anchor" id="container_copy_container_2068617201"></span>
																								<span class="link-anchor" id="container_copy_copy_container_copy_container_2068617201"></span>
																								<span class="link-anchor" id="root_container_copy_copy_container_copy_container_2068617201"></span>
																								<div class="cmp-container cmp-container--white  cmp-container--padding-position-top  cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																									<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																										<div class="title title-left title-black title-margin-none aem-GridColumn aem-GridColumn--default--12">
																											<span class="link-anchor" id="container_copy_container_2068617201_title"></span>
																											<div class="cmp-title" id="title-1aa11426e8">
																												<h4 class="cmp-title__text cmp-title__text--level4">En savoir plus</h4>
																											</div>
																										</div>
																										<div class="separator separator-margin-top separator-color-gray aem-GridColumn aem-GridColumn--default--12">
																											<span class="link-anchor" id="container_copy_container_2068617201_separator"></span>
																											<div class="cmp-separator" id="separator-718992d123">
																												<hr class="cmp-separator__horizontal-rule">
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="container aem-GridColumn--default--9 aem-GridColumn">
																								<span class="link-anchor" id="container_copy_container"></span>
																								<span class="link-anchor" id="container_copy_copy_container_copy_container"></span>
																								<span class="link-anchor" id="root_container_copy_copy_container_copy_container"></span>
																								<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--equal-height-desktopcmp-container--left-on-top">
																									<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																										<div class="container container-border-grey-right aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																											<span class="link-anchor" id="container_container_1998984224"></span>
																											<span class="link-anchor" id="container_copy_container_container_1998984224"></span>
																											<span class="link-anchor" id="container_copy_copy_container_copy_container_container_1998984224"></span>
																											<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--bottom-alignedcmp-container--left-on-top">
																												<div class="aem-Grid aem-Grid--4 aem-Grid--default--4 ">
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_1998984224_container"></span>
																														<span class="link-anchor" id="container_container_1998984224_container"></span>
																														<span class="link-anchor" id="container_copy_container_container_1998984224_container"></span>
																														<div class="cmp-container cmp-container--white  cmp-container--padding-position-top  cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="title title-left title-black title-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_1998984224_container_title"></span>
																																	<div class="cmp-title" id="title-8786dfc657">
																																		<h5 class="cmp-title__text cmp-title__text--level5">
																																			Documents et colis
																																		</h5>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_1998984224_container_copy_11368"></span>
																														<span class="link-anchor" id="container_container_1998984224_container_copy_11368"></span>
																														<span class="link-anchor" id="container_copy_container_container_1998984224_container_copy_11368"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-bottom cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="list bullet-type-none list-link-icon-right aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_1998984224_container_copy_11368_list"></span>
																																	<ul id="list-d0f24afc7d" class="cmp-list">
																																		<li class="cmp-list__item ">
																																			<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/express.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;topic&quot;:&quot;ship flyout&quot;}" title="Expédition de documents et colis express"><span class="cmp-list__item-title">Expédition de documents et colis express</span></a>
																																		</li>
																																		<li class="cmp-list__item ">
																																			<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/expedier/options-d-expedition-pour-la-vente-au-detail-et-les-gros-volumes.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;topic&quot;:&quot;ship flyout&quot;}" title="Expédition de gros volumes (professionnels uniquement)"><span class="cmp-list__item-title">Expédition de gros volumes (professionnels uniquement)</span></a>
																																		</li>
																																		<li class="cmp-list__item ">
																																			<a class="cmp-list__item-link cmp-list__item-link--external" href="/fr-fr/home/expedier/courrier-direct-pour-entreprises.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;topic&quot;:&quot;ship flyout&quot;}" target="_blank" title="Courrier direct pour entreprises" rel="noopener noreferrer"><span class="cmp-list__item-title">Courrier direct pour entreprises</span></a>
																																		</li>
																																	</ul>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div class="container container-border-grey-right aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																											<span class="link-anchor" id="container_container_239762996"></span>
																											<span class="link-anchor" id="container_copy_container_container_239762996"></span>
																											<span class="link-anchor" id="container_copy_copy_container_copy_container_container_239762996"></span>
																											<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--bottom-alignedcmp-container--left-on-top">
																												<div class="aem-Grid aem-Grid--4 aem-Grid--default--4 ">
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_239762996_container_copy"></span>
																														<span class="link-anchor" id="container_container_239762996_container_copy"></span>
																														<span class="link-anchor" id="container_copy_container_container_239762996_container_copy"></span>
																														<div class="cmp-container cmp-container--white  cmp-container--padding-position-top  cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="title title-left title-black title-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_239762996_container_copy_title"></span>
																																	<div class="cmp-title" id="title-8bcf761cc7">
																																		<h5 class="cmp-title__text cmp-title__text--level5">
																																			Palettes, conteneurs et marchandises
																																		</h5>
																																	</div>
																																</div>
																																<div class="text text-left text-grey text-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_239762996_container_copy_text"></span>
																																	<div id="text-48e4e6a1ad" class="cmp-text">
																																		<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																																			<span class="cmp-text__inline-text cmp-text__inline-text--regular-desc-text">Professionnels uniquement</span>
																																		</p>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_239762996_container"></span>
																														<span class="link-anchor" id="container_container_239762996_container"></span>
																														<span class="link-anchor" id="container_copy_container_container_239762996_container"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--gutter-21cmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																																<div class="text text-margin-none aem-GridColumn aem-GridColumn--default--12">
																																	<span class="link-anchor" id="container_239762996_container_text"></span>
																																	<div id="text-189e404053" class="cmp-text">
																																		<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																																			Expédition de fret aérien, maritime, routier et ferroviaire, et services de logistique et de dédouanement
																																		</p>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_239762996_container_copy_10993"></span>
																														<span class="link-anchor" id="container_container_239762996_container_copy_10993"></span>
																														<span class="link-anchor" id="container_copy_container_container_239762996_container_copy_10993"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-bottom cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--gutter-21cmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="button button-color-secondary button-width-flexible button-size-small aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_239762996_container_copy_10993_button"></span>
																																	<a class="cmp-button" id="button-d326b0df8d" href="/fr-fr/home/expedier/options-d-expedition-de-fret.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Découvrir les services de fret&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Explore Freight Services&quot;,&quot;topic&quot;:&quot;ship flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">Découvrir les services de fret</span></a>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																											<span class="link-anchor" id="container_container_360086012"></span>
																											<span class="link-anchor" id="container_copy_container_container_360086012"></span>
																											<span class="link-anchor" id="container_copy_copy_container_copy_container_container_360086012"></span>
																											<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--bottom-alignedcmp-container--left-on-top">
																												<div class="aem-Grid aem-Grid--4 aem-Grid--default--4 ">
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_360086012_container_copy_10993"></span>
																														<span class="link-anchor" id="container_container_360086012_container_copy_10993"></span>
																														<span class="link-anchor" id="container_copy_container_container_360086012_container_copy_10993"></span>
																														<div class="cmp-container cmp-container--white  cmp-container--padding-position-top  cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="title title-left title-black title-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_360086012_container_copy_10993_title"></span>
																																	<div class="cmp-title" id="title-c950ebe4ba">
																																		<h5 class="cmp-title__text cmp-title__text--level5">
																																			DHL pour le Business
																																		</h5>
																																	</div>
																																</div>
																																<div class="text text-left text-grey text-margin-none aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_360086012_container_copy_10993_text_copy"></span>
																																	<div id="text-47810087db" class="cmp-text">
																																		<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																																			<span class="cmp-text__inline-text cmp-text__inline-text--regular-desc-text">Frequent Shippers</span>
																																		</p>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_360086012_container"></span>
																														<span class="link-anchor" id="container_container_360086012_container"></span>
																														<span class="link-anchor" id="container_copy_container_container_360086012_container"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--gutter-21cmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																																<div class="text text-left text-margin-none aem-GridColumn aem-GridColumn--default--12">
																																	<span class="link-anchor" id="container_360086012_container_text"></span>
																																	<div id="text-d87f38f23a" class="cmp-text">
																																		<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																																			Expédiez souvent ou régulièrement ; découvrez les avantages de l'ouverture d'un compte
																																		</p>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																													<div class="container aem-GridColumn--default--none aem-GridColumn aem-GridColumn--offset--default--0 aem-GridColumn--default--4">
																														<span class="link-anchor" id="container_360086012_container_copy_copy"></span>
																														<span class="link-anchor" id="container_container_360086012_container_copy_copy"></span>
																														<span class="link-anchor" id="container_copy_container_container_360086012_container_copy_copy"></span>
																														<div class="cmp-container cmp-container--whitecmp-container--padding-position-bottom cmp-container--padding-position-left cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																															<div class="aem-Grid aem-Grid--12 aem-Grid--default--4 ">
																																<div class="button button-color-secondary button-width-flexible button-size-small aem-GridColumn aem-GridColumn--default--4">
																																	<span class="link-anchor" id="container_360086012_container_copy_copy_button"></span>
																																	<a class="cmp-button" id="button-55cb7e47c6" href="/fr-fr/home/dhl-pour-le-business.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Options d'expéditions fréquentes&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Frequent Shipping Options&quot;,&quot;topic&quot;:&quot;ship flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">Options d'expéditions fréquentes</span></a>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div id="c-navigation-flyout-id-flyout_7d129677-c69a-4510-a935-3c92b7b29193" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="c-navigation-menu js--close-trap has-icon  " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-flyout_7d129677-c69a-4510-a935-3c92b7b29193" aria-controls="c-navigation-flyout-id-flyout_7d129677-c69a-4510-a935-3c92b7b29193-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Enterprise Logistics Services&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}"><span>Services logistiques d'entreprise</span></button>
												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_7d129677-c69a-4510-a935-3c92b7b29193-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																	<div class="container aem-GridColumn aem-GridColumn--default--12">
																		<span class="link-anchor" id="root_container"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--equal-height-desktopcmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																				<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
																					<span class="link-anchor" id="container_container"></span>
																					<span class="link-anchor" id="root_container_container"></span>
																					<div class="cmp-container cmp-container--white  cmp-container--padding-position-top cmp-container--padding-position-bottom  cmp-container--padding-position-rightcmp-container--padding-size-21cmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--12 aem-Grid--default--6 aem-Grid--phone--12 ">
																							<div class="title title-left title-red title-margin-none aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_title"></span>
																								<div class="cmp-title" id="title-ec91e8088d">
																									<h4 class="cmp-title__text cmp-title__text--level4">SERVICES LOGISTIQUES </h4>
																								</div>
																							</div>
																							<div class="text text-left text-default text-black text-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_text"></span>
																								<div id="text-a5ba4791f8" class="cmp-text">
																									<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																										<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Notre division Supply Chain crée des solutions personnalisées pour les grandes entreprises.</span>
																									</p>
																									<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																										<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Découvrez pourquoi DHL Supply Chain est le prestataire de services logistiques (3PL) idéal.</span>
																									</p>
																								</div>
																							</div>
																							<div class="button button-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_button"></span>
																								<a class="cmp-button" id="button-dc77a812b7" href="/fr-fr/home/chaine-logistique.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Découvrez DHL Supply Chain&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;SERVICES LOGISTIQUES&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Explore DHL Supply Chain&quot;,&quot;topic&quot;:&quot;enterprise logistics services flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">Découvrez DHL Supply Chain </span></a>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--phone--hide aem-GridColumn--default--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--tablet--hide">
																					<span class="link-anchor" id="container_container_copy"></span>
																					<span class="link-anchor" id="root_container_container_copy"></span>
																					<div class="cmp-container whitenonecmp-container--left-on-top">
																						<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--6 aem-Grid--default--6 aem-Grid--phone--6 ">
																							<div class="image aem-GridColumn--phone--6 aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--default--6">
																								<span class="link-anchor" id="container_container_copy_image"></span>
																								<div id="image-1dbe16f1a8" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="false" data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/enterprise_logistics_1871926873/standard_enterprise_desktop/master/_jcr_content/root/container/container_copy/image.coreimg.80{.width}.jpeg/1672225725247/workers-in-warehouse-0001.jpeg" data-cmp-widths="284,385,588,1197" data-asset="/content/dam/dhl/global/core/images/aspect-ratio/4_3/workers-in-warehouse-0001.jpeg">
																									<img class="cmp-image__image cmp-image__image--is-loading" itemprop="contentUrl" alt="" data-cmp-hook-image="image" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="c-navigation-flyout">
												<a class="c-navigation-menu--link link has-icon" href="" data-selected="false"><span>Service Client</span></a>
											</div>
										</li>
									</ul>
									<button class="c-navigation-menu-scroll has-icon" aria-label="Faites défiler vers la droite Faites défiler vers la droite" data-on-search-hide="" data-scroll-direction="right" tabindex="-1" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}"></button>
									<ul class="c-navigation--menu c-navigation-menu--language-list-container">
										<li>
											<form action="" method="GET" class="c-navigation-search--form js--navigation-search--form" data-open="" data-show-label="false" id="nav-search-sticky_a52f80a6-1d08-4f26-9731-9f1d2bc88619">
												<label for="nav-search-sticky--input_a52f80a6-1d08-4f26-9731-9f1d2bc88619" class="c-navigation-search--input-label has-icon icon-search" tabindex="0"><span>Search</span></label>
												<div class="c-navigation-search--input-container">
													<em class="c-navigation-search--icon icon-search"></em>
													<input class="c-navigation-search--input js--navigation-search--input" id="nav-search-sticky--input_a52f80a6-1d08-4f26-9731-9f1d2bc88619" autocomplete="off" max-num-list="5" type="text" placeholder="<?php echo $translations[$lang]["Rechercher"];?> sur le site dhl.com" name="q" data-target="#nav-search-sticky_a52f80a6-1d08-4f26-9731-9f1d2bc88619" tabindex="0" aria-autocomplete="list" aria-owns="search-quick-list_a52f80a6-1d08-4f26-9731-9f1d2bc88619" aria-expanded="false">
													<i class="c-navigation-search--close icon-cancel js--navigation-search--close" data-target="#nav-search-sticky_a52f80a6-1d08-4f26-9731-9f1d2bc88619" tabindex="0" title="Close searchbar" aria-label="Close searchbar"></i>
												</div>
												<div class="c-navigation-search--quicklinks js--navigation-search--quicklinks">
													<ul class="shadow-small" id="search-quick-list_a52f80a6-1d08-4f26-9731-9f1d2bc88619"></ul>
												</div>
											</form>
										</li>
									</ul>
									<button class="c-navigation-mobile-menu js--close-trap-prefer" aria-controls="sticky_menu_229d67c7-7b9a-453b-9f9d-fae3eaee4d4d" aria-label="Open and close menu" aria-expanded="false">
										<div class="c-navigation-mobile-menu--bar" aria-hidden="true"></div>
										<div class="c-navigation-mobile-menu--bar" aria-hidden="true"></div>
										<div class="c-navigation-mobile-menu--bar" aria-hidden="true"></div>
									</button>
									<ul class="c-navigation--menu" role="list">
										<li>
											<div id="c-navigation-flyout-id-customer-flyout_e17127ce-906b-4095-ab26-a0eb1d775cd1" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
												<button class="c-navigation-menu js--close-trap has-icon login-button " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-customer-flyout_e17127ce-906b-4095-ab26-a0eb1d775cd1" aria-controls="c-navigation-flyout-id-customer-flyout_e17127ce-906b-4095-ab26-a0eb1d775cd1-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Customer Portal Logins&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}"><?php echo $translations[$lang]["portail"];?></button>
												<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-customer-flyout_e17127ce-906b-4095-ab26-a0eb1d775cd1-aria">
													<div class="c-navigation-flyout-content" data-flyout-size="one-column-right" data-flyout-content="">
														<div>
															<div class="xf-content-height">
																<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																	<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
																		<span class="link-anchor" id="root_container_copy_copy_"></span>
																		<div class="cmp-container cmp-container--whitecmp-container--padding-size-28cmp-container--left-on-top">
																			<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																				<div class="title title-left title-black title-margin-none aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_copy__title"></span>
																					<div class="cmp-title" id="title-828cfe3f84">
																						<h4 class="cmp-title__text cmp-title__text--level4">Se connecter à</h4>
																					</div>
																				</div>
																				<div class="list bullet-type-none top-margin separator-lines list-link-icon-right aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_copy__list"></span>
																					<ul id="list-236116a51d" class="cmp-list">
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="/fr-fr/home/redirect/express/portal.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;MyDHL+&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="MyDHL+" rel="noopener noreferrer"><span class="cmp-list__item-title">MyDHL+</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://keycloak.mydhli.com/auth/realms/DCI/protocol/openid-connect/auth?scope=openid+web-origins&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fapp.mydhli.com%2Flogin&amp;client_id=myDHLi&amp;ui_locales=en" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;myDHLi&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="myDHLi" rel="noopener noreferrer"><span class="cmp-list__item-title">myDHLi</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://activetracing.dhl.com" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;DHL Active Tracing&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="DHL Active Tracing" rel="noopener noreferrer"><span class="cmp-list__item-title">DHL Active Tracing</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://www.ax4.com/ax4/?ID=2012421" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Road Freight Online Booking&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="Road Freight Online Booking" rel="noopener noreferrer"><span class="cmp-list__item-title">Road Freight Online Booking</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://mysupplychain.dhl.com/" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;MySupplyChain&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="MySupplyChain" rel="noopener noreferrer"><span class="cmp-list__item-title">MySupplyChain</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://tas.dhl.com/tas/servlet/login" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;DHL Trade Automation Services&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="DHL Trade Automation Services" rel="noopener noreferrer"><span class="cmp-list__item-title">DHL Trade Automation Services</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://www.dhlsameday.com/SkyPortal/Default.aspx?ReturnUrl=%2fSkyPortal%2f" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;DHL SameDay&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="DHL SameDay" rel="noopener noreferrer"><span class="cmp-list__item-title">DHL SameDay</span></a>
																						</li>
																						<li class="cmp-list__item ">
																							<a class="cmp-list__item-link cmp-list__item-link--external" href="https://lifetrack.dhl.com/" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;topic&quot;:&quot;portal login flyout&quot;}" target="_blank" title="LifeTrack" rel="noopener noreferrer"><span class="cmp-list__item-title">LifeTrack</span></a>
																						</li>
																					</ul>
																				</div>
																				<div class="button button-margin-top button-width-flexible aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--12">
																					<span class="link-anchor" id="root_container_copy_copy__button"></span>
																					<a class="cmp-button" id="button-8e6d53ac58" href="/fr-fr/home/se-connecter.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;En savoir plus sur les portails&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;Se connecter à&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Learn About Portals&quot;,&quot;topic&quot;:&quot;portal login fly out&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">En savoir plus sur les portails</span></a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</section>
							</nav>
							<nav class="c-navigation--bar c-navigation-mobile-menu" id="sticky_menu_229d67c7-7b9a-453b-9f9d-fae3eaee4d4d" role="navigation" aria-label="Mobile Primary Navigation">
								<ul class="c-navigation--menu  c-navigation-mobile-menu" role="list" data-scrollable="" data-scroll-menu="">
									<li>
										<div id="c-navigation-flyout-id-flyout_006f4236-4b2f-4da7-b205-acd31bf7b90c" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="true">
											<button class="c-navigation-menu js--close-trap has-icon  " aria-expanded="true" data-flyout-target="#c-navigation-flyout-id-flyout_006f4236-4b2f-4da7-b205-acd31bf7b90c" aria-controls="c-navigation-flyout-id-flyout_006f4236-4b2f-4da7-b205-acd31bf7b90c-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Track&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}"><span>Suivi</span></button>
											<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_006f4236-4b2f-4da7-b205-acd31bf7b90c-aria">
												<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
													<div>
														<div class="xf-content-height">
															<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																<div class="container aem-GridColumn aem-GridColumn--default--12">
																	<span class="link-anchor" id="root_container"></span>
																	<div class="cmp-container cmp-container--whitecmp-container--padding-size-0cmp-container--left-on-top">
																		<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																			<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
																				<span class="link-anchor" id="container_container"></span>
																				<span class="link-anchor" id="root_container_container"></span>
																				<div class="cmp-container cmp-container--whitecmp-container--gutter-21cmp-container--padding-size-14cmp-container--left-on-top">
																					<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--12 aem-Grid--default--6 aem-Grid--phone--12 ">
																						<div class="title title-left title-red title-margin-none aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--phone--hide aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--tablet--hide">
																							<span class="link-anchor" id="container_container_title"></span>
																							<div class="cmp-title" id="title-2758802401">
																								<h4 class="cmp-title__text cmp-title__text--level4">SUIVI DE VOTRE EXPÉDITION</h4>
																							</div>
																						</div>
																						<div class="text text-left text-default text-black text-margin-top aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--phone--hide aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--tablet--hide">
																							<span class="link-anchor" id="container_container_text"></span>
																							<div id="text-6be28bf3ec" class="cmp-text">
																								<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																									<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Obtenez le statut de votre expédition en transit</span>
																								</p>
																							</div>
																						</div>
																						<div class="c-tracking-input--form c-voc-tracking-bar js--tracking-bar">
																							<form class="c-voc-tracking-bar--form js--tracking-bar--form" action="/fr-fr/home/suivi.html" method="GET" autosubmit="true">
																								<div class="c-voc-tracking-bar--input-outer-group">
																									<div class="c-voc-tracking-bar--input-inner-group">
																										<input class="c-voc-tracking-bar--input js--tracking-bar--input" id="c-voc-tracking-input-box-ace9dce0-db98-416d-be38-4be5a49fc6cb" name="tracking-id" type="text" data-error-message="Veuillez saisir votre/vos numéro(s) de suivi" required="">
																										<label class="c-voc-tracking-bar--element-label" for="c-voc-tracking-input-box-ace9dce0-db98-416d-be38-4be5a49fc6cb">Saisissez votre/vos numéro(s) de suivi</label>
																										<button class="c-voc-tracking-bar js--tracking-bar base-button" type="submit">Suivre</button>
																									</div>
																								</div>
																								<p tabindex="-1" class="c-form--element-base c-form-step--error-message js--tracking-invalid--focus">
																									Veuillez saisir votre/vos numéro(s) de suivi
																								</p>
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--phone--hide aem-GridColumn--default--none aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0 aem-GridColumn--tablet--hide">
																				<span class="link-anchor" id="container_container_copy"></span>
																				<span class="link-anchor" id="root_container_container_copy"></span>
																				<div class="cmp-container whitenonecmp-container--left-on-top">
																					<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--6 aem-Grid--default--6 aem-Grid--phone--12 ">
																						<div class="image aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--tablet--6 aem-GridColumn--default--6">
																							<span class="link-anchor" id="container_container_copy_image"></span>
																							<div id="image-9c585a0d0d" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject" data-cmp-lazy="false" data-cmp-lazythreshold="0" data-cmp-src="/content/experience-fragments/dhl/fr/core/primary_navigation/flyouts/standard_track_desktop/standard_track_mobile/_jcr_content/root/container/container_copy/image.coreimg.80{.width}.jpeg/1675696457823/deliverer-opening-vehicle-0001.jpeg" data-cmp-widths="284,385,588,1197" data-asset="/content/dam/dhl/global/core/images/aspect-ratio/4_3/deliverer-opening-vehicle-0001.jpeg">
																								<img class="cmp-image__image cmp-image__image--is-loading" itemprop="contentUrl" alt="" data-cmp-hook-image="image" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div id="c-navigation-flyout-id-flyout_5d803c90-97d9-4415-af50-5ec31332e9be" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
											<button class="c-navigation-menu js--close-trap has-icon  " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-flyout_5d803c90-97d9-4415-af50-5ec31332e9be" aria-controls="c-navigation-flyout-id-flyout_5d803c90-97d9-4415-af50-5ec31332e9be-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Ship&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}"><?php echo $translations[$lang]["Envoyer"];?></button>
											<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_5d803c90-97d9-4415-af50-5ec31332e9be-aria">
												<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
													<div>
														<div class="xf-content-height">
															<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																<div class="container aem-GridColumn aem-GridColumn--default--12">
																	<span class="link-anchor" id="root_container_copy"></span>
																	<div class="cmp-container cmp-container--whitecmp-container--gutter-21cmp-container--padding-size-14cmp-container--left-on-top">
																		<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 ">
																			<div class="list bullet-type-none top-margin aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_list"></span>
																				<ul id="list-fe7ae2def1" class="cmp-list">
																					<li class="cmp-list__item ">
																						<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/obtenir-un-devis.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Get a Quote&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Obtenir une cotation"><span class="cmp-list__item-title">Obtenir une cotation</span></a>
																					</li>
																					<li class="cmp-list__item ">
																						<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/reserver-en-ligne.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Ship Now&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Envoyer maintenant"><span class="cmp-list__item-title">Envoyer maintenant</span></a>
																					</li>
																				</ul>
																			</div>
																			<div class="title title-margin-bottom title-margin-top aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_title"></span>
																				<div class="cmp-title" id="title-96a15eac68">
																					<h5 class="cmp-title__text cmp-title__text--level5">
																						Documents et colis
																					</h5>
																				</div>
																			</div>
																			<div class="separator separator-color-gray aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_separator"></span>
																				<div class="cmp-separator" id="separator-d01da93964">
																					<hr class="cmp-separator__horizontal-rule">
																				</div>
																			</div>
																			<div class="list bullet-type-none top-margin aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_list_copy"></span>
																				<ul id="list-0b5fb5f342" class="cmp-list">
																					<li class="cmp-list__item ">
																						<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/express.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Express document and package shipping&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Expédition de documents et colis express"><span class="cmp-list__item-title">Expédition de documents et colis express</span></a>
																					</li>
																					<li class="cmp-list__item ">
																						<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/expedier/options-d-expedition-pour-la-vente-au-detail-et-les-gros-volumes.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Volume shipping (Business Only)&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Expédition de gros volumes (professionnels uniquement)"><span class="cmp-list__item-title">Expédition de gros volumes (professionnels uniquement)</span></a>
																					</li>
																					<li class="cmp-list__item ">
																						<a class="cmp-list__item-link cmp-list__item-link--external" href="/fr-fr/home/expedier/courrier-direct-pour-entreprises.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Direct mail for business&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" target="_blank" title="Courrier direct pour entreprises" rel="noopener noreferrer"><span class="cmp-list__item-title">Courrier direct pour entreprises</span></a>
																					</li>
																				</ul>
																			</div>
																			<div class="title title-margin-bottom title-margin-top aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_title_copy"></span>
																				<div class="cmp-title" id="title-be1354c17e">
																					<h5 class="cmp-title__text cmp-title__text--level5">
																						Palettes, conteneurs et marchandises (professionnels uniquement)
																					</h5>
																				</div>
																			</div>
																			<div class="separator separator-color-gray aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_separator_copy"></span>
																				<div class="cmp-separator" id="separator-911a9b274b">
																					<hr class="cmp-separator__horizontal-rule">
																				</div>
																			</div>
																			<div class="list bullet-type-none top-margin spacing-large aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_list_1031938493_copy"></span>
																				<ul id="list-e248a0e008" class="cmp-list">
																					<li class="cmp-list__item ">
																						<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/expedier/options-d-expedition-de-fret.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Frequent Shipping Options&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Découvrir les services de fret"><span class="cmp-list__item-title">Découvrir les services de fret</span></a>
																					</li>
																				</ul>
																			</div>
																			<div class="title title-margin-bottom title-margin-top aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_title_copy_2019125951"></span>
																				<div class="cmp-title" id="title-5408498163">
																					<h5 class="cmp-title__text cmp-title__text--level5">
																						DHL pour le Business 
																					</h5>
																				</div>
																			</div>
																			<div class="separator separator-color-gray aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_separator_copy_2103585291"></span>
																				<div class="cmp-separator" id="separator-deabb04b19">
																					<hr class="cmp-separator__horizontal-rule">
																				</div>
																			</div>
																			<div class="list bullet-type-none top-margin spacing-large aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--12">
																				<span class="link-anchor" id="root_container_copy_list_1031938493_copy_1784895145"></span>
																				<ul id="list-6cce89f2a8" class="cmp-list">
																					<li class="cmp-list__item ">
																						<a class="cmp-list__item-link cmp-list__item-link--internal" href="/fr-fr/home/dhl-pour-le-business.html" data-tracking="{&quot;component&quot;:&quot;dhl/components/core/list&quot;,&quot;name&quot;:&quot;Frequent Shipping Options&quot;,&quot;topic&quot;:&quot;ship mobile flyout&quot;}" title="Options d'expéditions fréquentes"><span class="cmp-list__item-title">Options d'expéditions fréquentes</span></a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div id="c-navigation-flyout-id-flyout_2cda19c7-98e7-421a-9218-79bb25d2ca08" class="c-navigation-flyout js--navigation-flyout js--auto-close-on-tab-out js--auto-close-desktop" data-flyout-selected="false" data-flyout-open-by-default="false">
											<button class="c-navigation-menu js--close-trap has-icon  " aria-expanded="false" data-flyout-target="#c-navigation-flyout-id-flyout_2cda19c7-98e7-421a-9218-79bb25d2ca08" aria-controls="c-navigation-flyout-id-flyout_2cda19c7-98e7-421a-9218-79bb25d2ca08-aria" data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Enterprise Logistics Services&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}"><span>Services logistiques d'entreprise</span></button>
											<div class="c-navigation-flyout-container" tabindex="-1" aria-hidden="true" data-flyout-container="" id="c-navigation-flyout-id-flyout_2cda19c7-98e7-421a-9218-79bb25d2ca08-aria">
												<div class="c-navigation-flyout-content" data-flyout-size="full" data-flyout-content="">
													<div>
														<div class="xf-content-height">
															<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
																<div class="container aem-GridColumn aem-GridColumn--default--12">
																	<span class="link-anchor" id="root_container"></span>
																	<div class="cmp-container cmp-container--whitecmp-container--gutter-21cmp-container--padding-size-0cmp-container--left-on-top">
																		<div class="aem-Grid aem-Grid--12 aem-Grid--tablet--12 aem-Grid--default--12 aem-Grid--phone--12 ">
																			<div class="container aem-GridColumn--tablet--12 aem-GridColumn--offset--tablet--0 aem-GridColumn--default--none aem-GridColumn--phone--none aem-GridColumn--phone--12 aem-GridColumn--tablet--none aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--offset--phone--0 aem-GridColumn--offset--default--0">
																				<span class="link-anchor" id="container_container"></span>
																				<span class="link-anchor" id="root_container_container"></span>
																				<div class="cmp-container cmp-container--whitecmp-container--gutter-21cmp-container--padding-size-14cmp-container--left-on-top">
																					<div class="aem-Grid aem-Grid--6 aem-Grid--tablet--12 aem-Grid--default--6 aem-Grid--phone--12 ">
																						<div class="text text-left text-default text-black text-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																							<span class="link-anchor" id="container_container_text"></span>
																							<div id="text-9d32ff380d" class="cmp-text">
																								<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																									<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Notre division Supply Chain crée des solutions personnalisées pour les grandes entreprises.</span>
																								</p>
																								<p class="cmp-text__inline-text cmp-text__inline-text--small-body-copy">
																									<span class="cmp-text__inline-text cmp-text__inline-text--regular-body-copy">Découvrez pourquoi DHL Supply Chain est le prestataire de services logistiques (3PL) idéal.</span>
																								</p>
																							</div>
																						</div>
																						<div class="button button-margin-top aem-GridColumn--tablet--12 aem-GridColumn--phone--12 aem-GridColumn aem-GridColumn--default--6">
																							<span class="link-anchor" id="container_container_button"></span>
																							<a class="cmp-button" id="button-28f21ab35c" href="/fr-fr/home/chaine-logistique.html" target="_self" data-analytics="{&quot;trackedInteractions&quot;:&quot;basic&quot;,&quot;interactionType&quot;:&quot;dhl_utf_contentInteraction&quot;,&quot;content&quot;:{&quot;name&quot;:&quot;Découvrez DHL Supply Chain&quot;,&quot;interaction&quot;:&quot;Click&quot;,&quot;context&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;component&quot;:&quot;dhl/components/core/button&quot;,&quot;name&quot;:&quot;Explore DHL Supply Chain&quot;,&quot;topic&quot;:&quot;enterprise logistics services flyout&quot;},&quot;type&quot;:&quot;Button&quot;}}" data-cmp-clickable="false"><span class="cmp-button__text">Découvrez DHL Supply Chain </span></a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="c-navigation-flyout">
											<a class="c-navigation-menu--link link has-icon" href=""  data-selected="false">
												<span>Service Client</span></a>
										</div>
									</li>
									<li>
										<div class="c-navigation-flyout">
											<a class="c-navigation-menu--link link has-icon login-button" href="/fr-fr/home/se-connecter.html" target="_blank" aria-describedby="a11y-message--new-window " data-tracking="{&quot;component&quot;:&quot;dhl/components/navigation/primaryxf&quot;,&quot;name&quot;:&quot;Customer Portal Logins&quot;,&quot;topic&quot;:&quot;primary navigation&quot;}" data-selected="false" rel="noopener noreferrer">
												<?php echo $translations[$lang]["portail"];?></a>
										</div>
									</li>
									<li data-on-search-hide="" class="c-nav-primary--globalnewsflash js--nav-primary--globalnewsflash not-visible">
										<a class="c-navigation-menu--meta-link link has-icon icon-exception" href="/global-en/home/global-news-alerts.html" data-selected="" target="_self" rel="noopener noreferrer">
											<span><?php echo $translations[$lang]["Alertes"];?></span></a>
									</li>
									<li>
										<form action="/fr-fr/home/<?php echo $translations[$lang]["Rechercher"];?>.html" method="GET" class="c-navigation-search--form js--navigation-search--form" data-open="" id="nav-search-mobile_0960a691-08cd-4d07-bd15-d31371bf71b2">
											<label for="nav-search-mobile--input_0960a691-08cd-4d07-bd15-d31371bf71b2" class="c-navigation-search--input-label has-icon icon-search" tabindex="0"><span><?php echo $translations[$lang]["Rechercher"];?></span></label>
											<div class="c-navigation-search--input-container">
												<em class="c-navigation-search--icon icon-search"></em>
												<input class="c-navigation-search--input js--navigation-search--input" id="nav-search-mobile--input_0960a691-08cd-4d07-bd15-d31371bf71b2" autocomplete="off" max-num-list="5" type="text" placeholder="<?php echo $translations[$lang]["Rechercher"];?> sur le site dhl.com" name="q" data-target="#nav-search-mobile_0960a691-08cd-4d07-bd15-d31371bf71b2" tabindex="0" aria-autocomplete="list" aria-owns="search-quick-list_0960a691-08cd-4d07-bd15-d31371bf71b2" aria-expanded="false">
												<i class="c-navigation-search--close icon-cancel js--navigation-search--close" data-target="#nav-search-mobile_0960a691-08cd-4d07-bd15-d31371bf71b2" tabindex="0" title="Close searchbar" aria-label="Close searchbar"></i>
											</div>
											<div class="c-navigation-search--quicklinks js--navigation-search--quicklinks">
												<ul class="shadow-small" id="search-quick-list_0960a691-08cd-4d07-bd15-d31371bf71b2"></ul>
											</div>
										</form>
									</li>
									<li>
										<a class="c-navigation-menu--meta-link link has-icon" href="/fr-fr/home/selecteur-de-lieu.html" title="Sélectionnez l'emplacement"><span class="flag-icon flag-icon-fr">Changer de lieu(FR)</span></a>
									</li>
									<li class="c-navigation-menu--language-list">
										<a class="c-navigation-menu--meta-link"><span>Choisir la langue</span></a>
										<a class="c-navigation-menu--meta-link link has-icon js--nav-lang" href="/fr-en/home.html" data-selected="false" target="_self" title="Passer de la langue à la: English" rel="">EN</a>
										<span class="c-navigation-menu--meta-link is-selected" data-selected="true" title="Français" rel="">FR</span>
									</li>
								</ul>
							</nav>
						</div>
						<!--googleon: all-->
					</div>
				</div>
			</header>
			