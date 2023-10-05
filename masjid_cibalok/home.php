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
    <?php if($user_type == 'cisarua') : ?>
    <a href="cisarua/cisarua_1.php">Rayon cisarua 1</a>
    <a href="cisarua/cisarua_2.php">Rayon cisarua 2</a>
    <a href="cisarua/cisarua_3.php">Rayon cisarua 3</a>
    <?php endif ?>
    
</body>   
</html>