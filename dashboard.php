<?php
   include "functions.php";

   if(empty($_SESSION))
   {
    header("Location: login.php");
   }
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
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-layers"></i> Sections</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-people"></i> Users</a></li>

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
              <h3 class="fw-bold">24</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted">Total Users</h6>
              <h3 class="fw-bold">312</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted">Total Sections</h6>
              <h3 class="fw-bold">128</h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Table -->
      <div class="card shadow-sm">
        <div class="card-header fw-semibold">Recent Courses</div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Course Title</th>
                <th>Sections</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>PHP for Beginners</td>
                <td>12</td>
                <td>
                  <button class="btn btn-sm btn-primary">View</button>
                  <button class="btn btn-sm btn-warning">Edit</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Laravel Essentials</td>
                <td>9</td>
                <td>
                  <button class="btn btn-sm btn-primary">View</button>
                  <button class="btn btn-sm btn-warning">Edit</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
