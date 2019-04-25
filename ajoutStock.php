<?PHP
include "../entities/stock.php";
include "../core/stockC.php";

if (isset($_GET['nom']) and isset($_GET['reference'])and isset($_GET['categorie']) and isset($_GET['prix']) and isset($_GET['etat']) and isset($_GET['quantite'])){
$Stock=new Stock(($_GET['nom']),($_GET['reference']),($_GET['categorie']), ($_GET['prix']), ($_GET['etat']), ($_GET['quantite']));
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$StockC=new StockC();
$StockC->ajouterStock($Stock);
header('Location: ../back/stock.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>