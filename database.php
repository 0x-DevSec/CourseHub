<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "lms";

    $connexion = mysqli_connect("$host","$username","$password","$database");
    if(!$connexion)
    {
        die("Database connection failed:" . mysqli_connect_error());
    }
 ?>