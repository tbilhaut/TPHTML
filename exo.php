<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='ExoCss_2.css'>
    <script src='main.js'></script>
</head>
<body>
 
<?php
             $a=array(
               0 => 23,
               1 => 10,
               2 => 5,
               3 => 4,
               4 => 2,
             );
               for($j=0; $j< 5; $j++)
               {
                  echo '['.$a[$j]."]";
               }
            ?>
<?php 
$NbrCol = 4;
$NbrLigne = 4;
echo '<table border="1" width="250">';
// 1ere ligne 
   echo '<tr>';
   echo '<td>5 chiffres</td>';
   $a=array(     
   0 => 23,
   1 => 10,
   2 => 5,
   3 => 4,
   4 => 2,
 );
   for ($j=0; $j<=$NbrCol; $j++) {
      echo '<td>'.$a[$j].'</td>';
   }


?>

</body>
</html>
