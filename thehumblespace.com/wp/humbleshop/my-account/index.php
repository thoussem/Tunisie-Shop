<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from thehumblespace.com/wp/humbleshop/my-account/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:17:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		 	<?php
             include("conf.php");
             session_start();
             	  $error ="";
             	  $pass_error="";
             	  $user_error="";
             	  $username="";
                  $sexe="";
                  $email="";
                  $nom="";
                  $pre="";
                  $pass1="";
                  $pass2="";
                  $codtel="";
                  $tel="";
                  $pay="";
                  $adresse1="";
                  $adresse2="";
                  $codpostal="";
             if(isset($_POST['seconnecter']))
                {
                // username and password sent from form 
              
                $username=$_POST['username'];
				$password=$_POST['password'];
                
                
                $sql="SELECT `id` FROM `utilisateurs` WHERE (`username`='$username' or `email`='$username') AND `password`='$password' ;";
                $result=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($result);
                
                echo $count;
                // If result matched $myusername and $mypassword, table row must be 1 row
                if($count==1)
                {

                $_SESSION['login_user']=$username;
                if(isset($_POST['rememberme'])){
                	setcookie('auth',$username,time()+3600*24*3);
                	}
                header("location: ../homepage-with-carousel/index.php");
                }
                else 
                {
                $error="* Le nom d'Utilisateur ou le Mot de passe est Incorrecte";
                   }
            
                }
             
             

                /*************Register********************/
                if(isset($_POST['sinscrire']))
                {
                  $username=$_POST['reg_username'];
                  $sexe=$_POST['reg_sexe'];
                  $email=$_POST['reg_email'];
                  $nom=$_POST['reg_nom'];
                  $pre=$_POST['reg_pre'];
                  $pass1=$_POST['reg_password1'];
                  $pass2=$_POST['reg_password2'];
                  $codtel=$_POST['reg_telcode'];
                  $tel=$_POST['reg_tel'];
                  $pay=$_POST['reg_pay'];
                  $adresse1=$_POST['reg_adresse1'];
                  $adresse2=$_POST['reg_adresse1'];
                  $codpostal=$_POST['reg_codpost'];

                  if(!user_exist($username,$conn)){
                  echo "helllllloooo";
                        if($pass1!=$pass2){
                        		$pass_error="* Les deux mots de passe ne correspondent pas.";}
                        else{
                        		
                        		$sql="INSERT INTO `ecommerce`.`utilisateurs` (`username`, `nom`, `prenom`, `sexe`, `email`, `password`, `tel`, `ville`, `codpost`, `codtel`, `adresse1`, `adresse2`) 
                        		VALUES ('$username', '$nom', '$pre' , '$sexe', '$email', '$pass1', '$tel', '$pay', '$codpostal', '$codtel', '$adresse1', '$adresse2');";
                        		mysqli_query($conn,$sql);}
                           }
                   else{
              				$user_error="Ulitisateur déjà existe";	}	
              		                 }

                function user_exist($user,$db){                  
                    $sql="SELECT `id` FROM `utilisateurs` WHERE (`username`='$user' or `email`='$user');";
                  	$result=mysqli_query($db,$sql);
                  	$count=mysqli_num_rows($result);
                   	if($count==1){
                   	return true;
                   }
                   else{

                   	return false;}

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
				 <a href="index.php">Connexion ou Créer un compte</a>
			</div>

			<div class="pull-right hscart text-right">
				
				<!-- Cart Updates -->
				<div class="counter">
					<a href="javascript:void(0);"><i class="fa fa-shopping-cart"></i> 
						<span class="hidden-xs">Totaux</span> </a> : <span class="theme"><span class="amount">0.00 DT</span></span>
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
<li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-10 current_page_item menu-item-has-children menu-item-16"><a href="index.html">My Account</a>
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



<div class="col2-set row" id="customer_login">

	<div class="col-1 col-sm-6">


		<h5>SE connecter</h5>

		<form method="post" action="" class="login" name="connect">

			<p class="form-group form-row-wide" style="color:red">
				<label><?php echo $error ;?></label>
			</p>
			<p class="form-group form-row-wide">
				<label for="username">Nom d'utilisateur ou adresse e-mail <span class="required">*</span></label>
				<input type="text" class="input-text form-control" name="username" id="username" value=<?php echo "\"$username\"" ;?> />
			</p>
			<p class="form-group form-row-wide">
				<label for="password">Mot de passe <span class="required">*</span></label>
				<input class="input-text form-control" type="password" name="password" id="password" />
			</p>

			
			<p class="form-row">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="d3dd4ec73f" />
				<input type="hidden" name="_wp_http_referer" value="/wp/humbleshop/my-account/" />	
				<input type="submit" class="btn btn-default theme" name="seconnecter" value="Se connecter" /> 
				<label for="rememberme" class="inline">
				<input name="rememberme" type="checkbox" id="rememberme" value="forever"/> Rester identifié</label>
			</p>
			<p class="lost_password">
				<a href="lost-password/index.html">Mot de passe oublier?</a>
			</p>

			
		</form>


	</div>

	<div class="col-2 col-sm-6">

		<h5>Enregistrer</h5>

		<form method="post" class="register" action="" name="reg">
			<p class="form-group form-row-wide" style="color:red">
				<label><?php echo $pass_error ;?></label>
				<label><?php echo $user_error ;?></label>
			</p>
			<p class="form-group form-row-wide">
				<label for="reg_username">Nom d'utilisateur <span class="required">*</span></label>
				<input type="text" class="input-text form-control" required  name="reg_username" id="reg_username" value=<?php echo "\"$username\"" ;?> />
			</p>
            
            <p class="form-group form-row-wide">
				<label for="reg_sexe">Sexe <span class="required">*</span></label>
				<select class="input-text form-control" required name="reg_sexe" id="reg_sexe">
				<option value="" selected="selected">Sélectionner</option>
				<option value="homme">Homme</option>
				<option value="femme">Femme</option>
				</select>
			</p>
			
			<p class="form-group form-row-wide">
				<label for="reg_email">Adresse e-mail <span class="required">*</span></label>
				<input type="email" class="input-text form-control" required name="reg_email" id="reg_email" value=<?php echo "\"$email\"" ;?> />
			</p>
            
            <p class="form-group form-row-wide">
				<label for="reg_pre">Prénom <span class="required">*</span></label>
				<input type="text" class="input-text form-control" required name="reg_pre" id="reg_pre" value=<?php echo "\"$pre\"" ;?> />
			</p>
            
            <p class="form-group form-row-wide">
				<label for="reg_nom">Nom <span class="required">*</span></label>
				<input type="text" class="input-text form-control" required name="reg_nom" id="reg_nom" value=<?php echo "\"$nom\"" ;?> />
			</p>

			<p class="form-group form-row-wide">
				<label for="reg_password1">Mot de passe <span class="required">*</span></label>
				<input type="password" class="input-text form-control" required name="reg_password1" id="reg_password1" />
			</p>
            
            <p class="form-group form-row-wide">
				<label for="reg_password2">Saisissez à nouveau le mot de passe <span class="required">*</span></label>
				<input type="password" class="input-text form-control" required name="reg_password2" id="reg_password2" />
			</p>
            
            <p class="form-group form-row-wide">
            
            <label for="reg_tel">Téléphone <span class="required">*</span></label>
                <!-- ---------------------------------------------------------------->
  
                
				
            
            <table>
  <tr>
    <td>
                  <select class="input-text form-control" name="reg_telcode" id="reg_telcode" style="width:170px;">
<option value="">Code Pays</option>
<option value="4">Afghanistan</option>
<option value="17">Åland Islands</option>
<option value="7">Albania</option>.
<option value="62">Algeria</option>
<option value="13">American Samoa</option>
<option value="2">Andorra</option>
<option value="10">Angola</option>
<option value="6">Anguilla</option>
<option value="11">Antarctica</option>
<option value="5">Antigua and Barbuda</option>
<option value="12">Argentina</option>
<option value="8">Armenia</option>
<option value="16">Aruba</option>
<option value="15">Australia</option>
<option value="14">Austria</option>
<option value="18">Azerbaijan</option>
<option value="33">Bahamas</option>
<option value="25">Bahrain</option>
<option value="21">Bangladesh</option>
<option value="20">Barbados</option>
<option value="37">Belarus</option>
<option value="22">Belgium</option>
<option value="38">Belize</option>
<option value="27">Benin</option>
<option value="29">Bermuda</option>
<option value="34">Bhutan</option>
<option value="31">Bolivia</option>
<option value="19">Bosnia and Herzegovina</option>
<option value="36">Botswana</option>
<option value="35">Bouvet Island</option>
<option value="32">Brazil</option>
<option value="106">British Indian Ocean Territory</option>
<option value="237">British Virgin Islands</option>
<option value="30">Brunei</option>
<option value="24">Bulgaria</option>
<option value="23">Burkina Faso</option>
<option value="26">Burundi</option>
<option value="117">Cambodia</option>
<option value="48">Cameroon</option>
<option value="39">Canada</option>
<option value="53">Cape Verde</option>
<option value="124">Cayman Islands</option>
<option value="42">Central African Republic</option>
<option value="213">Chad</option>
<option value="47">Chile</option>
<option value="49">China</option>
<option value="54">Christmas Island</option>
<option value="40">Cocos [Keeling] Islands</option>
<option value="50">Colombia</option>
<option value="119">Comoros</option>
<option value="43">Congo - Brazzaville</option>
<option value="41">Congo - Kinshasa</option>
<option value="46">Cook Islands</option>
<option value="51">Costa Rica</option>
<option value="45">Côte d’Ivoire</option>
<option value="98">Croatia</option>
<option value="52">Cuba</option>
<option value="55">Cyprus</option>
<option value="56">Czech Republic</option>
<option value="59">Denmark</option>
<option value="58">Djibouti</option>
<option value="60">Dominica</option>
<option value="61">Dominican Republic</option>
<option value="63">Ecuador</option>
<option value="65">Egypt</option>
<option value="209">El Salvador</option>
<option value="88">Equatorial Guinea</option>
<option value="67">Eritrea</option>
<option value="64">Estonia</option>
<option value="69">Ethiopia</option>
<option value="72">Falkland Islands</option>
<option value="74">Faroe Islands</option>
<option value="71">Fiji</option>
<option value="70">Finland</option>
<option value="75">France</option>
<option value="80">French Guiana</option>
<option value="175">French Polynesia</option>
<option value="214">French Southern Territories</option>
<option value="76">Gabon</option>
<option value="85">Gambia</option>
<option value="79">Georgia</option>
<option value="57">Germany</option>
<option value="82">Ghana</option>
<option value="83">Gibraltar</option>
<option value="89">Greece</option>
<option value="84">Greenland</option>
<option value="78">Grenada</option>
<option value="87">Guadeloupe</option>
<option value="92">Guam</option>
<option value="91">Guatemala</option>
<option value="81">Guernsey</option>
<option value="86">Guinea</option>
<option value="93">Guinea-Bissau</option>
<option value="94">Guyana</option>
<option value="99">Haiti</option>
<option value="96">Heard Island and McDonald Islands</option>
<option value="97">Honduras</option>
<option value="95">Hong Kong SAR China</option>
<option value="100">Hungary</option>
<option value="109">Iceland</option>
<option value="105">India</option>
<option value="101">Indonesia</option>
<option value="108">Iran</option>
<option value="107">Iraq</option>
<option value="102">Ireland</option>
<option value="104">Isle of man</option>
<option value="103">Israel</option>
<option value="110">Italy</option>
<option value="112">Jamaica</option>
<option value="114">Japan</option>
<option value="111">Jersey</option>
<option value="113">Jordan</option>
<option value="125">Kazakhstan</option>
<option value="115">Kenya</option>
<option value="118">Kiribati</option>
<option value="123">Kuwait</option>
<option value="116">Kyrgyzstan</option>
<option value="126">Laos</option>
<option value="135">Latvia</option>
<option value="127">Lebanon</option>
<option value="132">Lesotho</option>
<option value="131">Liberia</option>
<option value="136">Libya</option>
<option value="129">Liechtenstein</option>
<option value="133">Lithuania</option>
<option value="134">Luxembourg</option>
<option value="148">Macau SAR China</option>
<option value="144">Macedonia</option>
<option value="142">Madagascar</option>
<option value="156">Malawi</option>
<option value="158">Malaysia</option>
<option value="155">Maldives</option>
<option value="145">Mali</option>
<option value="153">Malta</option>
<option value="143">Marshall Islands</option>
<option value="150">Martinique</option>
<option value="151">Mauritania</option>
<option value="154">Mauritius</option>
<option value="244">Mayotte</option>
<option value="157">Mexico</option>
<option value="73">Micronesia</option>
<option value="139">Moldova</option>
<option value="138">Monaco</option>
<option value="147">Mongolia</option>
<option value="140">Montenegro</option>
<option value="152">Montserrat</option>
<option value="137">Morocco</option>
<option value="159">Mozambique</option>
<option value="146">Myanmar</option>
<option value="160">Namibia</option>
<option value="169">Nauru</option>
<option value="168">Nepal</option>
<option value="166">Netherlands</option>
<option value="9">Netherlands Antilles</option>
<option value="161">New Caledonia</option>
<option value="171">New Zealand</option>
<option value="165">Nicaragua</option>
<option value="162">Niger</option>
<option value="164">Nigeria</option>
<option value="170">Niue</option>
<option value="163">Norfolk Island</option>
<option value="121">North Korea</option>
<option value="149">Northern Mariana Islands</option>
<option value="167">Norway</option>
<option value="172">Oman</option>
<option value="178">Pakistan</option>
<option value="185">Palau</option>
<option value="183">Palestinian Territories</option>
<option value="173">Panama</option>
<option value="176">Papua New Guinea</option>
<option value="186">Paraguay</option>
<option value="174">Peru</option>
<option value="177">Philippines</option>
<option value="181">Pitcairn Islands</option>
<option value="179">Poland</option>
<option value="184">Portugal</option>
<option value="182">Puerto Rico</option>
<option value="187">Qatar</option>
<option value="188">Réunion</option>
<option value="189">Romania</option>
<option value="191">Russia</option>
<option value="192">Rwanda</option>
<option value="28">Saint Barthelemy</option>
<option value="199">Saint Helena</option>
<option value="120">Saint Kitts and Nevis</option>
<option value="128">Saint Lucia</option>
<option value="141">Saint Martin (French part)</option>
<option value="180">Saint Pierre and Miquelon</option>
<option value="235">Saint Vincent and the Grenadines</option>
<option value="242">Samoa</option>
<option value="204">San Marino</option>
<option value="208">São Tomé and Príncipe</option>
<option value="193">Saudi Arabia</option>
<option value="205">Senegal</option>
<option value="190">Serbia</option>
<option value="195">Seychelles</option>
<option value="203">Sierra Leone</option>
<option value="198">Singapore</option>
<option value="202">Slovakia</option>
<option value="200">Slovenia</option>
<option value="194">Solomon Islands</option>
<option value="206">Somalia</option>
<option value="245">South Africa</option>
<option value="90">South Georgia and the South Sandwich Islands</option>
<option value="122">South Korea</option>
<option value="68">Spain</option>
<option value="130">Sri Lanka</option>
<option value="196">Sudan</option>
<option value="207">Suriname</option>
<option value="201">Svalbard and Jan Mayen</option>
<option value="211">Swaziland</option>
<option value="197">Sweden</option>
<option value="44">Switzerland</option>
<option value="210">Syria</option>
<option value="226">Taiwan</option>
<option value="217">Tajikistan</option>
<option value="227">Tanzania</option>
<option value="216">Thailand</option>
<option value="219">Timor-Leste</option>
<option value="215">Togo</option>
<option value="218">Tokelau</option>
<option value="222">Tonga</option>
<option value="224">Trinidad and Tobago</option>
<option value="216" selected="selected">Tunisia</option>
<option value="223">Turkey</option>
<option value="220">Turkmenistan</option>
<option value="212">Turks and Caicos Islands</option>
<option value="225">Tuvalu</option>
<option value="230">U.S. Minor Outlying Islands</option>
<option value="238">U.S. Virgin Islands</option>
<option value="229">Uganda</option>
<option value="228">Ukraine</option>
<option value="3">United Arab Emirates</option>
<option value="77">United Kingdom</option>
<option value="231">United States</option>
<option value="232">Uruguay</option>
<option value="233">Uzbekistan</option>
<option value="240">Vanuatu</option>
<option value="234">Vatican City</option>
<option value="236">Venezuela</option>
<option value="239">Vietnam</option>
<option value="241">Wallis and Futuna</option>
<option value="66">Western Sahara</option>
<option value="243">Yemen</option>
<option value="246">Zambia</option>
<option value="247">Zimbabwe</option>
</select>

 <!-- ---------------------------------------------------------------->
    </td>
    <td><input type="tel" pattern="^[1-9][0-9]{7}$" class="input-text" required name="reg_tel" id="reg_tel" style="width:230px;" value=<?php echo "\"$tel\"" ;?>/></td>
  </tr>
</table>
        
				
                
			</p>
            
            <p class="form-group form-row-wide">
				<label for="reg_pay" >Pay <span class="required">*</span></label>
				<select class="input-text form-control" required  name="reg_pay" id="reg_pay">

<option value="Afghanistan">Afghanistan </option>
<option value="Afrique_Centrale">Afrique_Centrale </option>
<option value="Afrique_du_sud">Afrique_du_Sud </option> 
<option value="Albanie">Albanie </option>
<option value="Algerie">Algerie </option>
<option value="Allemagne">Allemagne </option>
<option value="Andorre">Andorre </option>
<option value="Angola">Angola </option>
<option value="Anguilla">Anguilla </option>
<option value="Arabie_Saoudite">Arabie_Saoudite </option>
<option value="Argentine">Argentine </option>
<option value="Armenie">Armenie </option> 
<option value="Australie">Australie </option>
<option value="Autriche">Autriche </option>
<option value="Azerbaidjan">Azerbaidjan </option>
<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Belize">Belize </option>
<option value="Benin">Benin </option>
<option value="Bermudes">Bermudes </option>
<option value="Bielorussie">Bielorussie </option>
<option value="Bolivie">Bolivie </option>
<option value="Botswana">Botswana </option>
<option value="Bhoutan">Bhoutan </option>
<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
<option value="Bresil">Bresil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina_Faso </option>
<option value="Burundi">Burundi </option>
<option value="Caiman">Caiman </option>
<option value="Cambodge">Cambodge </option>
<option value="Cameroun">Cameroun </option>
<option value="Canada">Canada </option>
<option value="Canaries">Canaries </option>
<option value="Cap_vert">Cap_Vert </option>
<option value="Chili">Chili </option>
<option value="Chine">Chine </option> 
<option value="Chypre">Chypre </option> 
<option value="Colombie">Colombie </option>
<option value="Comores">Colombie </option>
<option value="Congo">Congo </option>
<option value="Congo_democratique">Congo_democratique </option>
<option value="Cook">Cook </option>
<option value="Coree_du_Nord">Coree_du_Nord </option>
<option value="Coree_du_Sud">Coree_du_Sud </option>
<option value="Costa_Rica">Costa_Rica </option>
<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
<option value="Croatie">Croatie </option>
<option value="Cuba">Cuba </option>
<option value="Danemark">Danemark </option>
<option value="Djibouti">Djibouti </option>
<option value="Dominique">Dominique </option>
<option value="Egypte">Egypte </option> 
<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
<option value="Equateur">Equateur </option>
<option value="Erythree">Erythree </option>
<option value="Espagne">Espagne </option>
<option value="Estonie">Estonie </option>
<option value="Etats_Unis">Etats_Unis </option>
<option value="Ethiopie">Ethiopie </option>
<option value="Falkland">Falkland </option>
<option value="France">France </option>
<option value="Feroe">Feroe </option>
<option value="Fidji">Fidji </option>
<option value="Finlande">Finlande </option>
<option value="France">France </option>
<option value="Gabon">Gabon </option>
<option value="Gambie">Gambie </option>
<option value="Georgie">Georgie </option>
<option value="Ghana">Ghana </option>
<option value="Gibraltar">Gibraltar </option>
<option value="Grece">Grece </option>
<option value="Grenade">Grenade </option>
<option value="Groenland">Groenland </option>
<option value="Guadeloupe">Guadeloupe </option>
<option value="Guam">Guam </option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey </option>
<option value="Guinee">Guinee </option>
<option value="Guinee_Bissau">Guinee_Bissau </option>
<option value="Guinee equatoriale">Guinee_Equatoriale </option>
<option value="Guyana">Guyana </option>
<option value="Guyane_Francaise ">Guyane_Francaise </option>
<option value="Haiti">Haiti </option>
<option value="Hawaii">Hawaii </option> 
<option value="Honduras">Honduras </option>
<option value="Hong_Kong">Hong_Kong </option>
<option value="Hongrie">Hongrie </option>
<option value="Inde">Inde </option>
<option value="Indonesie">Indonesie </option>
<option value="Iran">Iran </option>
<option value="Iraq">Iraq </option>
<option value="Irlande">Irlande </option>
<option value="Islande">Islande </option>
<option value="Israel">Israel </option>
<option value="Italie">italie </option>
<option value="Jamaique">Jamaique </option>
<option value="Jan Mayen">Jan Mayen </option>
<option value="Japon">Japon </option>
<option value="Jersey">Jersey </option>
<option value="Jordanie">Jordanie </option>
<option value="Kazakhstan">Kazakhstan </option>
<option value="Kenya">Kenya </option>
<option value="Kirghizstan">Kirghizistan </option>
<option value="Kiribati">Kiribati </option>
<option value="Koweit">Koweit </option>
<option value="Laos">Laos </option>
<option value="Lesotho">Lesotho </option>
<option value="Lettonie">Lettonie </option>
<option value="Liban">Liban </option>
<option value="Liberia">Liberia </option>
<option value="Liechtenstein">Liechtenstein </option>
<option value="Lituanie">Lituanie </option> 
<option value="Luxembourg">Luxembourg </option>
<option value="Lybie">Lybie </option>
<option value="Macao">Macao </option>
<option value="Macedoine">Macedoine </option>
<option value="Madagascar">Madagascar </option>
<option value="Madère">Madère </option>
<option value="Malaisie">Malaisie </option>
<option value="Malawi">Malawi </option>
<option value="Maldives">Maldives </option>
<option value="Mali">Mali </option>
<option value="Malte">Malte </option>
<option value="Man">Man </option>
<option value="Mariannes du Nord">Mariannes du Nord </option>
<option value="Maroc">Maroc </option>
<option value="Marshall">Marshall </option>
<option value="Martinique">Martinique </option>
<option value="Maurice">Maurice </option>
<option value="Mauritanie">Mauritanie </option>
<option value="Mayotte">Mayotte </option>
<option value="Mexique">Mexique </option>
<option value="Micronesie">Micronesie </option>
<option value="Midway">Midway </option>
<option value="Moldavie">Moldavie </option>
<option value="Monaco">Monaco </option>
<option value="Mongolie">Mongolie </option>
<option value="Montserrat">Montserrat </option>
<option value="Mozambique">Mozambique </option>
<option value="Namibie">Namibie </option>
<option value="Nauru">Nauru </option>
<option value="Nepal">Nepal </option>
<option value="Nicaragua">Nicaragua </option>
<option value="Niger">Niger </option>
<option value="Nigeria">Nigeria </option>
<option value="Niue">Niue </option>
<option value="Norfolk">Norfolk </option>
<option value="Norvege">Norvege </option>
<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
<option value="Oman">Oman </option>
<option value="Ouganda">Ouganda </option>
<option value="Ouzbekistan">Ouzbekistan </option>
<option value="Pakistan">Pakistan </option>
<option value="Palau">Palau </option>
<option value="Palestine">Palestine </option>
<option value="Panama">Panama </option>
<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
<option value="Paraguay">Paraguay </option>
<option value="Pays_Bas">Pays_Bas </option>
<option value="Perou">Perou </option>
<option value="Philippines">Philippines </option> 
<option value="Pologne">Pologne </option>
<option value="Polynesie">Polynesie </option>
<option value="Porto_Rico">Porto_Rico </option>
<option value="Portugal">Portugal </option>
<option value="Qatar">Qatar </option>
<option value="Republique_Dominicaine">Republique_Dominicaine </option>
<option value="Republique_Tcheque">Republique_Tcheque </option>
<option value="Reunion">Reunion </option>
<option value="Roumanie">Roumanie </option>
<option value="Royaume_Uni">Royaume_Uni </option>
<option value="Russie">Russie </option>
<option value="Rwanda">Rwanda </option>
<option value="Sahara Occidental">Sahara Occidental </option>
<option value="Sainte_Lucie">Sainte_Lucie </option>
<option value="Saint_Marin">Saint_Marin </option>
<option value="Salomon">Salomon </option>
<option value="Salvador">Salvador </option>
<option value="Samoa_Occidentales">Samoa_Occidentales</option>
<option value="Samoa_Americaine">Samoa_Americaine </option>
<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
<option value="Senegal">Senegal </option> 
<option value="Seychelles">Seychelles </option>
<option value="Sierra Leone">Sierra Leone </option>
<option value="Singapour">Singapour </option>
<option value="Slovaquie">Slovaquie </option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie </option>
<option value="Soudan">Soudan </option> 
<option value="Sri_Lanka">Sri_Lanka </option> 
<option value="Suede">Suede </option>
<option value="Suisse">Suisse </option>
<option value="Surinam">Surinam </option>
<option value="Swaziland">Swaziland </option>
<option value="Syrie">Syrie </option>
<option value="Tadjikistan">Tadjikistan </option>
<option value="Taiwan">Taiwan </option>
<option value="Tonga">Tonga </option>
<option value="Tanzanie">Tanzanie </option>
<option value="Tchad">Tchad </option>
<option value="Thailande">Thailande </option>
<option value="Tibet">Tibet </option>
<option value="Timor_Oriental">Timor_Oriental </option>
<option value="Togo">Togo </option> 
<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
<option value="Tristan da cunha">Tristan de cuncha </option>
<option value="Tunisie" selected="selected">Tunisie </option>
<option value="Turkmenistan">Turmenistan </option> 
<option value="Turquie">Turquie </option>
<option value="Ukraine">Ukraine </option>
<option value="Uruguay">Uruguay </option>
<option value="Vanuatu">Vanuatu </option>
<option value="Vatican">Vatican </option>
<option value="Venezuela">Venezuela </option>
<option value="Vierges_Americaines">Vierges_Americaines </option>
<option value="Vierges_Britanniques">Vierges_Britanniques </option>
<option value="Vietnam">Vietnam </option>
<option value="Wake">Wake </option>
<option value="Wallis et Futuma">Wallis et Futuma </option>
<option value="Yemen">Yemen </option>
<option value="Yougoslavie">Yougoslavie </option>
<option value="Zambie">Zambie </option>
<option value="Zimbabwe">Zimbabwe </option>
</select>
			</p>
            
			<p class="form-group form-row-wide">
				<label for="reg_adresse1">Adresse <span class="required">*</span></label>
				<input type="text"  class="input-text" required name="reg_adresse1" id="reg_adresse1"  placeholder="Adresse de rue" value=<?php echo "\"$adresse1\"" ;?>/>
			</p>

			<p class="form-group form-row-wide">
				<input type="text"  class="input-text" name="reg_adresse2" id="reg_adresse2"  placeholder="Appartement, bureau, unité, etc. (facultatif)" value=<?php echo "\"$adresse2\"" ;?>/>
			</p>

			<p class="form-group form-row-wide">
				<label for="reg_ville">Ville <span class="required">*</span></label>
				<input type="text"  class="input-text" required name="reg_ville" id="reg_ville"  placeholder="Adresse de rue" value=<?php echo "\"$pay\"" ;?>/>
			</p>

            <p class="form-group form-row-wide">
				<label for="reg_codpost">Code postal <span class="required">*</span></label>
				<input type="text"  maxlength="4" pattern="^[0-9]{4}$" class="input-text" required name="reg_codpost" id="reg_codpost" value=<?php echo "\"$codpostal\"" ;?>/>
			</p>

			<!-- Spam Trap -->
			<div style="left: -999em; position: absolute;">
				<label for="trap">Anti-spam</label>
				<input type="text" name="email_2" id="trap" tabindex="-1" />
			</div>

						
			<p class="form-row">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="53641f801f" />
				<input type="hidden" name="_wp_http_referer" value="/wp/humbleshop/my-account/" />				
				<input type="submit" class="btn btn-default theme" name="sinscrire" value="S'inscrire" />
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