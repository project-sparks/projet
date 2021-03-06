<!DOCTYPE html>
<html lang="en">



<head>

  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">



  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  
  <link rel="stylesheet" type="text/css" href="css/table.css">






  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

<style>

.divewi{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.enzel{
  width: 110px;
  height: 36px;
  background: #6a89cc;
  margin: 23px;
  border: none;
  outline: none;
  cursor: pointer;
  color: #fff;
  font-family: "montserrat",sans-serif;
  text-transform: uppercase;
  font-size: 13px;
  transition: 0.4s;
  transform-style: preserve-3d;
  perspective: 800px;
}

.enzel::after{
  content: '';
  position: absolute;
  background: #4a69bd;
  transition: 0.4s;
}

.enzel1:hover{
  transform: rotateX(-20deg);
}
.enzel1:after{
  width: 100%;
  height: 24px;
  top: -24px;
  left: 0;
  transform-origin: 0 100%;
  transform: rotateX(90deg);
}



</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
<style>
  .contact-form{
  width: 85%;
  max-width: 600px;
  background: #f1f1f1;
  position: absolute;
  top: 53%;
  left: 50%;
  transform: translate(-50%,-50%);
  padding: 30px 40px;
  box-sizing: border-box;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 0 20px #000000b3;
  font-family: "Montserrat",sans-serif;
}

.contact-form h1{
  margin-top: 0;
  font-weight: 5px;
}

.txtb{
  border :1px solid gray;
  margin: 8px 0;
  padding: 12px 18px;
  border-radius: 8px;
}

.txtb label{
  display: block;
  text-align: left;
  color: #333;
  text-transform: uppercase;
  font-size: 14px;
}
.txtb input,.txtb textarea{
  width: 100%;
  border:none;
  background: none;
  outline: none;
  font-size: 13px;
  margin-top: 6px;
}

.btn{
  display: block;
  background-image: -webkit-linear-gradient(0deg, #f45622 0%, #f53e54 100%);
  padding: 14px 0;
  color: white;
  text-transform: uppercase;
  cursor: pointer;
  margin-top: 8px;
  width: 100%;
  border-radius: 10px;
}
</style>
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
<?PHP
$connect2 = mysqli_connect("localhost", "root", "", "projet");  
$query2 = "SELECT COUNT( mail ) AS nbre FROM rating ";
 $result2 = mysqli_query($connect2, $query2);

 while($row2=mysqli_fetch_array( $result2 ))
 {
  ?>              
              <span class="badge bg-theme"><?PHP echo $row2['nbre']?></span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
              
                
                <p class="green">vous avez <?PHP echo $row2['nbre']?> nouveaux avis</p>
<?PHP
}
  ?>              
              </li>
<?PHP
$connect = mysqli_connect("localhost", "root", "", "projet");  
 $query = "select * from rating";
 $result = mysqli_query($connect, $query);

 while($row=mysqli_fetch_array( $result ))
 {
  ?>
              <li>
                <a href="index.html#">
                  <span class="photo"></span>
                  <span class="subject">
                  <span class="from"><?PHP echo $row['mail']?></span>
                  <span class="time"><?PHP echo $row['rate']?> Stars</span>
                  </span>
                  <span class="message">
                  <?PHP echo $row['categorie']?><br><?PHP echo $row['message']?>
                  </span>
                  </a>
              </li>
<?PHP
}
  ?>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
<?PHP
$connect = mysqli_connect("localhost", "root", "", "projet");  
 $query = "SELECT * FROM notification";
 $result = mysqli_query($connect, $query);
?>
<?php
 while($row=mysqli_fetch_array( $result ))
 {
  ?>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>  <!--label label-danger warning success-->
                  <?PHP echo $row['nom']?>
                  <span class="small italic"><?PHP echo $row['daten']?></span>
                  </a>
              </li>
<?PHP
}
  ?>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
     <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/admin.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a  href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Accueil</span>
              </a>
          </li>




          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Evenements</span>
              </a>
            <ul class="sub">
              <li><a href="affichercompetition.php">Competitions</a></li>
              <li><a href="affichersortie.php">Sorties</a></li>
              <li><a href="afficherstage.php">Stages</a></li>
              <li><a href="promo.html">Promotions</a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="afficherabonnement.php">
              <i class="fa fa-desktop"></i>
              <span>Abonnements</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="cours.html">
              <i class="fa fa-desktop"></i>
              <span>Cours</span>
              </a>
          </li>


          <li class="sub-menu">
            <a href="coach.html">
              <i class="fa fa-desktop"></i>
              <span>Coach</span>
              </a>
          </li>


          <li class="sub-menu">
            <a href="produit.html">
              <i class="fa fa-desktop"></i>
              <span>Produit</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="reservation.html">
              <i class="fa fa-desktop"></i>
              <span>Reservation</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="Commandes.html">
              <i class="fa fa-desktop"></i>
              <span>Commandes</span>
              </a>
          </li>



          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
<?PHP
$connect = mysqli_connect("localhost", "root", "", "projet");  
 $query = "SELECT competition.lieu as lieu ,COUNT(lieu) as Somme FROM competition  GROUP by lieu ";
 $result = mysqli_query($connect, $query);
?>

              <!-- SERVER STATUS PANELS -->
              <div style="margin-top: 22px; margin-left: 57px;" class="col-md-4 col-sm-4 mb">
                <div  class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>SERVER LOAD</h5>
                  </div>
                  <canvas style="z-index: 1;" id="serverstatus01" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [
                    <?PHP
                    
                    while($row=mysqli_fetch_array( $result ))
                    {

                      ?>
                          {
                        value: <?php echo $row['Somme'] ;?>,
                        color: "#FF6B6B",
                        highlight: "lightskyblue",
                        label: "css"

                      },
 <?PHP
                    }
                      ?>
                    ] ;

                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Usage<br/>Increase:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2>21%</h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
  <button style="margin-left: 0px;" class="enzel enzel1" onclick="window.location.href='evenement.html'"><i class="fa fa-plus">&nbsp;&nbsp;&nbsp;</i>Ajouter</button>
              </div>


<?PHP
$connect = mysqli_connect("localhost", "root", "", "projet");  
 $query = "select * from (SELECt * from competition order by id_comp DESC LIMIT 2 ) tmp ORDER BY id_comp ASC
LIMIT 1";
 $result = mysqli_query($connect, $query);
?>  

              <div style="margin-top: 22px; margin-left: 57px;" class="col-lg-4 col-md-4 col-sm-4 mb">
                <div style="width: 329px;" class="product-panel-2 pn">
                  <br>
                  
                  <div class="badge badge-hot">LIVE</div>
                  <img style="border-radius: 5px;" src="img/product1.png" width="200" alt="">
                  <br>
                  <br>
                  <br>
                  <?php
 while($row=mysqli_fetch_array( $result ))
 {
  ?>
          <h5 class="mt"><?PHP echo "Nom : ".$row['nom']; ?></h5>
                  <h6><?PHP echo "Lieu : ".$row['lieu']; ?></h6>
   <?php
 }
                  ?>
        
                </div>
              </div>
 

<?PHP
$connect = mysqli_connect("localhost", "root", "", "projet");  
 $query = "SELECt * from competition where nbre=(select max(nbre) from competition)";
 $result = mysqli_query($connect, $query);
?>               
                <!-- WHITE PANEL - TOP USER -->
                <div style="width: 252px; margin-top: 22px;" class="white-panel pn">
                  <div class="white-header">
                                      <?php
 while($row=mysqli_fetch_array( $result ))
 {
  ?>
                    <h5>Meilleur Competition</h5>
                  </div>
                  <p><img src="img/polo.png" class="img-circle" width="50"></p>
                  <p><b><?php echo $row['nom']; ?></b></p>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="small mt">Date</p>
                      <p><?php echo $row['datec']; ?></p>
                    </div>
                    <div class="col-md-6">
                      <p class="small mt">Lieu</p>
                      <p><?php echo $row['lieu']; ?></p>
   <?php
 }
?>
                    </div>
                  </div>
                </div>
            



             
<?PHP
include "../core/competitionC.php";
$competition1C=new competitionC();
$listecompetitions=$competition1C->affichercompetitions();

?>


<!DOCTYPE html>
<html lang="en">



<body>

  <!-- Start your project here-->
 
    <div  class="container">

     
      <table class="table table-striped  table-bordered table-hover" id="mydata" style="width: 102%;">
        <thead>
          <tr>
            
<th >Nom</th>
<th >Nombre des Participants</th>
<th >Lieu</th>
<th >Date</th>
<th >Description</th>

<th >supprimer</th>
<th >modifier</th>



          </tr>
          

        </thead>

            <tbody>
              
              <?PHP

              foreach($listecompetitions as $row){
                ?>  
  <tr >
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['nbre']; ?></td>
  <td><?PHP echo $row['lieu']; ?></td>
  <td><?PHP echo $row['datec']; ?></td>
  <td><?PHP echo $row['descri']; ?></td>

                  <td>
                  <form method="POST" action="supprimercompetition.php">
                   <!-- <input class="enzel1" type="submit" name="supprimer" value="supprimer">-->
                   <button class="enzel enzel1" type="submit" name="supprimer"><i class="fa fa-trash">&nbsp;&nbsp;</i>supprimer</button>
                    <input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
                  </form>
                  </td>
  <td style="text-align: center;">
<br>
<br>
    <a href="modifiercompetition.php?id_comp=<?PHP echo $row['id_comp']; ?>">
  <i class="fa fa-edit"></i></a></td>
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

 
       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>

  
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->





  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="vendor/select2/select2.min.js"></script>

  <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="lib/jquery/jquery.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function(){
        ps.update();
      })
    });
      
    
  </script>
  <script src="js/main.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

  <script src="js/coach.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
