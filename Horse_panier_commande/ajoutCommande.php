<?PHP
include "../entities/commande.php";
include "../core/CommandeC.php";

if ( isset($_POST['date']))
{

$commande=new commande($_POST['date']);
$commandeC=new CommandeC();
$commandeC->ajouterCommande($commande);
	header("Location: ajcommande.php");
}else{
	echo "vérifier les champs";
}
//*/

?>