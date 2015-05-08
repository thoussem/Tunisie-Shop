<?php
             include("conf.php");
             include("panier.php");
             $DB= new DB();
             $panier= new panier($DB);
if(isset($_GET['id']))
{ $produit=$DB->query('SELECT id FROM produits WHERE id=:id',array('id'=> $_GET['id']));
	
	if(empty($produit))
	{
		die('ce produit n\'existe pas');
	}

	$panier->ajouter($produit[0]->id);
	die('le produit a ete bien ajouter a votre panier <a href="javascript:history.back()" >retourner a la page precedente </a>');
}
else
{
	die('vous n\'avez pas selectionner un produit');
}
?>