<?php
    include "functions.php";
    if(isset($_GET['id']))
    {
        $user_id = $_GET['id'];

        $sql = "DELETE FROM users WHERE id = $user_id";
        mysqli_query($connexion,$sql);
        header("Location: users.php");
    }
 ?>