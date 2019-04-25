

<?PHP
include "../entities/commande.php";
include "../core/CommandeC.php";
$date=date('Y-m-d');
;
echo $_GET['prix'];
$commande=new commande($date,$_GET['prix']);
$commandeC=new CommandeC();
$commandeC->ajouterCommande($commande);
	header("Location: panier.php");
//*/

?>