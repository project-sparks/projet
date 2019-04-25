



<?php

include "../core/panierC.php";
include "../entities/produit.php";
		function recupererProduit($id){
		$sql="SELECT * FROM produit where ID_produit= $id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{

		$res = $db->query($sql);

		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



if (isset($_GET['id']))
{

$PanierC = new PanierC();
$p=recupererProduit($_GET['id']);
foreach ($p as $row) {
	$etat=$row['ETAT'];
}
if ($etat=="Disponnible")
$PanierC->ajoutpanier($_GET['id']);

header("Location: ajoutproduitdanspanier.php");

}
?>