<?php
include "functions.php";
check_login();

$sql = "SELECT * FROM users";
$result = mysqli_query($connexion, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($connexion));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CourseHub – Users</title>
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

        <!-- <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-layers"></i> Sections
          </a>
        </li> -->

         <li class="nav-item">
          <a class="nav-link" href="user_courses.php">
            <i class="bi bi-collection-play"></i> My Courses
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
        <h2 class="mb-0">Users</h2>
      </div>

      <!-- Users Table -->
      <div class="card shadow-sm">
        <div class="card-header fw-semibold">
          All Users
        </div>

        <div class="card-body">
          <table class="table table-striped align-middle">
            <thead class="table-light">

              <tr>
                <th>id</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th class="text-end">Actions</th>
              </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['full_name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['created_at']; ?></td>
                    <td class="text-end">
                      <a href="delete_user.php?id=<?= $row['id']; ?>" 
                        class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure you want to delete this user?');">
                        <i class="bi bi-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
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
