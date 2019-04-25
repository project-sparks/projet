<?PHP
include "../core/chevalC.php";
$chevalC=new chevalC();
if (isset($_POST["id"])){
	$chevalC->supprimerCheval($_POST["id"]);
	header('Location: affichagechevals.php');
}

?>