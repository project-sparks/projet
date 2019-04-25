<?PHP
include "../entities/reservation.php";
include "../core/reservationC.php";

if (isset($_POST['date']) and  isset($_POST['id'])){

$reservation1=new reservation($_POST['date']);

$reservation1C=new reservationC();
$reservation1C->ajouterReservation($reservation1,$_POST['id']);
header("Location: reservation.php");

}else{
	echo "vérifier les champs";
}
?>