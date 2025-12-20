<?php
  include "functions.php";
  check_login();
  if (isset($_GET['id']))
  {
    $id = $_GET['id'];
    $sql = "DELETE  FROM courses WHERE id = $id";
    mysqli_query($connexion,$sql);

    header("Location: courses.php");
  }