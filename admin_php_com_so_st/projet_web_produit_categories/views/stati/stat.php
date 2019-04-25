<?php  
 $connect = mysqli_connect("localhost", "root", "", "projetweb");  
 $query = "SELECT produit.LIB_produit as nom, QTE_produit  AS somme FROM produit ORDER by somme DESC LIMIT 0,10";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  


     <script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('.table tbody tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>  
           
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['nom', 'somme'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["nom"]."', ".$row["somme"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      
                      is3D:true,  
                       pieHole: 0.4 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body> 
           <div >  
                <h3 align="center">Les Produits Les Plus Note</h3>  
                 
                <div id="piechart" style="width: 1200px; height: 300px;"></div>  
           </div>  
    
            
        
</body>
<a href="../afficherProduit.php"> afficher un produit</a>

</html>



