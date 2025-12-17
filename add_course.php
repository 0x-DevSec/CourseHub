<?php
include "functions.php";
include_once "database.php";

if (empty($_SESSION)) {
    header("Location: login.php");
}

$title = "";
$desc = "";
$level = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = trim($_POST['title']);
    $desc = trim($_POST['description']);
    $level = trim($_POST['level']);

    do {
        if (empty($title) || empty($desc) || empty($level)) {
            $error_message = "Tous les champs sont obligatoires !";
            break;
        }

        $query = "INSERT INTO courses (title, description, level)
                  VALUES ('$title', '$desc', '$level')";
        $result = mysqli_query($connexion, $query);

        if (!$result) {
            $error_message = "Erreur lors de l'ajout du cours.";
            break;
        }

        header("Location: courses.php");
        exit;

    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Add Course – CourseHub</title>
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
          <?= $_SESSION['user_information']['full_name'] ?>
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
          <a class="nav-link active" href="courses.php">
            <i class="bi bi-book"></i> Courses
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-layers"></i> Sections</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-people"></i> Users</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="col-md-10 p-4">
      <h2 class="mb-4">Add New Course</h2>

      <div class="card shadow-sm">
        <div class="card-body">

          <!-- Error Alert -->
          <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger alert-dismissible fade show">
              <?= $error_message ?>
              <button class="btn-close" data-bs-dismiss="alert"></button>
            </div>
          <?php endif; ?>

          <!-- Form -->
          <form method="POST">

            <div class="mb-3">
              <label class="form-label fw-semibold">Course Title</label>
              <input type="text"
                     name="title"
                     class="form-control"
                     placeholder="Ex: PHP for Beginners"
                     value="<?= $title ?>">
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Description</label>
              <textarea name="description"
                        class="form-control"
                        rows="4"><?= $desc ?></textarea>
            </div>

            <div class="mb-4">
              <label class="form-label fw-semibold">Level</label>
              <select name="level" class="form-select">
                <option value="">Choose level</option>
                <option value="Débutant">Débutant</option>
                <option value="Intermédiaire">Intermédiaire</option>
                <option value="Avancé">Avancé</option>
              </select>
            </div>

            <div class="d-flex justify-content-between">
              <a href="courses.php" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
              </a>
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Add Course
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
