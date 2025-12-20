<?php
  include("functions.php");
  check_login();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CourseHub – Courses</title>
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
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php echo $_SESSION['user_information']['full_name']?></a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="profile.php">Profile</a></li>
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
          <a class="nav-link" href="dashboard.php"><i class="bi bi-speedometer2"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="courses.php"><i class="bi bi-book"></i> Courses</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-layers"></i> Sections</a>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="user_courses.php">
            <i class="bi bi-collection-play"></i> My Courses
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="users.php"><i class="bi bi-people"></i> Users</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="col-md-10 p-4">

      <!-- Page Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">📚 Courses</h2>
        <a href="add_course.php" class="btn btn-success">
          <i class="bi bi-plus-circle"></i> Add Course
        </a>
      </div>

      <!-- Courses Table -->
      <div class="card shadow-sm">
        <div class="card-body">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Level</th>
                <th>Description</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM courses";
            $result = mysqli_query($connexion, $query);
            while ($row = mysqli_fetch_assoc($result)): ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><span class="badge bg-primary"><?php echo $row['level'];?></span></td>
                <td><?php echo $row['description'];?></td>
                <td class="text-center">
                  <a href="enroll.php?course_id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">
                    <i class="bi bi-plus-circle"></i> Enroll
                  </a>
                  <a href="edit_courses.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-warning">
                    <i class="bi bi-pencil"></i> Edit
                  </a>
                  <a href="delete_courses.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-danger" 
                     onclick="return confirm('Are you sure you want to delete this course?');">
                    <i class="bi bi-trash"></i> Delete
                  </a>
                </td>
              </tr>
              <?php endwhile; ?>
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
