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
    <?php if($user_type == 'cibedug') : ?>
    <a href="cibedug/cibedug_1.php">Rayon cibedug 1</a>
    <a href="cibedug/cibedug_2.php">Rayon cibedug 2</a>
    <a href="cibedug/cibedug_3.php">Rayon cibedug 3</a>
    <?php endif ?>
    
</body>   
</html>