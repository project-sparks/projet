<?PHP
include "../core/CommandeC.php";
$CommandeC=new CommandeC();
if (isset($_POST["id"])){
	$CommandeC->traiterCommande($_POST["id"]);
	header('Location: Commandes.php');
}

?>