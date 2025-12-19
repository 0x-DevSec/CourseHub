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
  <title>CourseHub – Add User</title>
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
          <a class="nav-link" href="#">
            <i class="bi bi-layers"></i> Sections
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="users.php">
            <i class="bi bi-people"></i> Users
          </a>
        </li>

      </ul>
    </aside>

    <!-- Main Content -->
    <main class="col-md-10 p-4">

      <!-- Page Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Add New User</h2>
        <a href="users.php" class="btn btn-secondary">
          <i class="bi bi-arrow-left"></i> Back
        </a>
      </div>

      <!-- Add User Form -->
      <div class="card shadow-sm">
        <div class="card-header fw-semibold">
          User Information
        </div>

        <div class="card-body">
          <form action="#" method="post" enctype="multipart/form-data">

            <div class="row g-3">

              <!-- Full Name -->
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter full name">
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>

              <!-- Password -->
              <div class="col-md-6">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter password">
              </div>

              <!-- Confirm Password -->
              <div class="col-md-6">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm password">
              </div>

            </div>

            <!-- Buttons -->
            <div class="mt-4 d-flex justify-content-end gap-2">
              <button type="reset" class="btn btn-outline-secondary">
                Reset
              </button>
              <button type="submit" class="btn btn-success">
                <i class="bi bi-check-circle"></i> Create User
              </button>
            </div>

          </form>
        </div>
      </div>

    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
