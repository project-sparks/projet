<?PHP
include "../core/produitC1.php";
include "../../core/usersC.php";

$produit1C=new ProduitC();
$listeProduits=$produit1C->afficherProduits();

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Afficher Produit</title>

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
s


          </tr>
          

        </thead>

            <tbody>
              

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


  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Horse Club</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="css/linearicons.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/nice-select.css">          
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        <header id="header" id="home">
          <div class="container">

            <div class="row header-top align-items-center">

              <div class="col-lg-4 col-sm-4 menu-top-left">
                <a href="panier.php"><span class="lnr lnr-location"></span></a>
                <a class="tel" ><?PHP echo $_SESSION['email']; ?></a>
              </div>
              <div class="col-lg-4 menu-top-middle justify-content-center d-flex">

              <a href="index.html">
                <img class="img-fluid" src="img/logo.png" alt=""> 
              </a>                
              </div>
              <div class="col-lg-4 col-sm-4 menu-top-right">

                <a class="tel" href="tel:+880 123 12 658 439"></a>
                <a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
              </div>
            </div>
          </div>  
            <hr>
          <div class="container"> 
            <div class="row align-items-center justify-content-center d-flex">
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li ><a href="index.html">Home</a></li>
                  <li class="menu-active"><a href="ajoutproduitdanspanier.php">Produit</a></li>
                  <li><a href="service.html">Service</a></li>                 
                  <li><a href="training.html">training</a></li>
                  <li><a href="events.html">events</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li class="menu-has-children"><a href="">Blog</a>
                    <ul>
                      <li><a href="blog-home.html">Blog Home</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="elements.html">Elements</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->            
            </div>
          </div>
        </header><!-- #header -->
  <div class="container">

      <h1>Afficher Produit</h1>
      <table class="table table-striped  table-bordered table-hover" id="mydata">
        <thead>
          <tr>
            
            
<th >ID Produit</th>
<th >LIB Produit</th>
<th >Prix</th>
<th >Image</th>
<th >Description</th>
<th >Quantite de Produit</th>
<th >Etat</th>
<th>LIB categorie</th>
<th>Identifiant Panier</th>


<th >Ajouter dans le panier</th>



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
    <td><?PHP echo $row['id_panier']; ?></td>
  <td><a href="ajoutdanspanier.php?id=<?PHP echo $row['ID_produit']; ?>">
  Ajouter dans le panier</a></td>

  </tr>

  <?PHP
}
?>
            </tbody>

      </table>
    </div>
      <!-- start banner Area -->
      
          <div class="footer-bottom row">
            <p class="footer-text m-0 col-lg-6 col-md-12">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="footer-social col-lg-6 col-md-12">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </footer> 
      <!-- End footer Area -->

      <script src="js/vendor/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="js/vendor/bootstrap.min.js"></script>      
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="js/easing.min.js"></script>      
      <script src="js/hoverIntent.js"></script>
      <script src="js/superfish.min.js"></script> 
      <script src="js/jquery.ajaxchimp.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script> 
      <script src="js/owl.carousel.min.js"></script>      
      <script src="js/jquery.sticky.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>        
      <script src="js/jquery.nice-select.min.js"></script>      
      <script src="js/parallax.min.js"></script>  
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>      
      <script src="js/mail-script.js"></script> 
      <script src="js/main.js"></script>  
    </body>
  </html>



