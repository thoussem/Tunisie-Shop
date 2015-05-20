<!DOCTYPE html>
<html lang="fr-FR">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<?php

	include("../connexion/lock.php");
  include("../panier/panier.php");
  
  $article=array();
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $ses_sql=mysqli_query($conn,"SELECT * FROM `articles` WHERE id='$id';");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $article['id']=$row['id'];
    $article['qte']=1;
    $article['nom']=$row['nom'];
    $article['taille']="M";
    $article['srcimg']=$row['srcimg'];
    $article['prix']=$row['prix'];
    $ajout=ajout($article);
    header("Location:index.php?article=".$row['nom']."&ajout='success'");
  }
  

  ?>


  <meta charset="UTF-8" />
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Acceuil | TunisieShop</title>


  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="../xmlrpc.php" />

  <!--Favicon-->
  <link rel="icon" href="../wp-content/uploads/2013/01/hsfavicon.png">

  <meta name='robots' content='noindex,follow' />
  <link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Feed" href="../feed/index.html" />
  <link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Comments Feed" href="../comments/feed/index.html" />
  <link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Homepage With Carousel Comments Feed" href="feed/index.html" />


  <link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles0235.css?ver=4.1.1' type='text/css' media='all' />
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
  <link rel='shortlink' href='../indexba1b.html?p=214' />
  <!-- Open Graph -->
  <meta property="og:title" content="Homepage With Carousel" />
  <meta property="og:url" content="http://thehumblespace.com/wp/humbleshop/homepage-with-carousel/" />
  <meta property="og:site_name" content="HumbleShop" />
  <meta property="og:description" content="" />
  <meta property="og:image" content=""/>

  <link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
  <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

	<!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv-printshiv.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
      </head>

      <body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page wf-active">


       <!-- ====== -->
       <!-- TOPBAR -->
       <!-- ====== -->
       <?php include"../topbar/topbar.php";?>


       <!-- ================= -->
       <!-- HEADER & BRANDING -->
       <!-- ================= -->

       <div class="container head">
        <div class="row">
         <div class="col-xs-12 clearfix">
          <div class="top row">

           <div class="col-sm-8 logo image">
            <a href="index.php" title="HumbleShop" rel="home">
             <img src="../wp-content/uploads/2013/01/highreslogo-300x75.png"  alt="" class="img-responsive" />
           </a>
         </div>

         <div class="searchcart col-sm-4">
          <form role="search" method="get" id="searchform" action="" class="topsearch form-inline">
           <div class="form-group">
            <input type="text" value="" name="s" id="s" placeholder="Recherche" class="top-search input-text" />
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
        <a href="index.php">Acceuil</a>
        
      </li>
      <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25">
        <a href="../shop/index.php?type=&amp;categ=">BOUTIQUE</a>
        <ul class="nav">
         <li id="menu-item-482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482">
          <a href="../shop/index.php?type=h&amp;categ=">Homme</a></li>
          <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-206">
            <a href="../shop/index.php?type=f&amp;categ=">Femme</a></li>
            <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-206">
              <a href="../shop/index.php?type=e&amp;categ=">Enfant</a></li>
            </ul>
          </li>
          <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-16">
            <a href="../my-account/index.php">MON COMPTE</a>
            <ul class="nav">
             <li id="menu-item-489" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-489">
              <a href="../checkout/index.php">Checkout</a></li>
              <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
                <a href="../cart/index.php">Panier</a></li>
              </ul>
            </li>             
            <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
              <a href="../contact-us/index.php">Contact</a></li>
            </ul>				</nav>
          </div>
        </div>
      </nav>
      <!-- ============ -->
      <!-- MAIN SECTION -->
      <!-- ============ -->
      <div class="container">
        <section class="feat">

         <!-- ============== -->
         <!-- SLIDER SECTION -->
         <!-- ============== -->

         <div class="row">
          <div id="flexslider" class="flexslider col-12">
           <ul class="slides">
            <li><img src="../wp-content/uploads/2013/01/masthead11.jpg" alt="Fifth Slider" /></li>
            <li><a href="#"><img src="../wp-content/uploads/2013/01/chaussure_g.jpg" alt="First Slider" /></a></li>
            <li><img src="../wp-content/uploads/2013/01/tshirt_g.jpg" alt="Sixth Slider" /></li>
            <li><img src="../wp-content/uploads/2013/01/sac_g.jpg" alt="Second Slider"  />
              <p class="flex-caption"><strong>Sac bowling vintage assorti</strong><br />
               <br /><br />
               <a class="btn theme">Acheter</a></p></li>
               <li><a href="#">
                 <img src="../wp-content/uploads/2013/01/banner-e.jpg" alt="Third Slider" /></a>
               </li>
               <li>
                 <img src="../wp-content/uploads/2013/01/banner-d.jpg" alt="Fourth Slider" />
               </li>		  
             </ul>
           </div>
         </div>

         <!-- ======== -->
         <!-- Carousel -->
         <!-- ======== -->

         <div class="row">
          <div class="carousel-option col-12">
           <div id="flexcarousel" class="flexslider">
            <ul class="slides">

             <li><img src="../wp-content/uploads/2013/01/masthead11.jpg" alt="Fifth Slider" /></li>
             <li><img src="../wp-content/uploads/2013/01/chaussure_g.jpg" alt="First Slider" /></li>
             <li><img src="../wp-content/uploads/2013/01/tshirt_g.jpg" alt="Sixth Slider" /></li>
             <li><img src="../wp-content/uploads/2013/01/sac_g.jpg" alt="Second Slider" /></li>
             <li><img src="../wp-content/uploads/2013/01/banner-e.jpg" alt="Third Slider" /></li>
             <li><img src="../wp-content/uploads/2013/01/banner-d.jpg" alt="Fourth Slider" /></li>	
           </ul>
         </div>
       </div>
     </div>



     <div class="row">

      <!-- Content -->
      <div class="col-xs-12">	

       <div class="row">
        <div class="col-xs-12 homecontent">


        </div>
      </div>

      <div class="row">

        <h5 class="subhead theme brands">
          <strong>PRODUITS VEDETTES</strong>
        </h5>

        <div class="col-xs-12">
        
        
        <?php if(isset($_GET['ajout'])):?>
        <div class="woocommerce-message alert alert-success text-left">
          <a href="http://thehumblespace.com/wp/humbleshop/cart/" class="button wc-forward">Voir Panier</a>
          "<?php echo $_GET['article']; ?>" a été ajouté à votre panier.
        </div>
        <?php endif ;?>

      </div>
      <div class="products clearfix">

        <!--Affichage des produit-->

        <?php


        $ses_sql=mysqli_query($conn,"SELECT * FROM `articles` WHERE vedette='1';");

        while($row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC)){
          echo '
          <Form method="post" action="">
          <article class="product col-sm-4"> 
          <div class="view view-thumb">
          <!-- Sale -->
          <!-- Thumbnail -->
          <img src="../wp-content/uploads/2013/01/'.$row['srcimg'].'" alt="'.$row['nom'].'"/>
          <div class="mask">
          <h2 class="maskprice">
          <span class="amount">'.$row['prix'].' DT</span>			</h2>
          <form class="cart" method="post" enctype=\'multipart/form-data\'>
          <p>Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl t..</p>										
          <a href="../shop/article/index.php?id='.$row['id'].'&amp;nom='.$row['nom'].'" class="btn btn-sm custom">Voir</a> 
          <input type="hidden" name="add-to-cart" value="120" />
          <a href="index.php?id='.$row['id'].'" class="btn btn-sm custom">Acheter</a> 
          </form>
          </div>
          </div>
          <p class="product-title">
          <a href="../shop/radiohead-pocket/index.html">'.$row['nom'].'</a>
          </p>
          </article>
          </form>
          ';


        }


        ?>


      </div><!--/.products-->
    </div>



  </div>

</div>
<h5 class="subhead theme brands"><strong>MARQUES DE CRÉATEUR</strong></h5>

<div class="tab-brand">
  <div id="flexcarousel-brands" class="flexslider">
   <ul class="slides">

    <li><img src="../wp-content/uploads/2013/01/brandc.jpg" alt="Clarks" /></li><li><img src="../wp-content/uploads/2013/01/brandh.jpg" alt="Hackett" /></li><li><img src="../wp-content/uploads/2013/01/brande.jpg" alt="Oliver People" /></li><li><img src="../wp-content/uploads/2013/01/brandg.jpg" alt="Dolce Gabbana" /></li><li><img src="../wp-content/uploads/2013/01/branda.jpg" alt="WishfulPink" /></li><li><img src="../wp-content/uploads/2013/01/brandf.jpg" alt="FaceFace" /></li><li><img src="../wp-content/uploads/2013/01/brandd.jpg" alt="Hannah" /></li><li><img src="../wp-content/uploads/2013/01/brandb.jpg" alt="Champion" /></li>					
  </ul>
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

<!-- Mirrored from thehumblespace.com/wp/humbleshop/homepage-with-carousel/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:17:09 GMT -->
</html>