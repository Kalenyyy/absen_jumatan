<?php 
$server = mysqli_connect("localhost", "root", "", "db_jumatan");

function query($query)
{
    global $server;
    $result = mysqli_query($server, $query);
    $all_data = [];

    while ($data = mysqli_fetch_assoc($result)) {
        $all_data[] = $data;
    }
    return $all_data;
}


?>