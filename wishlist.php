<?PHP
include "../core/CatalogueC.php";
$CatalogueC=new CatalogueC();
$listeEmployes=$CatalogueC->afficherCatalogue();
?>

<title>Liste des favoris</title>

<!-- BREADCRUMBS -->
            <div class="bcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="?controller=pages&action=home">Accueil</a></li>
                        <li>Mon Compte / Liste des favoris</li>
                    </ul>
                </div>
            </div>

		<!-- MY ACCOUNT -->
            <div class="account-wrap">
              <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- HTML -->
                            <div id="account-id">
                                <h4 class="account-title"><span class="fa fa-chevron-right"></span>Liste des favoris</h4>
                                <div class="order-history">
                                    <table class="cart-table">
                                        <tbody><tr>
                                            <th>Image</th>
                                            <th>Nom du produit</th>
                                            <th>Prix</th>
                                            <th></th>
                                        </tr>

                                        <?php foreach ($listeEmployes as $w){?>
                                        <tr>
                                            <td><img src="<?php echo $w['image']?>" class="img-responsive" alt=""></td>

                                            <td>
                                                <h4><a href="?controller=pages&action=singleproduct"><?php echo $w['id_article']?></a></h4>
                                               <p>nom: <?php echo $w['nom']?></p>
                                               <p>image: <?php echo $w['image']?></p>
                                            </td>
                                            <td>
                                                <div class="item-price" style="text-align: center"> <?php echo $w['nom']?> TTC</div>
                                            </td>
                                            <td>


                                            
                                               <form id="myform" method="post" action="?controller=wishlist&action=delete">
                                                       <input hidden name="id" value="<?php echo $w['id_article'];?>">
                                                        <a href="#" onclick="document.getElementById('myform').submit()" class="btn-black">Supprimer de la liste des favoris</a>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>

                                    </tbody></table>

                                    <div class="table-btn">
                                        <a href="?controller=pages&action=myaccount" class="btn-black pull-left">Retour au compte</a>
                                        <a href="?controller=product&action=all" class="btn-black pull-right">Retour au produits</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="clearfix space20"></div>
