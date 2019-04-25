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
            

<?php
if(isset($_POST['price_range'])){
    
    //Include database configuration file
  $dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "projet";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //set conditions for filter by price range
    $whereSQL = $orderSQL = '';
    $priceRange = $_POST['price_range'];
    if(!empty($priceRange)){
        $priceRangeArr = explode(',', $priceRange);
        $whereSQL = "WHERE Prix BETWEEN '".$priceRangeArr[0]."' AND '".$priceRangeArr[1]."'";
        $orderSQL = " ORDER BY Prix ASC ";
    }else{
        $orderSQL = " ORDER BY Prix DESC ";
    }
    
    //get product rows
    $query = $db->query("SELECT * FROM sortie $whereSQL $orderSQL");
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
    ?>
       
             <?PHP

  ?>
                    



                           
                            
                <ul>


                                
                                    <li><a href="#" class="justify-content-between align-items-center d-flex"><h6><?PHP echo  $row['nom']?></h6> <span><?PHP echo $row['prix']." Dt"?></span></a></li>


    </ul>
                     


           

  <?PHP

?>
    
    <?php }
    }else{
        echo 'sortie(s) not found';
    }
}
?>