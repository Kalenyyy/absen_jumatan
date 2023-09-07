
<?php
//ini sessionnya belum jalan kayaknya
session_start();
if(!isset($_SESSION["username"])){
    header("location: login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>rayon</title>
    <style>
        header{
            background-color: #ececec;
            padding: 2rem;
        }
        
        .cont{
            display: inline-block;
            margin-right: 8rem;
            width: 16rem;
            height: 20rem;
            margin-left: 2rem;
            background-color: #96D5FC21;
         
        }
        .cont img{
            width: 100%;
        }
        a{
            text-decoration: none;
        }
        main{
            margin-top: 10rem;
        }
    </style>
</head>
<body>
    <header>
        <h3>absen <span style="color:#3D6F8A;">jumatan</span></h3>
   
    </header>
<main>
<a href="masjid/cicurug.php">
    <div class="cont card" >
        <div class="card-body">
            <img src="img/masjid.png">
            <h5>masjid cicurug</h5>
        </div>
    </div>
</a>
   
<a href="masjid/kongsi.php">
    <div class="cont card" >
        <div class="card-body">
            <img src="img/masjid.png">
            <h5>masjid kongsi</h5>
        </div>
    </div>
</a>

<a href="masjid/cibalok.php">
    <div class="cont card" >
        <div class="card-body">
            <img src="img/masjid.png">
            <h5>masjid cibalok</h5>
        </div>
    </div>
</a>

<a href="masjid/muhajidin.php">
    <div class="cont card" >
        <div class="card-body">
            <img src="img/masjid.png">
            <h5>masjid muhajidin</h5>
        </div>
    </div>
</a>
</main>

</body>
</html>