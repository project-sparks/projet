<?PHP
include "../core/CommandeC.php";
$CommandeC=new CommandeC();
$listeCommandes=$CommandeC->afficherCommandes();
?>
<table border="1">
<tr>
<td>ID</td>
<td>DATE</td>
<td>DATE DISPONIBLE</td>
<td>ETAT</td>
<td>supprimer commande</td>

</tr>

<?PHP
foreach($listeCommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_com']; ?></td>
	<td><?PHP echo $row['date_com']; ?></td>
	<td><?PHP echo $row['date_dispo']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td><form method="POST" action="annulerCommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_com']; ?>" name="id">
	</form>
	</td>
	</tr>
	<?PHP
}
?>
</table>

<a href="ajoutCommande.html">ajout Commande</a>
