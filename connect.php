<?php
session_start();
if(isset($_SESSION["uname"])){
    header("location: index.php");
    exit;
}


//ini menghubungkan ke database
$server = mysqli_connect("localhost", "root", "", "latihan_xpplg");

$uname = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM tb_login WHERE Username = '$uname'" ;
$result = mysqli_query($server, $sql);
$sql2 = "SELECT * FROM tb_login WHERE Password = '$pass'" ;
$result2 = mysqli_query($server, $sql2);

//ini mengecek apakah salah atau tidak
if(mysqli_num_rows($result) > 0 && mysqli_num_rows($result2) > 0) {
    $_SESSION ['username'] = $uname ;
    echo "<script>
    alert ('Login succesful !');
    document.location.href = 'index.php';
    </script>";

    $_SESSION ['password'] = $pass ;
    echo "<script>
    alert ('Login succesful !');
    document.location.href = 'index.php';
    </script>";


}else if (mysqli_num_rows($result)==0){
    echo "<script>
    alert ('incorrect username!');
    document.location.href = 'login.php';
    </script>";
}
else if(mysqli_num_rows($result2)==0){
    echo "<script>
    alert ('incorrect Password!');
    document.location.href = 'login.php';
    </script>";
}



?>