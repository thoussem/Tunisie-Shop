<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <?php
         include("../../connexion/lock.php");
          include "../../panier/panier.php";
          
          if(isset($_GET["id"])){
            $id=$_GET["id"];
            $article_sql=mysqli_query($conn,"SELECT * FROM `articles` WHERE id='$id';");
            $row=mysqli_fetch_array($article_sql,MYSQLI_ASSOC);
            $desc=$row['description'] ;
          }
         
           
            
          if(isset($_POST['ajouter'])){
            
            $ses_sql=mysqli_query($conn,"SELECT * FROM `articles` WHERE id='$id';");
            $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
            $article['id']=$row['id'];
            $article['qte']=$_POST['qte'];
            $article['nom']=$row['nom'];
            $article['taille']=$_POST['taille'];
            $article['couleur']=$_POST['couleur'];
            $article['srcimg']=$row['srcimg'];
            $article['prix']=$row['prix'];
         
            $ajout=ajout($article);
            header("Location:index.php?id=".$_GET['id']."&nom=".$_GET['nom']."");
           
          }
         
         
            ?>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $row['nom']?> | TuniseShop</title>
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
      <link rel="alternate" type="application/rss+xml"  title="New products" href="../feed/index.html" />
      <!-- Open Graph -->
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
                        <a href="../../shop/index.php?type=&amp;categ=">BOUTIQUE</a>
                        <ul class="nav">
                           <li id="menu-item-482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482">
                              <a href="../../shop/index.php?type=h&amp;categ=">Homme</a>
                           </li>
                           <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-206">
                              <a href="../../shop/index.php?type=f&amp;categ=">Femme</a>
                           </li>
                           <li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-206">
                              <a href="../../shop/index.php?type=e&amp;categ=">Enfant</a>
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
                              <a href="../../cart/index.php">Panier</a>
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
      <div id="container" class="container">
         <div id="content" role="main">
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
                                       <ins><span class="amount"><?php echo $row['prix'].' DT'?></span></ins> 
                                    </h4>
                                    <meta itemprop="priceCurrency" content="GBP" />
                                    <meta itemprop="priceCurrency" content="GBP" />
                                    <link itemprop="availability" href="http://schema.org/InStock" />
                                 </div>
                                 <?php echo $row['description']?>
                                 <div itemprop="description">
                                    <p></p>
                                 </div>
                                 <form  method="post" action="">
                                    <table class="variations table" cellspacing="0">
                                       <tbody>
                                          <tr>
                                             <td class="labels col-md-4"><label for="pa_size">Taille</label></td>
                                             <td class="value col-md-8">
                                                <select class="form-control" id="pa_size" name="taille" data-attribute_name="attribute_pa_size" required='required'>
                                                   <?php 
                                                      $s_selected="";
                                                      $m_selected="";
                                                      $l_selected="";
                                                      $xl_selected="";
                                                      $no_selected="";
                                                      
                                                        
                                                      
                                                      
                                                      if(verif_panier($_GET['id']))
                                                      {
                                                      $i=array_search($_GET['id'],$_SESSION['panier']['id_article']);
                                                      
                                                      if($_SESSION['panier']['taille'][$i]=="S")
                                                        {$s_selected="selected='selected'";}
                                                      elseif($_SESSION['panier']['taille'][$i]=="M")
                                                        {$m_selected="selected='selected'";}
                                                      elseif($_SESSION['panier']['taille'][$i]=="L")
                                                        {$l_selected="selected='selected'";}
                                                      elseif($_SESSION['panier']['taille'][$i]=="XL")
                                                        {$xl_selected="selected='selected'";}
                                                      else
                                                        {$no_selected="selected='selected'";}
                                                      
                                                      echo '<option value="no" '.$no_selected.'>Choisir la taille…</option>
                                                      <option value="S" '.$s_selected.' class="attached enabled">Small</option>
                                                      <option value="M" '.$m_selected.' class="attached enabled">Medium</option>
                                                      <option value="L" '.$l_selected.' class="attached enabled">Large</option>
                                                      <option value="XL" '.$xl_selected.' class="attached enabled">Extra Large</option>
                                                      </select>';
                                                      }
                                                      else{
                                                      echo '<option value="no" selected="selected">Choisir la taille ...</option>
                                                            <option value="S"  >Small</option>
                                                            <option value="M" >Medium</option>
                                                            <option value="L" >Large</option>
                                                            <option value="XL" >Extra Large</option>            
                                                            </select> ';
                                                            
                                                            
                                                      }
                                                      
                                                      
                                                      ?>
                                             </td>
                                          </tr>
                                          <tr>
                                          <td class="labels col-md-4">
                                          <label for="pa_color">Couleur</label>
                                          </td>
                                          <td class="value col-md-8">
                                          <select class="form-control" id="pa_color" name="couleur">
                                          <option value="">Choisir le couleur ... </option>
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
                                    <div class="row">
                                       <div class="single_variation col-sm-4"></div>
                                       <div class="variations_button col-sm-8">
                                          <div class="row">
                                             <div class="col-sm-4">
                                                <div class="quantity">
                                                   <?php if(verif_panier($id)){
                                                      $i=array_search($id,$_SESSION['panier']['id_article']);
                                                      $q=$_SESSION['panier']['qte'][$i];
                                                      }else{$q=1;}
                                                      
                                                      ?>
                                                   <input type="number" step="1"   name="qte" value=<?php echo $q ;?> title="Qty" class="input-text qty text" size="2" />
                                                </div>
                                             </div>
                                             <div class="col-sm-7">
                                                <input type="submit" class="btn btn-default theme" name="ajouter" value="Ajouter au Panier" />
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                                 <div class="product_meta">
                                    <span class="sku_wrapper"><i class="fa fa-angle-right theme"></i> Pour : <span class="sku" itemprop="sku">
                                    <?php 
                                       $ses_sql=mysqli_query($conn,"SELECT `type` FROM `articles` WHERE id='$id';");
                                       $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
                                       if($row['type']=='h')
                                                 {echo ' Homme';}
                                                 elseif($row['type']=='f')
                                                   {echo ' Femme';}
                                                 elseif($row['type']=='e')
                                                   {echo ' Enfant';}
                                       $ses_sql=mysqli_query($conn,"SELECT `libelle` FROM `articles`,`categorie` WHERE `articles`.id='$id' and `articles`.idcateg=`categorie`.id;");
                                       $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
                                       
                                         ?>
                                    </span>.</span><br>
                                    <span class="posted_in"><i class="fa fa-angle-right theme"></i> Categorie : <a href="../../product-category/shirt/index.html" rel="tag"><?php echo $row['libelle']?></a>.</span><br>
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
                                    </ul>
                                    <div class="panel entry-content" id="tab-description">
                                       <h2>Description du Produit </h2>
                                       <p><?php echo $desc ;?></p>
                                    </div>
                                    <div class="panel entry-content" id="tab-additional_information">
                                       <h2>Additional Information</h2>
                                       <table class="shop_attributes table table-bordered">
                                          <tr class="">
                                             <th>Size</th>
                                             <td>
                                                <p>Small, Medium, Large, Extra Large</p>
                                             </td>
                                          </tr>
                                          <tr class="alt">
                                             <th>Color</th>
                                             <td>
                                                <p>Blue, Red, Green, Pink, Yellow</p>
                                             </td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- .summary -->  
                        </div>
                        <hr>
                        <div class="upsells products clearfix">
                           <h5>YOU MAY ALSO LIKE&hellip;</h5>
                           <div id="products" class="products row">
                           </div>
                        </div>
                        <meta itemprop="url" content="index.html" />
                     </div>
                     <!-- #product-65 -->
                  </div>
               </div>
            </section>
         </div>
      </div>
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