<?php
session_start();
require 'controllers.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($server, "SELECT * FROM login WHERE 
                                    username = '$username' AND password = '$password'");

    
    if (mysqli_num_rows($query) > 0) {
        $fetch = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $fetch['id'];
        $_SESSION['type'] = $fetch['type'];
        $_SESSION['nama'] = $fetch['username'];
        
        if($fetch['type'] == 'superadmin') {
            echo "<script>
            alert ('Login succesful, Welcome!!');
            document.location.href = 'index.php';
           </script>";
        } elseif ($fetch['type'] == 'mujahidin') {
            echo "<script>
            alert ('Login succesful, Welcome!!');
            document.location.href = 'masjid_mujahidin/cicurug.php';
           </script>";
        } elseif ($fetch['type'] == 'kongsi') {
            echo "<script>
            alert ('Login succesful, Welcome!!');
            document.location.href = 'masjid_kongsi/sukasari.php';
           </script>";
        } elseif ($fetch['type'] == 'cibalok') {
            echo "<script>
            alert ('Login succesful, Welcome!!');
            document.location.href = 'masjid_cibalok/cisarua.php';
           </script>";
        } elseif ($fetch['type'] == 'al_iqram') {
            echo "<script>
            alert ('Login succesful, Welcome!!');
            document.location.href = 'masjid_al_iqram/cibedug.php';
           </script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    #username {
        background-image: url("img/p.png");
        background-repeat: no-repeat;
        background-size: 25px 25px;
        background-position: 10px 15px;
        padding-left: 50px;

    }

    #password {
        background-image: url("img/a.png");
        background-repeat: no-repeat;
        background-size: 23px 25px;
        background-position: 10px 15px;
        padding-left: 50px;
    }

    /* header */
    header img {
        position: absolute;
        width: 80px;
        height: 80px;
        right: 20px;
        top: 20px;
    }

    .header h1 {
        display: inline-block;

    }

    /* .text-tengah h1{
    left:50px;

    .text2 h1 {
        display: inline-block;
    }

    .kiri {
        width: 40%;

    }

    /* card  */
    .card {
        position: absolute;
        background: #E2F2FC;
        border: none;
        padding: 10px 40px;
        right: 60px;
        top: 150px;
        border-radius: 30px;
        box-shadow: 35px 31px 16px -5px rgba(0, 0, 0, 0.13);
        -webkit-box-shadow: 35px 31px 16px -5px rgba(0, 0, 0, 0.13);
        -moz-box-shadow: 35px 31px 16px -5px rgba(0, 0, 0, 0.13);

    }

    .card input {
        border: none;
        border-radius: 10px;
        outline: none;
        width: 90%;
        height: 55px;

    }

    .card button {
        border: none;
        border-radius: 5px;
    }

    .card h4 {
        color: #3D6F8A;
        padding-top: 30px;
    }

    .card button {
        background: #6096B4;
        width: 130px;
        border-radius: 20px;

    }

    /* card  */
</style>

<body>
    <header>
        <div class="header">
            <h1 style="margin-left:50px; margin-top:20px;">absen <span style="color:#3D6F8A;">jumat</span></h1>
            <!-- <h1 >kuy.id</h1> -->
        </div>
        <img src="img/wikrama.png">
    </header>

    <br>
    <!-- gambar nyapu  -->
    <img src="img/jumatan.png" class="kiri">
    <!-- gambar nyapu -->
    <div class="card " style="width:30rem; height:30rem;">
        <div class="card-body">
            <h4 class="card-title">masuk untuk melihat data solat jumat</h4>
            <center>
                <form method="post" action="">
                    <br>
                    <br>
                    <div>
                        <input type="text" id="username" name="username" placeholder="username" required>
                    </div>
                    <br>
                    <div>
                        <input type="password" id="password" name="password" placeholder="password" required>
                    </div>
                    <div>
                        <br>
                        <button type="submit" name="login" class="btn btn-primary">masuk</button>
                    </div>
                </form>
            </center>
        </div>
    </div>
    <!-- card login -->
</body>

</html>