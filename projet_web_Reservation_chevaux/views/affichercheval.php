<?PHP
include "../core/chevalC.php";
$chevalt1C=new chevalC();
$listeChevaux=$chevalt1C->afficherChevaux();
?>

<script type="text/javascript" src="recherche.js"></script>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" >

<select id="r2">
	<option >
		NOM
	</option>
	<option>
		SEXE

	</option>
	<option>
		ETAT
	</option>
	<option>
		TYPE
	</option>
</select>
<br>
<table border="1"  id="myTable">
<tr>
<th>NOM cheval</th>
<th>AGE cheval</th>
<th>etat</th>
<th>image</th>
<th>SEXE</th>
<th>TYPE</th>
<th>supprimer</th>
<th>modifier</th>
</tr>

<?PHP

foreach($listeChevaux as $row){
	?>
	<tr >
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td>
<img   src= "images/<?PHP echo $row['image']; ?>" width="50"  height="50">



        </td>
	<td><?PHP echo $row['sexe']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><form method="POST" action="supprimercheval.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idC']; ?>" name="idC">
	</form>
	</td>
	<td><a href="modifierChevaux.php?id=<?PHP echo $row['idC']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


<a href="ajoutCheval.html"> ajouter un cheval</a>
<br>
<a href="stati/stat.php"> statistique </a>