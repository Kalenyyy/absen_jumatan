<?php
session_start();
if(!isset($_SESSION['type'])) {
    header("location: login.php");
    exit;
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
        <a href="logout.php">Logout</a>
    </header>
<main>
<a href="masjid_mujahidin/cicurug.php">
    <div class="cont card" >
        <div class="card-body">
            <img src="img/masjid.png">
            <h5>masjid Mujahidin</h5>
        </div>
    </div>
</a>
   
<a href="masjid_kongsi/sukasari.php">
    <div class="cont card" >
        <div class="card-body">
            <img src="img/masjid.png">
            <h5>Masjid Kongsi</h5>
        </div>
    </div>
</a>

<a href="masjid_cibalok/cisarua.php">
    <div class="cont card" >
        <div class="card-body">
            <img src="img/masjid.png">
            <h5>Masjid Cibalok</h5>
        </div>
    </div>
</a>

<a href="masjid_al_iqram/cibedug.php">
    <div class="cont card" >
        <div class="card-body">
            <img src="img/masjid.png">
            <h5>masjid Al-Iqram</h5>
        </div>
    </div>
</a>
</main>

</body>
</html>