<?PHP
include "../core/reservationC.php";


$idc=$_POST["is"];
$reservationC=new reservationC();
if (isset($_POST["idR"])){
	$reservationC->supprimerReservation($_POST["idR"],$idc);
	header("Location: afficherreservation.php");

}

?>