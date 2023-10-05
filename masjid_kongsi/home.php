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
    <?php if($user_type == 'tajur') : ?>
    <a href="tajur/tajur_1.php">Rayon tajur 1</a>
    <a href="tajur/tajur_2.php">Rayon tajur 2</a>
    <a href="tajur/tajur_3.php">Rayon tajur 3</a>
    <?php elseif($user_type == 'sukasari') : ?>
    <a href="sukasari/sukasari_1.php">Rayon sukasari 1</a>
    <a href="sukasari/sukasari_2.php">Rayon sukasari 2</a>
    <a href="sukasari/sukasari_3.php">Rayon sukasari 3</a>
    <?php endif ?>
    
</body>   
</html>