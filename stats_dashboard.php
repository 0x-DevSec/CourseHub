<?php
  include "functions.php";

  if (empty($_SESSION)) {
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CourseHub – Statistics</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="dashboard.php">📘 CourseHub</a>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          <?php echo $_SESSION['user_information']['full_name']; ?>
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

        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
            <i class="bi bi-speedometer2"></i> Dashboard
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="courses.php">
            <i class="bi bi-book"></i> Courses
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-layers">
                </i> Sections
            </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="users.php">
            <i class="bi bi-people"></i> Users
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="stats_dashboard.php">
            <i class="bi bi-bar-chart"></i> Statistics
          </a>
        </li>

      </ul>
    </aside>

    <!-- Main Content -->
    <main class="col-md-10 p-4">

      <h2 class="mb-4">📊 Dashboard Statistics</h2>

      <!-- KPI CARDS -->
      <div class="row g-4 mb-5">

        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted">Total Courses</h6>
              <h3 class="fw-bold">24</h3>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted">Total Users</h6>
              <h3 class="fw-bold">312</h3>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted">Total Enrollments</h6>
              <h3 class="fw-bold">1,248</h3>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted">Most Popular Course</h6>
              <h5 class="fw-bold">PHP for Beginners</h5>
            </div>
          </div>
        </div>

      </div>

      <!-- KPI TABLES -->
      <div class="row g-4">

        <!-- Average Sections -->
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-header fw-semibold">
              Average Sections per Course
            </div>
            <div class="card-body">
              <h3 class="fw-bold text-center">5.4</h3>
            </div>
          </div>
        </div>

        <!-- Courses > 5 Sections -->
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-header fw-semibold">
              Courses with More Than 5 Sections
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Course</th>
                    <th>Sections</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td>Laravel</td><td>8</td></tr>
                  <tr><td>JavaScript</td><td>6</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Users This Year -->
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-header fw-semibold">
              Users Registered This Year
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td>Ali Hassan</td><td>ali@mail.com</td><td>2025-02-10</td></tr>
                  <tr><td>Sarah Smith</td><td>sarah@mail.com</td><td>2025-03-01</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Courses Without Enrollment -->
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-header fw-semibold">
              Courses Without Enrollment
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Course</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td>Docker Basics</td></tr>
                  <tr><td>Advanced Git</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Last Enrollments -->
        <div class="col-md-12">
          <div class="card shadow-sm">
            <div class="card-header fw-semibold">
              Latest Enrollments
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>User</th>
                    <th>Course</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td>John Doe</td><td>PHP</td><td>2025-03-10</td></tr>
                  <tr><td>Ali Hassan</td><td>Laravel</td><td>2025-03-09</td></tr>
                </tbody>
              </table>
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
