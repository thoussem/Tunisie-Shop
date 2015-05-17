<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:19:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

	<?php
	include("../../connexion/lock.php");
    include "../../panier/panier.php";
	if(isset($_GET["id"])){
		$id=$_GET["id"];
		$article_sql=mysqli_query($conn,"SELECT * FROM `articles` WHERE id='$id';");
		$row=mysqli_fetch_array($article_sql,MYSQLI_ASSOC);}



		?>

		<meta charset="UTF-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Shirt With Attributes | HumbleShop</title>

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="../../xmlrpc.php" />

		<!--Favicon-->
		<link rel="icon" href="../../wp-content/uploads/2013/01/hsfavicon.png">

		<meta name='robots' content='noindex,follow' />
		<link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Feed" href="../../feed/index.html" />
		<link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Comments Feed" href="../../comments/feed/index.html" />
		<link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Shirt With Attributes Comments Feed" href="feed/index.html" />
		<link rel='stylesheet' id='contact-form-7-css'  href='../../wp-content/plugins/contact-form-7/includes/css/styles0235.css?ver=4.1.1' type='text/css' media='all' />
		<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='../../wp-content/plugins/woocommerce/assets/css/prettyPhoto0235.css?ver=4.1.1' type='text/css' media='all' />
		<link rel='stylesheet' id='yith-woo-featured-video-css'  href='../../wp-content/plugins/yith-woocommerce-featured-video/assets/css/woo-featured-video0235.css?ver=4.1.1' type='text/css' media='all' />
		<link rel='stylesheet' id='bootstrap-css'  href='../../wp-content/themes/humbleshop/framework/css/bootstrap.min0235.css?ver=4.1.1' type='text/css' media='all' />
		<link rel='stylesheet' id='font-css'  href='../../wp-content/themes/humbleshop/framework/css/font0235.css?ver=4.1.1' type='text/css' media='all' />
		<link rel='stylesheet' id='style-css'  href='../../wp-content/themes/humbleshop-child/style0235.css?ver=4.1.1' type='text/css' media='all' />
		<link rel='stylesheet' id='ot-dynamic-hs_css-css'  href='../../wp-content/themes/humbleshop-child/dynamic2f91.css?ver=2.4.6' type='text/css' media='all' />
		<script type='text/javascript' src='../../wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
		<script type='text/javascript' src='../../wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml" /> 
		<link rel='prev' title='Simple Kinky Shirt' href='../simple-kinky-shirt/index.html' />
		<link rel='next' title='Sample On Sale' href='../sample-on-sale/index.html' />
		<meta name="generator" content="WordPress 4.1.1" />
		<meta name="generator" content="WooCommerce 2.3.7" />
		<link rel='canonical' href='index.html' />
		<link rel='shortlink' href='../../index7665.html?p=65' />
		<link rel="alternate" type="application/rss+xml"  title="New products" href="../feed/index.html" />	<!-- Open Graph -->
		<meta property="og:title" content="Shirt With Attributes" />
		<meta property="og:url" content="http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/" />
		<meta property="og:site_name" content="HumbleShop" />
		<meta property="og:description" content="In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac ..." />
		<meta property="og:image" content="http://thehumblespace.com/wp/humbleshop/wp-content/uploads/2013/01/328390_mrp_in_l.jpeg"/>

		<link rel="stylesheet" href="../../style/style.css" type="text/css" media="screen" />
				<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

	<!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv-printshiv.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="single single-product postid-65 woocommerce woocommerce-page wf-active">



    	<!-- ====== -->
    	<!-- TOPBAR -->
    	<!-- ====== -->
    	<div class="container welcome">
   <div class="row">
      <div class="pull-left greet">
         <span class="hidden-xs">Bienvenue</span>                   
         <span class="hidden-xs">client,</span> 
         <a href="../../my-account/index.php">
         <?php
            if (isset($login_session)){
                echo $nom.' '.$prenom;
            }
            else {echo 'Connexion ou Créer un compte';}
            ?>
         </a>
         &nbsp;&nbsp;
         <a href="../../connexion/logout.php">
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
            <span class="hidden-xs">Total</span> </a> : 
            <span class="theme"><span class="amount"><?php echo montant_panier(); ?> DT</span></span>
         </div>
         <!-- Bubble Cart Item -->
         <div class="cartbubble">
            <div class="arrow-box">
               <?php if(!isset($_SESSION['panier'])):?>
               <div class="clearfix text-center">
                  Aucun produit dans le panier. <br>
                  <a href="javascript:void(0)" id="closeit">Fermer</a>
               </div>
               <?php else:?>
               <?php 
                  $nb_art = count($_SESSION['panier']['id_article']);
                  for($i = 0; $i < $nb_art; $i++) 
                  { 
                  
                   echo'
                   <div class="row">
                   <div class="col-xs-8">
                   <small>
                   '.$_SESSION['panier']['qte'][$i].' x   
                  
                   <a href="index.php?id='.$_SESSION['panier']['id_article'][$i].'&amp;nom='.$_SESSION['panier']['nom'][$i].'">'.$_SESSION['panier']['nom'][$i].'</a> 
                  
                   </small>
                   <br>
                   <small>
                   </small>
                   </div>
                  
                   <div class="theme col-xs-4 text-right">
                   <span class="amount">'.$_SESSION['panier']['prix'][$i].'</span>                             </div>
                   </div>';}
                   ?>
               <hr>
               <div class="clearfix">
                  TOTAL <span class="theme pull-right"><span class="amount"><?php echo montant_panier(); ?> DT</span></span>
               </div>
               <hr>
               <div class="clearfix buttons">
                  <a href="javascript:void(0)" id="closeit">Fermer</a>
                  <a href="../../checkout" class="btn btn-xs theme pull-right">Checkout</a>
               </div>
               <?php endif;?>
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
               <a href="../../home/index.php" title="HumbleShop" rel="home">
               <img src="../../wp-content/uploads/2013/01/highreslogo-300x75.png"  alt="" class="img-responsive" />
               </a>
            </div>
            <div class="searchcart col-sm-4">
               <form role="search" method="get" id="searchform" action="" class="topsearch form-inline">
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
            <ul id="nav" class="nav hidden-xs">
               <li id="menu-item-218" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-218">
                  <a href="../../home/index.php">Acceuil</a>
               </li>
               <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25">
                  <a href="../../shop/index.php?type=">BOUTIQUE</a>
                  <ul class="nav">
                     <li id="menu-item-482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482">
                        <a href="../../shop/index.php?type=h">Homme</a>
                     </li>
                     <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-206">
                        <a href="../../shop/index.php?type=f">Femme</a>
                     </li>
                     <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-206">
                        <a href="../../shop/index.php?type=e">Enfant</a>
                     </li>
                  </ul>
               </li>
               <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-16">
                  <a href="../../my-account/index.php">MON COMPTE</a>
                  <ul class="nav">
                     <li id="menu-item-489" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-489">
                        <a href="../../checkout/index.php">Checkout</a>
                     </li>
                     <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
                        <a href="../../cart/index.php">Chariot</a>
                     </li>
                  </ul>
               </li>
               <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
                  <a href="../../contact-us/index.php">Contact</a>
               </li>
            </ul>
         </nav>
      </div>
   </div>
</nav>
    			<!-- ============== -->
    			<!-- SINGLE SECTION -->
    			<!-- ============== -->

    			<div id="container" class="container"><div id="content" role="main">
    				<section class="single">

    					<div class="row">
    						<header class="col-xs-12 prime">
    							<h3><?php echo $row['nom']?></h3>
    						</header>
    					</div>

    					<div class="row">

    						<div class="col-xs-12">



    							<div itemscope itemtype="http://schema.org/Product" id="product-65" class="post-65 product type-product status-publish has-post-thumbnail clearfix featured shipping-taxable purchasable product-type-variable product-cat-shirt product-tag-attributes instock">

    								<div class="row">
    									<div class="col-sm-5" style="position:relative">
    										<div class="images">

    											<a href="../../wp-content/uploads/2013/01/<?php echo $row['srcimg']; ?>" itemprop="image" class="woocommerce-main-image zoom" title="Sample" data-rel="prettyPhoto[product-gallery]">
    												<img width="455" height="475" src="../../wp-content/uploads/2013/01/<?php echo $row['srcimg']; ?>" class="attachment-shop_single wp-post-image" alt="Sample" title="Sample" data-at2x="../../wp-content/uploads/2013/01/328390_mrp_in_l.jpg" /></a>
    												<div class="thumbnails flexslider" id="flexcarousel-product">
    													<ul class="slides">
                                                            <?php
                                                                    $couleur_sql=mysqli_query($conn,"SELECT * FROM `couleurs` WHERE idarticle='$id';");
                                                                    while($row2=mysqli_fetch_array($couleur_sql,MYSQLI_ASSOC)){
                                                                        echo'
                                                            <li>
                                                            <a href="../../wp-content/uploads/2013/01/'.$row2['imgcouleur'].'" class="zoom first" title="Sample" data-rel="prettyPhoto[product-gallery]">
                                                            <img width="455" height="475" src="../../wp-content/uploads/2013/01/'.$row2['imgcouleur'].'" class="attachment-shop_single" alt="Sample" />
                                                            </a>
                                                            </li>';
                                                            }

                                                            ?>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-sm-7">

                                             <div class="details wrap">
                                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

                                                   <h4 itemprop="price" class="price"><i class="fa fa-tag"></i> 
                                                      <ins><span class="amount">&pound;<?php echo $row['prix']?></span></ins>	</h4>		

                                                      <meta itemprop="priceCurrency" content="GBP" />
                                                      <meta itemprop="priceCurrency" content="GBP" />
                                                      <link itemprop="availability" href="http://schema.org/InStock" />

                                                  </div><?php echo $row['description']?><div itemprop="description">
                                                  <p></p>
                                              </div>


                                              <form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="65" data-product_variations="[{&quot;variation_id&quot;:73,&quot;variation_is_visible&quot;:true,&quot;variation_is_active&quot;:true,&quot;is_purchasable&quot;:true,&quot;display_price&quot;:57,&quot;display_regular_price&quot;:65,&quot;attributes&quot;:{&quot;attribute_pa_size&quot;:&quot;small&quot;,&quot;attribute_pa_color&quot;:&quot;blue&quot;},&quot;image_src&quot;:&quot;http:\/\/thehumblespace.com\/wp\/humbleshop\/wp-content\/uploads\/2013\/01\/340332_mrp_fr_l.jpeg&quot;,&quot;image_link&quot;:&quot;http:\/\/thehumblespace.com\/wp\/humbleshop\/wp-content\/uploads\/2013\/01\/340332_mrp_fr_l.jpeg&quot;,&quot;image_title&quot;:&quot;sample&quot;,&quot;image_alt&quot;:&quot;&quot;,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;del&gt;&lt;span class=\&quot;amount\&quot;&gt;&pound;65.00&lt;\/span&gt;&lt;\/del&gt; &lt;ins&gt;&lt;span class=\&quot;amount\&quot;&gt;&pound;57.00&lt;\/span&gt;&lt;\/ins&gt;&lt;\/span&gt;&quot;,&quot;availability_html&quot;:&quot;&lt;p class=\&quot;stock in-stock\&quot;&gt;Only 1 left in stock&lt;\/p&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;weight&quot;:&quot; kg&quot;,&quot;dimensions&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;max_qty&quot;:1,&quot;backorders_allowed&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_downloadable&quot;:false,&quot;is_virtual&quot;:false,&quot;is_sold_individually&quot;:&quot;no&quot;},{&quot;variation_id&quot;:74,&quot;variation_is_visible&quot;:true,&quot;variation_is_active&quot;:true,&quot;is_purchasable&quot;:true,&quot;display_price&quot;:56,&quot;display_regular_price&quot;:77,&quot;attributes&quot;:{&quot;attribute_pa_size&quot;:&quot;medium&quot;,&quot;attribute_pa_color&quot;:&quot;pink&quot;},&quot;image_src&quot;:&quot;http:\/\/thehumblespace.com\/wp\/humbleshop\/wp-content\/uploads\/2013\/01\/328390_mrp_fr_l.jpeg&quot;,&quot;image_link&quot;:&quot;http:\/\/thehumblespace.com\/wp\/humbleshop\/wp-content\/uploads\/2013\/01\/328390_mrp_fr_l.jpeg&quot;,&quot;image_title&quot;:&quot;Sample&quot;,&quot;image_alt&quot;:&quot;&quot;,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;del&gt;&lt;span class=\&quot;amount\&quot;&gt;&pound;77.00&lt;\/span&gt;&lt;\/del&gt; &lt;ins&gt;&lt;span class=\&quot;amount\&quot;&gt;&pound;56.00&lt;\/span&gt;&lt;\/ins&gt;&lt;\/span&gt;&quot;,&quot;availability_html&quot;:&quot;&lt;p class=\&quot;stock in-stock\&quot;&gt;In stock&lt;\/p&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;weight&quot;:&quot; kg&quot;,&quot;dimensions&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;max_qty&quot;:5,&quot;backorders_allowed&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_downloadable&quot;:false,&quot;is_virtual&quot;:false,&quot;is_sold_individually&quot;:&quot;no&quot;},{&quot;variation_id&quot;:75,&quot;variation_is_visible&quot;:true,&quot;variation_is_active&quot;:true,&quot;is_purchasable&quot;:true,&quot;display_price&quot;:44,&quot;display_regular_price&quot;:56,&quot;attributes&quot;:{&quot;attribute_pa_size&quot;:&quot;&quot;,&quot;attribute_pa_color&quot;:&quot;green&quot;},&quot;image_src&quot;:&quot;http:\/\/thehumblespace.com\/wp\/humbleshop\/wp-content\/uploads\/2013\/01\/194809_mrp_fr_l.jpeg&quot;,&quot;image_link&quot;:&quot;http:\/\/thehumblespace.com\/wp\/humbleshop\/wp-content\/uploads\/2013\/01\/194809_mrp_fr_l.jpeg&quot;,&quot;image_title&quot;:&quot;Sample&quot;,&quot;image_alt&quot;:&quot;&quot;,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;del&gt;&lt;span class=\&quot;amount\&quot;&gt;&pound;56.00&lt;\/span&gt;&lt;\/del&gt; &lt;ins&gt;&lt;span class=\&quot;amount\&quot;&gt;&pound;44.00&lt;\/span&gt;&lt;\/ins&gt;&lt;\/span&gt;&quot;,&quot;availability_html&quot;:&quot;&lt;p class=\&quot;stock out-of-stock\&quot;&gt;Out of stock&lt;\/p&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;weight&quot;:&quot; kg&quot;,&quot;dimensions&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;max_qty&quot;:0,&quot;backorders_allowed&quot;:false,&quot;is_in_stock&quot;:false,&quot;is_downloadable&quot;:false,&quot;is_virtual&quot;:false,&quot;is_sold_individually&quot;:&quot;no&quot;}]">
                                               <table class="variations table" cellspacing="0">
                                                  <tbody>
                                                     <tr>
                                                        <td class="labels col-md-4"><label for="pa_size">Taille</label></td>
                                                        <td class="value col-md-8">
                                                           <select class="form-control" id="pa_size" name="attribute_pa_size" data-attribute_name="attribute_pa_size">
                                                              <option value="">Choisir la taille&hellip;</option>
                                                              <option value="small"  selected='selected'>Small</option>
                                                              <option value="medium" >Medium</option>
                                                              <option value="large" >Large</option>
                                                              <option value="extra-large" >Extra Large</option>						
                                                          </select> 
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                    <td class="labels col-md-4"><label for="pa_color">Couleur</label></td>
                                                    <td class="value col-md-8">
                                                       <select class="form-control" id="pa_color" name="attribute_pa_color" data-attribute_name="attribute_pa_color">
                                                          <option value="">Choisir le couleur&hellip;</option>
                                                          <?php 
                                                          $ses_sql=mysqli_query($conn,"SELECT `couleur` FROM `couleurs` WHERE idarticle='$id';");

                                                          while($row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC)){
                                                             echo '<option value="'.$row["couleur"].'" >'.$row["couleur"].'</option>';

                                                         }
                                                         ?>

                                                     </select> 
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>


                                     <div class="single_variation_wrap" style="display:none;">

                                      <div class="row">
                                         <div class="single_variation col-sm-4"></div>	
                                         <div class="variations_button col-sm-8">
                                            <div class="row">
                                               <div class="col-sm-6"><div class="quantity"><input type="number" step="1"   name="quantity" value="1" title="Qty" class="input-text qty text" size="4" /></div>
                                           </div>
                                           <div class="col-sm-6"><button type="submit" class="single_add_to_cart_button btn btn-default theme btn-block alt">Add to cart</button></div>	
                                       </div>
                                   </div>
                                   <div class="col-xs-12">
                                     <p class="text-center"><small><a class="reset_variations" href="#reset">Clear selection</a></small></p>				</div>
                                 </div>	

                                 <input type="hidden" name="add-to-cart" value="65" />
                                 <input type="hidden" name="product_id" value="65" />
                                 <input type="hidden" name="variation_id" class="variation_id" value="" />

                             </div>



                         </form>

                         <div class="product_meta">



                           <span class="sku_wrapper"><i class="fa fa-angle-right theme"></i> SKU: <span class="sku" itemprop="sku">N/A</span>.</span><br>


                           <span class="posted_in"><i class="fa fa-angle-right theme"></i> Category: <a href="../../product-category/shirt/index.html" rel="tag">Shirt</a>.</span><br>
                           <span class="tagged_as"><i class="fa fa-angle-right theme"></i> Tag: <a href="../../product-tag/attributes/index.html" rel="tag">Attributes</a>.</span>

                       </div>

                       <hr>

                       <div class="row socialshare">
                           <div class="col-sm-6 decidernote">Hard to decide? Ask your friends</div>
                           <div class="col-sm-6 decider">
                              <a target="_blank" href="http://twitter.com/home?status=Shirt%20With%20Attributes%20-%20http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/" title="Click to share this post on Twitter"><i class="fa fa-twitter-square"></i></a>
                              <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/&amp;t=Shirt%20With%20Attributes"><i class="fa fa-facebook-square"></i></a>
                              <a target="_blank" href="http://pinterest.com/pin/create/button?url=http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/&amp;media=http://thehumblespace.com/wp/humbleshop/wp-content/uploads/2013/01/328390_mrp_in_l.jpeg&amp;description=Shirt%20With%20Attributes"><i class="fa fa-pinterest-square"></i></a>  
                              <a target="_blank" href="https://plus.google.com/share?url=http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/"><i class="fa fa-google-plus-square"></i></a>
                              <a target="_blank" href="mailto:me?subject=Shirt With Attributes&body=http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/"><i class="fa fa-envelope"></i></a>
                          </div>
                      </div>
                      <div class="woocommerce-tabs">
                       <ul class="tabs nav nav-tabs">

                          <li class="description_tab">
                             <a href="#tab-description"><i class="fa fa-th-large theme"></i>  Description</a>
                         </li>


                         <li class="additional_information_tab">
                             <a href="#tab-additional_information"><i class="fa fa-th-large theme"></i>  Additional Information</a>
                         </li>


                         <li class="reviews_tab">
                             <a href="#tab-reviews"><i class="fa fa-th-large theme"></i>  Reviews (0)</a>
                         </li>

                     </ul>

                     <div class="panel entry-content" id="tab-description">

                      <h2>Product Description</h2>

                      <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor.</p>
                  </div>


                  <div class="panel entry-content" id="tab-additional_information">

                      <h2>Additional Information</h2>

                      <table class="shop_attributes table table-bordered">





                         <tr class="">
                            <th>Size</th>
                            <td><p>Small, Medium, Large, Extra Large</p>
                            </td>
                        </tr>
                        <tr class="alt">
                            <th>Color</th>
                            <td><p>Blue, Red, Green, Pink, Yellow</p>
                            </td>
                        </tr>

                    </table>
                </div>


                <div class="panel entry-content" id="tab-reviews">
                  <div id="reviews">
                     <div id="comments">
                        <h2>Reviews</h2>


                        <p class="woocommerce-noreviews">There are no reviews yet.</p>

                    </div>


                    <div id="review_form_wrapper">
                        <div id="review_form">
                           <div id="respond" class="comment-respond">
                              <h3 id="reply-title" class="comment-reply-title">Be the first to review &ldquo;Shirt With Attributes&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h3>
                              <form action="http://thehumblespace.com/wp/humbleshop/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                 <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" /></p>
                                 <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" aria-required="true" /></p>
                                 <p class="comment-form-rating"><label for="rating">Your Rating</label><select name="rating" id="rating">
                                    <option value="">Rate&hellip;</option>
                                    <option value="5">Perfect</option>
                                    <option value="4">Good</option>
                                    <option value="3">Average</option>
                                    <option value="2">Not that bad</option>
                                    <option value="1">Very Poor</option>
                                </select></p><p class="comment-form-comment"><label for="comment">Your Review</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>												<p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit" value="Submit" />
                                <input type='hidden' name='comment_post_ID' value='65' id='comment_post_ID' />
                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                            </p>
                        </form>
                    </div><!-- #respond -->
                </div>
            </div>


            <div class="clear"></div>
        </div>
    </div>

</div>

</div>

</div><!-- .summary -->	
</div>

<hr>
<div class="upsells products clearfix">

   <h5>YOU MAY ALSO LIKE&hellip;</h5>

   <div id="products" class="products row">


      <article class="product col-sm-3"> 


         <div class="view view-thumb">
            <img src="../../wp-content/uploads/2013/01/196623_mrp_in_l.jpg" data-at2x="http://thehumblespace.com/wp/humbleshop/wp-content/uploads/2013/01/196623_mrp_in_l.jpeg" alt="Rough Sunset Jacket"/>
            <div class="mask">
               <h2 class="maskprice"><span class="amount">&pound;123.00</span></h2>
               <p>Ut in nulla eni..</p>                    <form action="http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/?add-to-cart=110" class="cart" method="post" enctype='multipart/form-data'>
               <a href="../rough-sunset-jacket/index.html" class="btn btn-sm custom">View</a> 
               <button type="submit" class="single_add_to_cart_button btn btn-sm custom">Buy</button>
           </form>
       </div>
   </div>
   <p class="product-title"><a href="../rough-sunset-jacket/index.html">Rough Sunset Jacket</a></p>



</article>


<article class="product col-sm-3"> 


  <div class="view view-thumb">
     <img src="../../wp-content/uploads/2013/01/340332_mrp_in_l.jpg" data-at2x="http://thehumblespace.com/wp/humbleshop/wp-content/uploads/2013/01/340332_mrp_in_l.jpeg" alt="Red Garage"/>
     <div class="mask">
        <h2 class="maskprice"><span class="amount">&pound;83.00</span></h2>
        <p>Ut in nulla eni..</p>                    <form action="http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/?add-to-cart=99" class="cart" method="post" enctype='multipart/form-data'>
        <a href="../red-garage/index.html" class="btn btn-sm custom">View</a> 
        <button type="submit" class="single_add_to_cart_button btn btn-sm custom">Buy</button>
    </form>
</div>
</div>
<p class="product-title"><a href="../red-garage/index.html">Red Garage</a></p>



</article>


<article class="product col-sm-3"> 


   <div class="view view-thumb">
      <img src="../../wp-content/uploads/2013/01/340333_mrp_in_l.jpg" data-at2x="http://thehumblespace.com/wp/humbleshop/wp-content/uploads/2013/01/340333_mrp_in_l.jpeg" alt="Blues Denim"/>
      <div class="mask">
         <h2 class="maskprice"><span class="amount">&pound;199.00</span></h2>
         <p>Praesent id met..</p>                    <form action="http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/?add-to-cart=107" class="cart" method="post" enctype='multipart/form-data'>
         <a href="../blues-denim/index.html" class="btn btn-sm custom">View</a> 
         <button type="submit" class="single_add_to_cart_button btn btn-sm custom">Buy</button>
     </form>
 </div>
</div>
<p class="product-title"><a href="../blues-denim/index.html">Blues Denim</a></p>



</article>


<article class="product col-sm-3"> 


    <div class="view view-thumb">
       <img src="../../wp-content/uploads/2013/01/194809_mrp_in_l.jpg" data-at2x="http://thehumblespace.com/wp/humbleshop/wp-content/uploads/2013/01/194809_mrp_in_l.jpeg" alt="Simple Kinky Shirt"/>
       <div class="mask">
          <h2 class="maskprice"><span class="amount">&pound;98.00</span></h2>
          <p>In pellentesque..</p>                    <form action="http://thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/?add-to-cart=58" class="cart" method="post" enctype='multipart/form-data'>
          <a href="../simple-kinky-shirt/index.html" class="btn btn-sm custom">View</a> 
          <button type="submit" class="single_add_to_cart_button btn btn-sm custom">Buy</button>
      </form>
  </div>
</div>
<p class="product-title"><a href="../simple-kinky-shirt/index.html">Simple Kinky Shirt</a></p>



</article>

</div>
</div>


<meta itemprop="url" content="index.html" />

</div><!-- #product-65 -->



</div> 


</div>

</section>

</div></div>

<!-- ============== -->
<!-- FOOTER SECTION -->
<!-- ============== -->

<?php include"../../footer/footer.php";?>

<script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/thehumblespace.com\/wp\/humbleshop\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/scripts0235.js?ver=4.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp\/humbleshop\/wp-admin\/admin-ajax.php","i18n_view_cart":"View Cart","cart_url":"http:\/\/thehumblespace.com\/wp\/humbleshop\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.minc6bd.js?ver=3.1.5'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.init.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/single-product.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minc8cb.js?ver=2.60'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp\/humbleshop\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp\/humbleshop\/wp-admin\/admin-ajax.php","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../../wp-content/plugins/yith-woocommerce-featured-video/assets/js/woo-featured-videoc64e.js?ver=1.1.1'></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=20121210'></script>
<script type='text/javascript' src='../../wp-content/themes/humbleshop/framework/js/shop6223.js?ver=20121210'></script>
<script type='text/javascript' src='../../wp-content/themes/humbleshop/framework/js/scriptf3bd.js?ver=20130124'></script>
<script type='text/javascript' src='../../wp-includes/js/comment-reply.min0235.js?ver=4.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.minc0b8.js?ver=2.3.7'></script>

</body>

<!-- Mirrored from thehumblespace.com/wp/humbleshop/shop/shirt-with-attributes/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:19:42 GMT -->
</html>