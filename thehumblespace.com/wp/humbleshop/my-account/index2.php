<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from thehumblespace.com/wp/humbleshop/my-account/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:17:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		 	<?php
             include("lock.php");
             
             $pass_error="";
             $pass_success="";
             $email_success="";
         	 
             if(isset($_POST['enregistrer']))
                {
                      $pass1=$_POST['reg_password1'];
                  	  $pass2=$_POST['reg_password2'];
                	  $reg_email=$_POST['reg_email'];
                	  
                	  if(!empty($pass1)){
                	  	
                	  	if(!empty($pass2)){

                	  		if($pass1==$pass2){
                	  			$sql="UPDATE `utilisateurs` SET `password`=$pass1 WHERE `id`=$id ;";
                				mysqli_query($conn,$sql);
                				$pass_success="Mot de passe est mit à jour";
                			}
                			else{$pass_error="* Les deux mots de passe ne correspondent pas.";}                				
                         		}
                	  	else{
                	  	$pass_error="Vous devez repeter le mo de passe";
                	  		}

                	  }
                		
                		if($reg_email!=$email){
              
                			$sql="UPDATE `utilisateurs` SET `email`='$reg_email' WHERE `id`=$id ;";
                			mysqli_query($conn,$sql);
                			$email_success="l'adresse email est mit à jour";
                			$email=$reg_email;

                		}
                
                 }            
                
            
             
             ?>




	<meta charset="UTF-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Mon Compte | HumbleShop</title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="../xmlrpc.php" />

	<!--Favicon-->
	<link rel="icon" href="../wp-content/uploads/2013/01/hsfavicon.png">

	<meta name='robots' content='noindex,follow' />
<link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Comments Feed" href="../comments/feed/index.html" />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css'  href='../wp-content/plugins/woocommerce/assets/css/select20235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='yith-woo-featured-video-css'  href='../wp-content/plugins/yith-woocommerce-featured-video/assets/css/woo-featured-video0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/humbleshop/framework/css/bootstrap.min0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-css'  href='../wp-content/themes/humbleshop/framework/css/font0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='../wp-content/themes/humbleshop-child/style0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='ot-dynamic-hs_css-css'  href='../wp-content/themes/humbleshop-child/dynamic2f91.css?ver=2.4.6' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1.1" />
<meta name="generator" content="WooCommerce 2.3.7" />
<link rel='canonical' href='index.html' />
<link rel='shortlink' href='../index64b4.html?p=10' />
	<!-- Open Graph -->
	<meta property="og:title" content="My Account" />
	<meta property="og:url" content="http://thehumblespace.com/wp/humbleshop/my-account/" />
	<meta property="og:site_name" content="HumbleShop" />
	<meta property="og:description" content="" />
	<meta property="og:image" content=""/>

	<style type="text/css">

	@import url(http://fonts.googleapis.com/css?family=Bangers|Lato);			
		.wf-active {font-family: 'Lato',serif;}
	
		.wf-active .logo {
		font-family: 'Bangers', serif;
		font-size: ;
	}

	body {
		
	font-family: ; 
	font-size: ;
	color: ;
	font-variant: ;
	font-weight: ;
	letter-spacing: ;
	line-height: ;
	text-decoration: ;
	text-transform: ;

	background-color: ;
	background-repeat: ;
	background-attachment: ;
	background-position: left top;
	 background-image: url(../wp-content/uploads/2013/01/px_by_Gre3g.png); 	}


	h1,h2,h3,h4,h5,h6 { font-family: ;  }
		
	.well {border-color: ; }
	.btn.theme {border-color : #E55137;}

	a, .product_list_widget li a, flex-caption {color: }
	.pagination>.active>a, {position: relative; color: white} {color: }
	
	a:hover, footer a:hover, footer a.active, aside a, em.on, .theme, .page h5, .page h2:not(.maskprice), .page .woocommerce h3, a.theme , .product .sidebar h5, #comments strong {color: #E55137}
	.feat .nav-pills > .active > a, .feat .nav-pills > .active > a:hover, .product .nav-pills > .active > a, .product .nav-pills > .active > a:hover, button.theme, .share a, .flex-control-paging li a.flex-active, .horizontal-nav li a:hover, .horizontal-nav li li a:hover, .btn.theme, .btn-theme, section.single .onsale, .view-thumb .onsale, .pagination>.active>a, .pagination>.active>a:hover { background: #E55137 }

	.container, .horizontal-nav ul, h6.subhead strong { background: #ffffff }
	button.theme, .share a, .share a:hover, .horizontal-nav li a:hover, .btn.theme, .btn-theme, section.single .onsale, .view-thumb .onsale { color: #ffffff }
	header.prime, .sidebar .tags span, .comments article:hover { background: #F2F2F2 }

	.promo img {border: 1px solid #DDDDDD}
	.horizontal-nav ul, .blog article, .archive article, .search article, .line, hr, .product .sidebar li {border-top: 1px solid #DDDDDD;}
	.product .tab-content.sideline { border-left: 1px solid #DDDDDD }
	header.prime, .horizontal-nav ul, .gmap  { border-bottom: 1px solid #DDDDDD }
	.price_slider_amount button[type="submit"] {color: #E55137 ;}

	footer, footer .container {
		background-color: ;
		background-repeat: ;
		background-attachment: ;
		background-position: ;
		background-image: url();
		color: #777777	}
	footer a {color: #bbbbbb}
	footer .doubleline { 
		border-top:1px solid #333333; 
		border-bottom: 1px solid #333333; 
	}

	
			
	</style>
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
             
            







</head>

<body class="page page-id-10 page-template page-template-page-full page-template-page-full-php woocommerce-account woocommerce-page wf-active">

			
	
	
	<!-- ====== -->
	<!-- TOPBAR -->
	<!-- ====== -->
	<div class="container welcome">
		<div class="row">
			<div class="pull-left greet">
				<span class="hidden-xs">Bienvenue</span> 					
				<span class="hidden-xs">client,</span>
				 <a href="../my-account/index.php">
				<?php
					if (isset($login_session)){
						echo $nom.' '.$prenom;
					}
					else {echo 'Connexion ou Créer un compte';}
				?>
			</a>

				&nbsp;&nbsp;
				
				<a href="logout.php">
					<?php
					if (isset($login_session)){
						echo "(Déconnexion)";}
					?>
				</a>
			</div>

			<div class="pull-right hscart text-right">
				
				<!-- Cart Updates -->
				<div class="counter">
					<a href="javascript:void(0);"><i class="fa fa-shopping-cart"></i> 
						<span class="hidden-xs">Total</span> </a> : <span class="theme"><span class="amount">0.00 DT</span></span>
				</div>
				
				<!-- Bubble Cart Item -->
				<div class="cartbubble">
			
					<div class="arrow-box">

						
						
						<div class="clearfix text-center">
							Aucun produit dans le panier. <br>
							<a href="javascript:void(0)" id="closeit">Fermer</a>
						</div>

						
					</div>
					
				</div>
			</div>
		</div>	
	</div>
	
	
	<!-- ================= -->
	<!-- HEADER & BRANDING -->
	<!-- ================= -->
	
	<div class="container head">
		<div class="row">
			<div class="col-xs-12 clearfix">
				<div class="top row">
					
						<div class="col-sm-8 logo image">
						<a href="../index.html" title="HumbleShop" rel="home">
  						<img src="../wp-content/uploads/2013/01/highreslogo-300x75.png" data-at2x="http://thehumblespace.com/wp/humbleshop/wp-content/uploads/2013/01/retina1.png" alt="" class="img-responsive" />
  						</a>
  						</div>
											
					<div class="searchcart col-sm-4">
													<form role="search" method="get" id="searchform" action="http://thehumblespace.com/wp/humbleshop/" class="topsearch form-inline">
					            <div class="form-group">
					                <input type="text" value="" name="s" id="s" placeholder="Search" class="top-search input-text" />
					                <button type="submit" id="searchsubmit" value="Search" class="btn"><i class="fa fa-search"></i></button>
					                <input type="hidden" name="post_type" value="product" />
					            </div>
					        </form>
							
					</div>
				</div>	
			</div>
		</div>
	</div>

	<!-- ================ -->
	<!-- MAIN NAV SECTION -->
	<!-- ================ -->
	
	<nav class="container">
		<div class="row">		
			<div class="col-12">
				<nav class="horizontal-nav full-width">
					<ul id="nav" class="nav hidden-xs"><li id="menu-item-218" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-218"><a href="../index.html">Home</a>
<ul class="nav">
	<li id="menu-item-217" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-217"><a href="../homepage-with-carousel/index.php">Homepage Carousel</a></li>
</ul>
</li>
<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25"><a href="../shop/index.html">Shop</a>
<ul class="nav">
	<li id="menu-item-482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482"><a href="../wide-shop/index.html">Wide Shop</a></li>
	<li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-206"><a href="../shop/red-garage/index.html">Product</a></li>
</ul>
</li>
<li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-has-children menu-item-16"><a href="index.php">Mon Compte</a>
<ul class="nav">
	<li id="menu-item-489" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-489"><a href="../checkout/index.html">Checkout</a></li>
	<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="../cart/index.html">Cart</a></li>
</ul>
</li>
<li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-194"><a href="../page-left-sidebar/index.html">Page</a>
<ul class="nav">
	<li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-195"><a href="../page-right-sidebar/index.html">Page Right Sidebar</a></li>
</ul>
</li>
<li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a href="../blog/index.html">Blog</a></li>
<li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="../contact-us/index.html">Contact</a></li>
</ul>				</nav>
			</div>
		</div>
	</nav>
<!-- ============= -->
<!-- PAGE TEMPLATE -->
<!-- ============= -->

<div class="container">
	<section class="page">
		
		<div class="row">
			<header class="col-xs-12 prime">
				<h3>Mon Compte</h3>
			</header>
		</div>

		<div class="wrap">
			<div class="row ">

				<!-- Content -->
				<div class="col-xs-12">	
					
						<div class="content clearfix">
							<div class="woocommerce">


			<?php if(!empty($pass_success)): ?>
            <ul class="woocommerce-error alert list-unstyled alert-success">
            <li><strong>SUCCESS</strong>: <?php echo $pass_success ;?> 
            </li>
            </ul>
            <?php endif; ?>

            <?php if(!empty($pass_error)): ?>
            <ul class="woocommerce-error alert list-unstyled alert-danger">
            <li><strong>ERREUR</strong>: <?php echo $pass_error ;?> 
            </li>
            </ul>
            <?php endif; ?>

            <?php if(!empty($email_success)): ?>
            <ul class="woocommerce-error alert list-unstyled alert-success">
            <li><strong>SUCCESS</strong>: <?php echo $email_success ;?> 
            </li>
            </ul>
            <?php endif; ?>




<div class="col2-set row" id="customer_login">

	<div class="col-1 col-sm-6">

		<h5>Modifier votre compte</h5>

		<form method="post" class="register" action="" name="reg">
            <p class="form-group form-row-wide" style="color:red">
                
            </p>
            <p class="form-group form-row-wide">
                <label for="reg_username">Nom d'utilisateur <span class="required">*</span></label>
                <input type="text" class="input-text form-control" required  name="reg_username" id="reg_username" disabled="disabled" value=<?php echo "\"$login_session\"" ;?> />
            </p>
            
            <p class="form-group form-row-wide">
                <label for="reg_titre">Titre <span class="required">*</span></label>
                <select class="input-text form-control" required name="reg_titre" id="reg_titre" disabled="disabled">
                <option  >Sélectionner</option>
                <option <?php  if($titre == "mr") echo 'selected="selected"'; ?> >Monsieur</option>
                <option <?php if($titre == "mm") echo 'selected="selected"'; ?> >Madame</option>
                <option <?php if($titre == "mlle") echo 'selected="selected"'; ?> >Mademoiselle</option>
                </select>
            </p>
            
            <p class="form-group form-row-wide">
                <label for="reg_email">Adresse e-mail <span class="required">*</span></label>
                <input type="email" class="input-text form-control" required name="reg_email" id="reg_email" value=<?php echo "\"$email\"" ;?> />
            </p>
            
            <p class="form-group form-row-wide">
                <label for="reg_pre">Prénom <span class="required">*</span></label>
                <input type="text" class="input-text form-control" name="reg_pre" id="reg_pre" disabled="disabled" value=<?php echo "\"$prenom\"" ;?> />
            </p>
            
            <p class="form-group form-row-wide">
                <label for="reg_nom">Nom <span class="required">*</span></label>
                <input type="text" class="input-text form-control" required name="reg_nom" id="reg_nom" disabled="disabled" value=<?php echo "\"$nom\"" ;?> />
            </p>

            <p class="form-group form-row-wide">
                <label for="reg_password1">Nouveau mot de passe <span class="required">*</span></label>
                <input type="password" class="input-text form-control"  name="reg_password1" id="reg_password1" placeholder="6 caractaires Min" minlength="6"/>
            </p>
            
            <p class="form-group form-row-wide">
                <label for="reg_password2">Saisissez à nouveau le mot de passe <span class="required">*</span></label>
                <input type="password" class="input-text form-control" name="reg_password2" id="reg_password2" placeholder="6 caractaires Min" minlength="6"/>
            </p>
            
            <p class="form-group form-row-wide">
            
            

            <!-- Spam Trap -->
            <div style="left: -999em; position: absolute;">
                <label for="trap">Anti-spam</label>
                <input type="text" name="email_2" id="trap" tabindex="-1" />
            </div>

                        
            <p class="form-row">
                <input type="hidden" id="_wpnonce" name="_wpnonce" value="53641f801f" />
                <input type="hidden" name="_wp_http_referer" value="/wp/humbleshop/my-account/" />              
                <input type="submit" class="btn btn-default theme" name="enregistrer" value="Enregistrer" />
            </p>

            
        </form>


	</div>

	

</div>

</div>
						</div>
												
						<div class="comments clearfix">
						
						

	<!-- Comments -->

	<div id="comments" class="comments-area">

	
	
	
</div><!-- #comments .comments-area -->
	
						</div>

										
				</div>
			
			</div>
		</div>

	</section>
</div>

<!-- ============== -->
<!-- FOOTER SECTION -->
<!-- ============== -->

<footer>
	<div class="container">
		<section class="row foot">

			<article id="nav_menu-2" class="col-sm-3 widget_nav_menu"><strong class="title">Quick Links</strong><div class="menu-footer-container"><ul id="menu-footer" class="menu"><li id="menu-item-137" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-137"><a href="#">About Us</a></li>
<li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-138"><a href="#">Privacy</a></li>
<li id="menu-item-139" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-139"><a href="#">Returns Policies</a></li>
<li id="menu-item-140" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140"><a href="#">Feedback</a></li>
<li id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142"><a href="../blog/index.html">Blog</a></li>
<li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141"><a href="../contact-us/index.html">Contact</a></li>
</ul></div></article>	

					<article id="recent-posts-5" class="col-sm-3 widget_recent_entries">		<strong class="title">Latest Posts</strong>		<ul>
					<li>
				<a href="../demo-now-running-on-benny/index.html">Demo now running on &#8216;Benny&#8217;!</a>
							<span class="post-date">September 5, 2014</span>
						</li>
					<li>
				<a href="../theme-updated/index.html">Theme Updated!</a>
							<span class="post-date">February 12, 2014</span>
						</li>
					<li>
				<a href="../sample-audio-format/index.html">Sample Audio Format</a>
							<span class="post-date">January 11, 2013</span>
						</li>
					<li>
				<a href="../live-your-life/index.html">Live Your Life</a>
							<span class="post-date">January 10, 2013</span>
						</li>
				</ul>
		</article>
			<article id="categories-4" class="col-sm-3 widget_categories"><strong class="title">Categories</strong>		<ul>
	<li class="cat-item cat-item-47"><a href="../category/gallery/index.html" >Gallery</a>
</li>
	<li class="cat-item cat-item-44"><a href="../category/music/index.html" >Music</a>
</li>
	<li class="cat-item cat-item-1"><a href="../category/uncategorized/index.html" >Uncategorized</a>
</li>
	<li class="cat-item cat-item-63"><a href="../category/updates/index.html" >Updates</a>
</li>
	<li class="cat-item cat-item-49"><a href="../category/vacation/index.html" >Vacation</a>
</li>
		</ul>
</article>
							<article class="col-sm-3">
				<strong class="title">Our location</strong>
											<address class="row ">
							<div class="col-xs-2"><i class="fa fa-map-marker"></i></div>
							<div class="col-xs-10">
							69-135 Brompton Road<br />Knightsbridge<br />SW1X 0NA<br />United Kingdom‎							</div>
						</address>
																<address class="row ">
							<div class="col-xs-2"><i class="fa fa-phone"></i></div>
							<div class="col-xs-10">+44 55566888</div>
						</address>
					
											<address class="row ">
							<div class="col-xs-2"><i class="fa fa-print"></i></div>
							<div class="col-xs-10">+44 55566999</div>
						</address>
					
											<address class="row ">
							<div class="col-xs-2"><i class="fa fa-envelope-o"></i></div>
							<div class="col-xs-10"><a href="mailto:hello@humbleshop.com">hello@humbleshop.com</a></div>
						</address>
									</article>
				

		</section>
		
		<section class="row doubleline">
			<div class="col-sm-6 clearfix">

				<!-- Payment Method -->
				<div class="payment amex"></div><div class="payment mastercard"></div><div class="payment visa"></div><div class="payment paypal"></div>				
			</div>
			<div class="col-sm-6 currency">
				
				<p>Recommended hosting for <a title="Recommended Woocommerce Hosting" href="https://www.webfaction.com/?aid=11165" target="_blank">Woocommerce</a>.</p>
			</div>
		</section>

		<section class="row social">

			<div class="col-sm-6">&copy;  <a href="../index.html" title="HumbleShop" rel="home">HumbleShop</a> <small>/ Just another Woocommerce shop</small></div>
			<div class="col-sm-6 channel">
				<ul>
					
					<!-- Social Networks -->
					<li><a href="http://facebook.com/envato" target="_blank"><i class="fa fa-facebook"></i></a></li>					<li><a href="http://twitter.com/envato" target="_blank"><i class="fa fa-twitter"></i></a></li>					<li><a href="http://plus.google.com/107285294994146126204" target="_blank"><i class="fa fa-google-plus"></i></a></li>					<li><a href="http://pinterest.com/humblespace" target="_blank"><i class="fa fa-pinterest"></i></a></li>										<li><a href="http://instagram.com/herschel" target="_blank"><i class="fa fa-instagram"></i></a></li>
				</ul>	
			</div>

		</section>
	</div>
</footer>

<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/thehumblespace.com\/wp\/humbleshop\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts0235.js?ver=4.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp\/humbleshop\/wp-admin\/admin-ajax.php","i18n_view_cart":"View Cart","cart_url":"http:\/\/thehumblespace.com\/wp\/humbleshop\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/select2/select2.min49eb.js?ver=3.5.2'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minc8cb.js?ver=2.60'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp\/humbleshop\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp\/humbleshop\/wp-admin\/admin-ajax.php","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../wp-content/plugins/yith-woocommerce-featured-video/assets/js/woo-featured-videoc64e.js?ver=1.1.1'></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=20121210'></script>
<script type='text/javascript' src='../wp-content/themes/humbleshop/framework/js/shop6223.js?ver=20121210'></script>
<script type='text/javascript' src='../wp-content/themes/humbleshop/framework/js/scriptf3bd.js?ver=20130124'></script>

</body>

<!-- Mirrored from thehumblespace.com/wp/humbleshop/my-account/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:17:09 GMT -->
</html>