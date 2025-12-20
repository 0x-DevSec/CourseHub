<?php
   include "functions.php";
   check_login();
    $sql = "
    SELECT 
      (SELECT COUNT(*) FROM courses) AS total_courses,
      (SELECT COUNT(*) FROM users) AS total_users,
      (SELECT COUNT(*) FROM sections) AS total_sections
    ";

      $result = mysqli_query($connexion, $sql);
      $data = mysqli_fetch_assoc($result);

      $totalCourses = $data['total_courses'];
      $totalUsers = $data['total_users'];
      $_totalsections = $data['total_sections'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CourseHub – Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">📘 CourseHub</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          <?php echo $_SESSION['user_information']['full_name']?>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="profile.php">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <aside class="col-md-2 bg-white border-end min-vh-100 p-3">
      <ul class="nav nav-pills flex-column gap-2">
        <li class="nav-item"><a class="nav-link active" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="courses.php"><i class="bi bi-book"></i> Courses</a></li>

        <li class="nav-item">
          <a class="nav-link" href="user_courses.php">
            <i class="bi bi-collection-play"></i> My Courses
          </a>
        </li>

        <!-- <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-layers"></i> Sections</a></li> -->
        <li class="nav-item"><a class="nav-link" href="users.php"><i class="bi bi-people"></i> Users</a></li>

      </ul>
    </aside>

    <!-- Main Content -->
    <main class="col-md-10 p-4">
      <h2 class="mb-4">Dashboard</h2>

      <!-- Stats Cards -->
      <div class="row g-4 mb-4">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted">Total Courses</h6>
              <h3 class="fw-bold"><?= $totalCourses?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted">Total Users</h6>
              <h3 class="fw-bold"><?= $totalUsers?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted">Total Sections</h6>
              <h3 class="fw-bold"><?= $_totalsections?></h3>
            </div>
          </div>
        </div>
      </div>
        
      </div>

    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
