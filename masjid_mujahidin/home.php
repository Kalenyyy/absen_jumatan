<?php 
session_start();
require "../controllers.php";

$user_type = $_SESSION['type'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do</title>
</head>
<body>
    <?php if($user_type == 'cicurug') : ?>
    <a href="cicurug/cicurug_1.php">Rayon Cicurug 1</a>
    <a href="cicurug/cicurug_2.php">Rayon Cicurug 2</a>
    <a href="cicurug/cicurug_3.php">Rayon Cicurug 3</a>
    <?php elseif($user_type == 'wikrama') : ?>
    <a href="wikrama/wikrama_1.php">Rayon Wikrama 1</a>
    <a href="wikrama/wikrama_2.php">Rayon Wikrama 2</a>
    <?php endif ?>
    
</body>   
</html>