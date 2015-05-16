<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from thehumblespace.com/wp/humbleshop/my-account/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:17:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		 	<?php
             include("../connexion/lock.php");
             include("../panier/panier.php");
             
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

	<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
             
            







</head>

<body class="page page-id-10 page-template page-template-page-full page-template-page-full-php woocommerce-account woocommerce-page wf-active">

	
	
	<!-- ====== -->
	<!-- TOPBAR -->
	<!-- ====== -->
   	<?php include"../topbar/topbar.php";?>
	
	
	<!-- ================= -->
	<!-- HEADER & BRANDING -->
	<!-- ================= -->
	
<?php include"../header/header.php";?>

	<!-- ================ -->
	<!-- MAIN NAV SECTION -->
	<!-- ================ -->
	
<?php include"../navbar/nav.php" ;?>
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

<?php include"../footer/footer.php";?>

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