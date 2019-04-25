<?PHP
include "../core/stockC.php";
$StockC=new StockC();
if (isset($_POST["id"])){
	$StockC->supprimerStock($_POST["id"]);
	header('Location: ../back/stock.php');
}

?>