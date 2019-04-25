
<?PHP
include "../core/competitionC.php";
include "../config.php";
session_start ();
$competitionC=new competitionC();
if (isset($_POST["id_comp"])){
	$competitionC->Participer($_POST["id_comp"],$_SESSION['id']);
	header('Location:competition.php');
}	
?>



