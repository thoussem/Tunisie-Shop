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

	public function total()
	{	
		$total = 0
		$ids=array_keys($_SESSION['panier']);
				if(empty($ids))
					{
						$produits=array();
					}
				else
						{$produits=$this->DB->query('SELECT id,prix FROM produits WHERE id IN ('.implode(',',$ids).')'); }
		
		foreach ($produits as $produit ) {
			$total += $produit->prix;
		}
		return $total;
	}
}

?>