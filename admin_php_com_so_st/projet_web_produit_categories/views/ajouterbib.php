<?PHP
include "../entities/bib.php";
include "../core/bib_c.php";
if (isset($_POST['image_f']) and isset($_POST['image_s']) and isset($_POST['image_t']) and isset($_POST['lib'])){






	$bib=new Produit($_POST['image_f'],$_POST['image_s'],$_POST['image_t'],$_POST['lib']);


$bibc=new bibc();
$bibc->ajouterbib($bib);






}else{
	echo "vérifier les champs";
}
?>