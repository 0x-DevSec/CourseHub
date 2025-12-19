<?php
  include "functions.php";
  if (isset($_GET['id']))
  {
    $id = $_GET['id'];
    $sql = "DELETE  FROM courses WHERE id = $id";
    mysqli_query($connexion,$sql);

    header("Location: courses.php");
  }