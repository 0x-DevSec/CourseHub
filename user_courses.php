<?php
include "functions.php";
check_login();

$user_id = $_SESSION['user_information']['id'];

/* Get courses the user is enrolled in */
$sql = "
    SELECT courses.*
    FROM enrollments
    INNER JOIN courses ON enrollments.course_id = courses.id
    WHERE enrollments.user_id = $user_id
";

$result = mysqli_query($connexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CourseHub – My Courses</title>
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
          <a class="nav-link active" href="user_courses.php">
            <i class="bi bi-collection-play"></i> My Courses
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="users.php">
            <i class="bi bi-people"></i> Users
          </a>
        </li>

      </ul>
    </aside>

    <!-- Main Content -->
    <main class="col-md-10 p-4">

      <!-- Page Header -->
      <div class="mb-4">
        <h2 class="mb-1">My Courses</h2>
        <p class="text-muted">Courses you are currently enrolled in</p>
      </div>

      <!-- Courses Grid -->
      <div class="row g-4">

        <?php if (mysqli_num_rows($result) > 0): ?>
          <?php while ($course = mysqli_fetch_assoc($result)): ?>

            <div class="col-md-4">
              <div class="card shadow-sm h-100">

                <img src="https://picsum.photos/600/350?random=<?php echo $course['id']; ?>"
                     class="card-img-top" alt="Course Image">

                <div class="card-body">
                  <h5 class="card-title">
                    <?php echo $course['title']; ?>
                  </h5>

                  <p class="card-text text-muted">
                    <?php echo $course['description']; ?>
                  </p>

                  <span class="badge bg-primary">
                    <?php echo $course['level']; ?>
                  </span>
                </div>

                <div class="card-footer bg-white border-0">
                  <a href="course_details.php?id=<?php echo $course['id']; ?>"
                     class="btn btn-primary w-100">
                    Continue Learning
                  </a>
                </div>

              </div>
            </div>

          <?php endwhile; ?>
        <?php else: ?>

          <div class="col-12">
            <div class="alert alert-info">
              You are not enrolled in any course yet.
            </div>
          </div>

        <?php endif; ?>

      </div>

    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
