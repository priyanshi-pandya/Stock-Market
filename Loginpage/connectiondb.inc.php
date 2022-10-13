<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'odxnozzk_perfecthit');
   define('DB_PASSWORD', 'odxnozzk_perfecthit');
   define('DB_DATABASE', 'odxnozzk_perfecthit');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


   if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>