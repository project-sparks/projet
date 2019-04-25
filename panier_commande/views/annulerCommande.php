<?PHP
include "../core/CommandeC.php";
$CommandeC=new CommandeC();
if (isset($_POST["id"])){
	$CommandeC->supprimerCommande($_POST["id"]);
	header('Location: afficherCommande.php');
}

?>