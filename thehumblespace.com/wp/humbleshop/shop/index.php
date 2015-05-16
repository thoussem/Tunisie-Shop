<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from thehumblespace.com/wp/humbleshop/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:17:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <?php

    include("lock.php");
    include("panier.php");

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
        ajout($article);
        
    }

    ?>

<script type="text/javascript">
<!--
    function showhide(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>



    
    <meta charset="UTF-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products | HumbleShop</title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="../xmlrpc.php" />

    <!--Favicon-->
    <link rel="icon" href="../wp-content/uploads/2013/01/hsfavicon.png">

    <meta name='robots' content='noindex,follow' />
    <link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Feed" href="../feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Comments Feed" href="../comments/feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Products Feed" href="feed/index.html" />
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
    <link rel="alternate" type="application/rss+xml"  title="New products" href="feed/index.html" />	<!-- Open Graph -->
    <meta property="og:title" content="Blues Denim" />
    <meta property="og:url" content="http://thehumblespace.com/wp/humbleshop/shop/blues-denim/" />
    <meta property="og:site_name" content="HumbleShop" />
    <meta property="og:description" content="Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. ..." />
    <meta property="og:image" content="http://thehumblespace.com/wp/humbleshop/wp-content/uploads/2013/01/340333_mrp_in_l.jpeg"/>

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

	<!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv-printshiv.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page wf-active">



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

                                <a href="../shop/shirt-with-attributes/index.php?id='.$_SESSION['panier']['id_article'][$i].'&amp;nom='.$_SESSION['panier']['nom'][$i].'">'.$_SESSION['panier']['nom'][$i].'</a> 

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
                                    <a href="http://thehumblespace.com/wp/humbleshop/cart/" class="btn btn-xs theme pull-right">Checkout</a>
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
                <ul id="nav" class="nav hidden-xs"><li id="menu-item-218" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-218"><a href="index.php">Acceuil</a>
                    <ul class="nav">
                        <li id="menu-item-217" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-214 current_page_item menu-item-217">
                            <a href="index.php">Homepage Carousel</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25">
                        <a href="../shop/index.php?type=">BOUTIQUE</a>
                        <ul class="nav">
                           <li id="menu-item-482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482">
                            <a href="../shop/index.php?type=h">Homme</a></li>
                            <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-206">
                                <a href="../shop/index.php?type=f">Femme</a></li>
                                <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-206">
                                    <a href="../shop/index.php?type=e">Enfant</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-16">
                                <a href="../my-account/index.php">MON COMPTE</a>
                                <ul class="nav">
                                   <li id="menu-item-489" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-489">
                                    <a href="../checkout/index.php">Checkout</a></li>
                                    <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
                                        <a href="../cart/index.php">Chariot</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-194">
                                    <a href="../page-left-sidebar/index.html">Page</a>
                                    <ul class="nav">
                                       <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-195">
                                        <a href="../page-right-sidebar/index.html">Page Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45">
                                    <a href="../blog/index.html">Blog</a></li>
                                    <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
                                        <a href="../contact-us/index.html">Contact</a></li>
                                    </ul>               </nav>
                                </div>
                            </div>
                        </nav>
                        <!-- ============ -->
                        <!-- SHOP SECTION -->
                        <!-- ============ -->

                        <div id="container" class="container"><div id="content" role="main">	<section class="product">

                            <div class="row">
                             <header class="col-xs-12 prime">
                              <h3>Shop</h3>
                          </header>
                      </div>

                      <div class="row">

                         <!-- Sidebar -->
                         <div class="col-sm-4 hidden-xs">
                          <div class="sidebar">
                           <aside id="woocommerce_widget_cart-3" class="widget woocommerce widget_shopping_cart">
                            <p class="title">Chariot</p>
                            <div class="widget_shopping_cart_content">

                                <ul class="cart_list product_list_widget ">

                                    <?php if(!isset($_SESSION['panier'])):?>
                                    <li class="empty">Aucun produit dans le panier.</li>
                                <?php else:?>
                                <?php 
                                $nb_art = count($_SESSION['panier']['id_article']);
                                for($i = 0; $i < $nb_art; $i++) 
                                { 

                                    echo'
                                    <li>
                                    <a href="../shop/shirt-with-attributes/index.php?id='.$_SESSION['panier']['id_article'][$i].'&amp;nom='.$_SESSION['panier']['nom'][$i].'">
                                    <img width="100" height="100" src="../wp-content/uploads/2013/01/'.$_SESSION['panier']['srcimg'][$i].'" class="attachment-shop_thumbnail wp-post-image" alt="sample">'.$_SESSION['panier']['nom'][$i].'                        </a>


                                    <span class="quantity">'.$_SESSION['panier']['qte'][$i].' × <span class="amount">'.$_SESSION['panier']['prix'][$i].'</span></span>                   
                                    </li>';}
                                    ?>
                                <?php endif; ?>

                            </ul><!-- end product list -->


                            <p class="total"><strong>Total:</strong> <span class="amount"><?php echo montant_panier(); ?> DT</span></p>


                            <p class="buttons">
                                <a href="../cart/index.php" class="button wc-forward">Voir Chariot</a>
                                <a href="http://thehumblespace.com/wp/humbleshop/checkout/" class="button checkout wc-forward">Checkout</a>
                            </p>


                        </div>
                    </aside>
                    <aside id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter">
                        <p class="title">Filtrer par prix</p>
                        <form method="get" action="http://thehumblespace.com/wp/humbleshop/shop">
                           <div class="price_slider_wrapper">
                            <div class="price_slider" style="display:none;"></div>
                            <div class="price_slider_amount">
                             <input type="text" id="min_price" name="min_price" value="" data-min="25" placeholder="Min price" />
                             <input type="text" id="max_price" name="max_price" value="" data-max="355" placeholder="Max price" />
                             <button type="submit" class="button">Filter</button>
                             <div class="price_label" style="display:none;">
                              Prix: <span class="from"></span> &mdash; <span class="to"></span>
                          </div>

                          <div class="clear"></div>

                      </div>

                      <h3><a href="#ho" onclick="showhide('h');" onmouseover="showhide('h');" id="ho">Homme</a></h3>
                      <ul class="current" id="h" <?php $type=$_GET['type']; if($type=='h') {echo 'style="display:block"';} else {echo 'style="display:none"';} ?>>
                        
                    
        
                            
                            <li id="menuItemData_392502" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/vestes-c392502.html">
                                    Vestes
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_726501" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/blazers-c726501.html">
                                    Blazers
                                </a>
                                 
                            </li>
                        

                            
                            <li id="menuItemData_358056" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/pantalons-c358056.html">
                                    Pantalons
                                </a>
                                 
                            </li>
                        
                            
                            <li id="menuItemData_368001" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/jeans-c368001.html">
                                    Jeans
                                </a>
                                 
                            </li>
                        
                         
                            <li id="menuItemData_358053" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/chemises-c358053.html">
                                    Chemises
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358054" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/t-shirts-c358054.html">
                                    T-shirts
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_715535" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/polos-c715535.html">
                                    Polos
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_364002" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/sweat-shirts-c364002.html">
                                    Sweat-shirts
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358055" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/pull-c358055.html">
                                    Pull
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358057" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/chaussures-c358057.html">
                                    Chaussures
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358066" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/sacs-c358066.html">
                                    Sacs
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358070" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/accessoires-c358070.html">
                                    Accessoires
                                </a>
                                 
                            </li>
                        
                    
                            
                        
                        
                        
                    </ul>

                        <h3><a href="#fe" onclick="showhide('f');" onmouseover="showhide('f');" id="fe">Femme</a></h3>
                      <ul class="current" id="f" <?php $type=$_GET['type']; if($type=='f') {echo 'style="display:block"';} else {echo 'style="display:none"';} ?>>
                        
                    
        
                            
                            <li id="menuItemData_392502" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/vestes-c392502.html">
                                    Vestes
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_726501" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/blazers-c726501.html">
                                    Blazers
                                </a>
                                 
                            </li>
                        

                            
                            <li id="menuItemData_358056" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/pantalons-c358056.html">
                                    Pantalons
                                </a>
                                 
                            </li>
                        
                            
                            <li id="menuItemData_368001" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/jeans-c368001.html">
                                    Jeans
                                </a>
                                 
                            </li>
                        
                         
                            <li id="menuItemData_358053" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/chemises-c358053.html">
                                    Chemises
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358054" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/t-shirts-c358054.html">
                                    T-shirts
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_715535" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/polos-c715535.html">
                                    Polos
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_364002" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/sweat-shirts-c364002.html">
                                    Sweat-shirts
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358055" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/pull-c358055.html">
                                    Pull
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358057" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/chaussures-c358057.html">
                                    Chaussures
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358066" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/sacs-c358066.html">
                                    Sacs
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358070" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/accessoires-c358070.html">
                                    Accessoires
                                </a>
                                 
                            </li>
                        
                    
                            
                        
                        
                        
                    </ul>
                        <h3><a href="#en" onclick="showhide('e');" onmouseover="showhide('e');" id="en">Enfant</a></h3>
                      <ul class="current" <?php $type=$_GET['type']; if($type=='e') {echo 'style="display:block"';} else {echo 'style="display:none"';} ?> >
                        
                    
        
                            
                            <li id="menuItemData_392502" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/vestes-c392502.html">
                                    Vestes
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_726501" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/blazers-c726501.html">
                                    Blazers
                                </a>
                                 
                            </li>
                        

                            
                            <li id="menuItemData_358056" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/pantalons-c358056.html">
                                    Pantalons
                                </a>
                                 
                            </li>
                        
                            
                            <li id="menuItemData_368001" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/jeans-c368001.html">
                                    Jeans
                                </a>
                                 
                            </li>
                        
                         
                            <li id="menuItemData_358053" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/chemises-c358053.html">
                                    Chemises
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358054" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/t-shirts-c358054.html">
                                    T-shirts
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_715535" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/polos-c715535.html">
                                    Polos
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_364002" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/sweat-shirts-c364002.html">
                                    Sweat-shirts
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358055" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/pull-c358055.html">
                                    Pull
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358057" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/chaussures-c358057.html">
                                    Chaussures
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358066" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/sacs-c358066.html">
                                    Sacs
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358070" class="  ">
                                <a href="http://www.zara.com/tn/fr/homme/accessoires-c358070.html">
                                    Accessoires
                                </a>
                                 
                            </li>
                        
                    
                            
                        
                        
                        
                    </ul>
                    </div>
                </form>
            </aside>
           	
        </div>
    </div>


    <div class="col-sm-8">

				
<!-- Subcat -->
<div class="row subnav">
</div>

<!-- Loop start -->

<div id="products" class="products row">

   <?php
   if(isset($_GET['page'])){

    $page=$_GET['page'];

    $deb=$page*9+$page;
    $fin=$page*9+$page+8;
}
else
    {	$page=0;
        $deb=1;
        $fin=9;

    }



    $ses_sql=mysqli_query($conn,"SELECT * FROM `articles` WHERE id>='$deb' and id<='$fin';");

    if(isset($_GET['type']))
    {
        $type=$_GET['type'];
        $ses_sql=mysqli_query($conn,"SELECT * FROM `articles` WHERE id>='$deb' and id<='$fin' and type='$type';");
    }

    while($row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC)){
        echo '
        <article class="product col-sm-4"> 
        <div class="view view-thumb">

        <!-- Sale -->

        <!-- Thumbnail -->
        <img src="../wp-content/uploads/2013/01/'.$row['srcimg'].'" alt="'.$row['nom'].'"/>
        <div class="mask">
        <h2 class="maskprice">
        <span class="amount">'.$row['prix'].' DT</span>     </h2>
        <form class="cart" method="post" enctype=\'multipart/form-data\'>
        <p>'.$row['description'].'</p>                   
        <a href="shirt-with-attributes/index.php?id='.$row['id'].'&amp;nom='.$row['nom'].'" class="btn btn-sm custom">Voir</a> 
        <input type="hidden" name="add-to-cart" value="107" />
        <a href="index.php?id='.$row['id'].'&amp;type='.$type.'" class="btn btn-sm custom">Acheter</a> 


        </form>
        </div>
        </div>
        <p class="product-title">
        <a href="blues-denim/index.html">'.$row['nom'].'</a>
        </p>
        </article>
        ';
    }


    ?>



</div>

<div class="shoptop bottom row">
   <div class="col-xs-3 text-left">
   </div>
   <div class="col-xs-6">
    <nav class="woocommerce-pagination" style="display:none">
     <ul class='page-numbers'>
      <li><span class='page-numbers current'>1</span></li>
      <li><a class='page-numbers' href='page/2/index.html'>2</a></li>
      <li><a class="next page-numbers" href="page/2/index.html">&rarr;</a></li>
  </ul>
</nav>
</div>



</div>


</div>

</section>

</div></div>

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
<script type='text/javascript' src='../wp-includes/js/jquery/ui/core.min4a80.js?ver=1.11.2'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/widget.min4a80.js?ver=1.11.2'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/mouse.min4a80.js?ver=1.11.2'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/slider.min4a80.js?ver=1.11.2'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/jquery-ui-touch-punch.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_price_slider_params = {"currency_symbol":"\u00a3","currency_pos":"left","min_price":"","max_price":""};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/price-slider.minc0b8.js?ver=2.3.7'></script>

</body>

<!-- Mirrored from thehumblespace.com/wp/humbleshop/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:17:18 GMT -->
</html>