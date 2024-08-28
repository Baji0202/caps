<?php
    $host = "localhost";
    $dbname = "iphs_db";
    $user = "root";
    $pass = "";

    try {
        $pdoConnect = new PDO ("mysql:host=$host;dbname=$dbname",$user,$pass);
        $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\Throwable $th) {
        die ("connection error".$e->getMessage());
    }

?>