<?php
  include "functions.php";
  check_login();

  // Generate avatar from user's full name
  $fullName = $_SESSION['user_information']['full_name'];
  $avatarUrl = "https://ui-avatars.com/api/?name=" . urlencode($fullName) . "&size=150&background=0D6EFD&color=fff";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CourseHub – Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">📘 CourseHub</a>
    <a href="dashboard.php" class="btn btn-outline-light btn-sm">
      <i class="bi bi-arrow-left"></i> Back to Dashboard
    </a>
  </div>
</nav>

<!-- Profile -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow-sm text-center">
        <div class="card-body">

          <!-- Avatar (UPDATED) -->
          <img
            src="<?php echo $avatarUrl; ?>"
            class="rounded-circle mb-3"
            alt="User Avatar"
            width="150"
            height="150"
          >

          <!-- User Info -->
          <h4 class="fw-bold mb-1">
            <?php echo htmlspecialchars($_SESSION['user_information']['full_name']); ?>
          </h4>
          <p class="text-muted mb-2">
            <?php echo htmlspecialchars($_SESSION['user_information']['email']); ?>
          </p>

          <ul class="list-group list-group-flush text-start mt-4">
            <li class="list-group-item">
              <strong>User ID:</strong>
              <?php echo $_SESSION['user_information']['id']; ?>
            </li>
            <li class="list-group-item">
              <strong>Full Name:</strong>
              <?php echo htmlspecialchars($_SESSION['user_information']['full_name']); ?>
            </li>
            <li class="list-group-item">
              <strong>Email:</strong>
              <?php echo htmlspecialchars($_SESSION['user_information']['email']); ?>
            </li>
          </ul>

        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
