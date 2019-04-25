<?PHP
	include "../entities/coach.php";
	include "../core/coachC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']))
{
	$coach1=new coach(0,$_POST['nom'],$_POST['prenom'],$_POST['mail']);

		$coach1C=new coachC();

		$coach1C->ajoutercoach($coach1);

		header('Location: affichercoach.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>