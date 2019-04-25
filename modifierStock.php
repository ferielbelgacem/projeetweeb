<?PHP

include "../entities/employe.php";
include "../core/employeC.php";
if (isset($_GET['id_article'])){
	$CatalogueC=new CatalogueC();
    $result=$CatalogueC->recupererCatalogue($_GET['id_article']);
	foreach($result as $row){
		$id_article=$row['id_article'];
		$type=$row['type'];

?>
<HTML>
<head>
</head>
<body>
<form method="POST">
<table>
<caption>Modifier Catalogue</caption>

<tr>
<td>id</td>
<td><input type="text" name="id_article" value="<?PHP echo $id_article ?>"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_article" value="<?PHP echo $_GET['id_article'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Catalogue=new Catalogue($_POST['id_article'],$_POST['type']);
	$CatalogueC->modifierCatalogue($Catalogue,$_POST['id_article']);
	echo $_POST['id_article'];
	//header('Location: afficherStock.php');
}
?>
</body>
</HTMl>