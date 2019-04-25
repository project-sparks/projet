<?PHP
include "../entities/cheval.php";
include "../core/chevalC.php";
// $_POST['sexe'];
if (isset($_POST['nom']) and isset($_POST['age']) and isset($_POST['sexe']) and isset($_POST['type']) and isset($_POST['image']) ){

$cheval1=new cheval($_POST['nom'],$_POST['age'],$_POST['type'],0,$_POST['sexe'],$_POST['image']);

$cheval1C=new chevalC();
$cheval1C->ajouterCheval($cheval1);

header("Location: affichagechevals.php");
}else{
	echo "vérifier les champs";
}
?>