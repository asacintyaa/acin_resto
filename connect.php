 


<?php 
$host = "localhost";
$db = "restoo";
$username = "root";
$password = "";
$dbconnect = mysqli_connect ($host, $username, $password, $db);

    if($dbconnect-> connect_error)
    {
        echo "koneksi gagal".$dbconnect ->connect_error;
        
    }
?>