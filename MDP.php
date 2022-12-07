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
<style>#divtest{color: blue;};</style>
<body>
    <?php 

  $tab2 = array(
 
      'nom' => 'Bilhaut', 
      'prenom' => 'Théo', 
      'MDP' => 'tqt', 
      
  );

    echo "<p id='divtest'> Nom :".$tab2['nom']."</p>";
    echo "<p id='divtest'> Prénom :".$tab2['prenom']."</p>";
    echo "<p id='divtest'> MDP :".$tab2['MDP']."</p>";
    ?>

    
</body>
</html>