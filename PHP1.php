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
    
    <div>
       
        <?php  
        $Variable = rand(0,100);
        ?>
        <div>
            
            <?php 
            
            if($Variable%2==1){
               echo "<div style='background-color:red;'>$Variable je suis impaire"; 
            }else
            {
                echo "<div style='background-color:blue;'>$Variable je suis paire"; 
            }
            ?>
            
        </div>
    </div>
    
</body>
</html>
