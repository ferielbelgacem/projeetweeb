<?PHP
include "../core/stockC.php";
$StockC=new StockC();
$listeEmployes=$StockC->afficherStock();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>nom</td>
<td>reference</td>
<td>categorie</td>
<td>prix</td>
<td>etat</td>
<td>quantite</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['reference']; ?></td>
	<td><?PHP echo $row['categorie']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><form method="POST" action="supprimerStock.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierStock.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


