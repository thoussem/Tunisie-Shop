<?php
class panier{
	private $DB;

public function __construct($DB)
{
	if(!isset($_SESSION))
	{session_start();}

	if(!isset($_SESSION['panier']))
	{
		$_SESSION['panier']=array();
	}
	$this->DB=$DB;
}

	public function ajouter($produit_id)
	{	if(isset($_SESSION['panier'][$produit_id]))
		{$_SESSION['panier'][$produit_id]++;}
		else
			{$_SESSION['panier'][$produit_id]=1;}
	}

	public function del($produit_id)
	{
		unset($_SESSION['panier'][$produit_id]);
	}

	
}

?>