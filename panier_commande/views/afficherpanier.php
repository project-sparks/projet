<?PHP
include "../core/PanierC.php";
$PanierC=new PanierC();
$listeProduits=$PanierC->afficherpanier();

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Afficher panier</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Start your project here-->
 
    <div class="container">

      <h1>Afficher Produit</h1>
      <table class="table table-striped  table-bordered table-hover" id="mydata">
        <thead>
          <tr>
            
<th >Identifiant Produit</th>
<th >Libellé Produit</th>
<th >Prix</th>
<th >Image</th>
<th >Description</th>
<th >Quantité Produit</th>
<th >Etat</th>
<th>Libellé Catégorie</th>
<th >Supprimer le produit du panier</th>
<th>Commander</th>


          </tr>
          

        </thead>

            <tbody>
              
 <?PHP

foreach($listeProduits as $row){
  ?>
  <tr >
  <td><?PHP echo $row['ID_produit']; ?></td>
  <td><?PHP echo $row['LIB_produit']; ?></td>
  <td><?PHP echo $row['Prix']; ?></td>
  <td>
<img  class="im1" src= "images/<?PHP echo $row['Image']; ?>" width="50"  height="50">



        </td>
  <td><?PHP echo $row['Description']; ?></td>
  <td><?PHP echo $row['QTE_produit']; ?></td>
  <td><?PHP echo $row['ETAT']; ?></td>
    <td><?PHP echo $row['lib_c']; ?></td>

    <td><a href="SupprimerPorduitdanspanier.php?id=<?PHP echo $row['ID_produit']; ?>">
  supprimer dans panier</a></td>
      <td>
<a href="ajoutCommande.html"> commander</a>
  </tr>
  <?PHP
}
?>
            </tbody>

      </table>
    </div>

  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
  <script >
    


$('#mydata').DataTable();





  </script>
</body>

</html>
<br>
<a href="stati/stat.php"> statistique </a>
<div class="imprimer">
        <input id="impression" name="impression" type="submit" onclick="imprimer_page()" value="Exporter les commandes en PDF " />
      </div>
 
       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>

<?php
       if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM tbl_items WHERE id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM tbl_inventory WHERE id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    $sql = "DELETE FROM tbl_inventory WHERE id='$delete_id' ";
                                    echo '<script>window.location.href="inventory.php"</script>';
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }
                        ?>