<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<table border="2px">
<?php
$tableau = array( 
   0 => array("Prénom" => "Théo","Nom" => "Bilhaut","MDP" => "tesze"),
   1 => array("Prénom" => "Supére","Nom" => "Sayan","MDP" =>"Goku"),
   2 => array("Prénom" => "Toic","Nom" => "LeChauve","MDP" => "Aimeleschats"),
   3 => array("Prénom" => "Jean","Nom" => "Claude","MDP" =>"456")
 );

for($i = 0; $i < sizeof($tableau); $i++) {
    echo "<tr><td>".$tableau[$i]["Prénom"].' - '.$tableau[$i]["Nom"].' - '.$tableau[$i]["MDP"].'</td></tr>';
}
?>
</table>
</body>
</html>