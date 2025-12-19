<?php
  include "functions.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CourseHub | Learn Smarter</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #0d6efd, #6610f2);
      color: #fff;
    }
    .navbar {
      background: transparent;
    }
    .hero {
      min-height: 90vh;
      display: flex;
      align-items: center;
    }
    .hero-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 1.5rem;
      padding: 3rem;
    }
    .feature-card {
      border-radius: 1rem;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">CourseHub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <?php if(empty($_SESSION['user_information'])):?>
              <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
          <?php else:?>

              <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
           <?php endif;?>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8">
          <div class="hero-card">
            <h1 class="display-4 fw-bold mb-3">Learn. Track. Grow.</h1>
            <p class="lead mb-4">
              CourseHub is a modern Learning Management System to manage courses, enrollments, and learning analytics.
            </p>
            <div class="d-flex justify-content-center gap-3">
              <?php if(empty($_SESSION['user_information'])):?>
                  <a href="register.php" class="btn btn-light btn-lg">Get Started</a>
                  <a href="login.php" class="btn btn-outline-light btn-lg">Login</a>
              <?php else:?>
                  <a href="dashboard.php" class="btn btn-light btn-lg">Go to Dashboard</a>
              <?php endif; ?>
              

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-5 bg-light text-dark">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col">
          <h2 class="fw-bold">Why CourseHub?</h2>
          <p class="text-muted">Everything you need in a mini-LMS</p>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="card feature-card h-100 shadow-sm">
            <div class="card-body text-center">
              <h5 class="card-title">Course Management</h5>
              <p class="card-text">Create, organize, and manage courses with ease.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card feature-card h-100 shadow-sm">
            <div class="card-body text-center">
              <h5 class="card-title">User Enrollments</h5>
              <p class="card-text">Students can enroll and track their learning journey.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card feature-card h-100 shadow-sm">
            <div class="card-body text-center">
              <h5 class="card-title">Learning Analytics</h5>
              <p class="card-text">Powerful statistics and dashboards for insights.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4 text-center">
    <div class="container">
      <small>&copy; 2025 CourseHub. All rights reserved.</small>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>