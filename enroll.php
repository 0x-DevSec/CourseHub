<?php
include "functions.php";
check_login();

$user_id = $_SESSION['user_information']['id'];
$course_id = $_GET['course_id'];

/* Check if already enrolled */
$checkQuery = "SELECT id FROM enrollments 
               WHERE user_id = $user_id AND course_id = $course_id";

$checkResult = mysqli_query($connexion, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    // User already enrolled
    header("Location: user_courses.php?message=already_enrolled");
    exit;
}

/* Enroll user */
$query = "INSERT INTO enrollments (user_id, course_id)
          VALUES ($user_id, $course_id)";

mysqli_query($connexion, $query);

header("Location: user_courses.php?msg=enrolled");
exit;
