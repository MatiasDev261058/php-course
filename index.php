<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
      $name = "PHP Store";
      $credit = 1000; 
    
      echo "<h1>Welcome to ".$name."!</h1>";
      echo "<h2>You have $".$credit." in your x wallet.</h2>";
    
      $products['Computer']=750;
      $products['Car']=15000;
      $products['iPhone']=1000;
      $products['Toaster']=75;
      echo "<p>A car costs $".$products['Car']."</p>";
    ?>
  </body>
</html>
