<!DOCTYPE html>
<html lang="en-US">

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
        ajout($article);
        
        header("Location:index.php?article=".$row['nom']."&ajout='success'& type=".$_GET['type']."categ=".$_GET['categ']."");
        
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
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Boutique | TunisieShop</title>

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
<?php include"../header/header.php";?>

<!-- ================ -->
<!-- MAIN NAV SECTION -->
<!-- ================ -->
<?php include"../navbar/nav.php" ;?>
                        <!-- ============ -->
                        <!-- SHOP SECTION -->
                        <!-- ============ -->

                        <div id="container" class="container"><div id="content" role="main">	<section class="product">

                            <div class="row">
                             <header class="col-xs-12 prime">
                              <h3>Boutique</h3>
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
                                <a href="index.php?type=h&amp;categ=veste">
                                    Vestes
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_726501" class="  ">
                                <a href="index.php?type=h&amp;categ=blazer">
                                    Blazers
                                </a>
                                 
                            </li>
                        

                            
                            <li id="menuItemData_358056" class="  ">
                                <a href="index.php?type=h&amp;categ=pantalon">
                                    Pantalons
                                </a>
                                 
                            </li>
                        
                            
                            <li id="menuItemData_368001" class="  ">
                                <a href="index.php?type=h&amp;categ=jean">
                                    Jeans
                                </a>
                                 
                            </li>
                        
                         
                            <li id="menuItemData_358053" class="  ">
                                <a href="index.php?type=h&amp;categ=chemise">
                                    Chemises
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358054" class="  ">
                                <a href="index.php?type=h&amp;categ=t-shirt">
                                    T-shirts
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_715535" class="  ">
                                <a href="index.php?type=h&amp;categ=polo">
                                    Polos
                                </a>
                                 
                            </li>
                        
                    
                        
                    
                            
                            <li id="menuItemData_358057" class="  ">
                                <a href="index.php?type=h&amp;categ=chaussure">
                                    Chaussures
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358066" class="  ">
                                <a href="index.php?type=h&amp;categ=sac">
                                    Sacs
                                </a>
                                 
                            </li>
                        
                    
                            
                            <li id="menuItemData_358070" class="  ">
                                <a href="index.php?type=h&amp;categ=access">
                                    Accessoires
                                </a>
                                 
                            </li>
                        
                    
                            
                        
                        
                        
                    </ul>

                        <h3><a href="#fe" onclick="showhide('f');" onmouseover="showhide('f');" id="fe">Femme</a></h3>
                      <ul class="current" id="f" <?php $type=$_GET['type']; if($type=='f') {echo 'style="display:block"';} else {echo 'style="display:none"';} ?>>
                        
                    
        
                            
                            <li id="menuItemData_392502" class="  ">
                                <a href="index.php?id='.$row['id'].'&amp;type='.$type.'&amp;categ='.$categ.'">
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
                      <ul class="current" id="e" <?php $type=$_GET['type']; if($type=='e') {echo 'style="display:block"';} else {echo 'style="display:none"';} ?> >
                        
                    
        
                            
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

         <?php if(isset($_GET['ajout'])):?>
         <div class="row shoptop">
        <div class="woocommerce-message alert alert-success text-left">
          <a href="http://thehumblespace.com/wp/humbleshop/cart/" class="button wc-forward">Voir Panier</a>
          "<?php echo $_GET['article']; ?>" a été ajouté à votre panier.
        </div>
        </div>
        <?php endif ;?>

				
<!-- Subcat -->
<div class="row subnav">
</div>

<!-- Loop start -->

<div id="products" class="products row">

   <?php
   



    

    $ses_sql=mysqli_query($conn,"SELECT * FROM `articles`;");

        $type=$_GET['type'];
        $categ=$_GET['categ'];
    
    if($_GET['type']!='' && $_GET['categ']!='')
    {  
        $ses_sql=mysqli_query($conn,"SELECT * FROM `articles`,`categorie` WHERE type='$type' and categorie.libelle='$categ' and articles.id=categorie.idarticle;");   
        }
    else{
        if($_GET['type']!=''){
        $ses_sql=mysqli_query($conn,"SELECT * FROM `articles` WHERE type='$type';");}
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
        <a href="article/index.php?id='.$row['id'].'&amp;nom='.$row['nom'].'" class="btn btn-sm custom">Voir</a> 
        <input type="hidden" name="add-to-cart" value="107" />
        <a href="index.php?id='.$row['id'].'&amp;type='.$type.'&amp;categ='.$categ.'" class="btn btn-sm custom">Acheter</a> 


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