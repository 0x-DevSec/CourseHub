 <?php
    include "functions.php";
    check_login();

    $total_user = 0;
    while($_SESSION['user_information'])
    {
        $total_user = $total_user + 1;
    
    }

    return $total_user;

    $myquery = "SELECT * FROM enrollments Where user_id,cours_id join enrollments_id"


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users statistics</title>
</head>
<body>
    <h3>Total user: <?php echo $total_user; ?></h3>



</body>
</html> -->