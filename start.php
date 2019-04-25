<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
$Catalogue=new Catalogue(75757575,'BEN Ahmed','Salah',50,20);
$CatalogueC=new CatalogueC();
$CatalogueC->afficherCatalogueC($Catalogue);
echo "****************";
echo "<br>";
echo "id_article:".$Catalogue->getId_article();
echo "<br>";
echo "type:".$Catalogue->getType()();
echo "<br>";


?>