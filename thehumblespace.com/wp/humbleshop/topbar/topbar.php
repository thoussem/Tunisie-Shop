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

    				<a href="../connexion/logout.php">
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

                                <a href="../shop/article/index.php?id='.$_SESSION['panier']['id_article'][$i].'&amp;nom='.$_SESSION['panier']['nom'][$i].'">'.$_SESSION['panier']['nom'][$i].'</a> 

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