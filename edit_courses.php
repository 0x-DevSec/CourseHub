<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Edit Course – CourseHub</title>
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
          Admin User
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
      <h2 class="mb-4">Edit Course</h2>

      <div class="card shadow-sm">
        <div class="card-body">

          <!-- Form -->
          <form>

            <div class="mb-3">
              <label class="form-label fw-semibold">Course Title</label>
              <input type="text"
                     class="form-control"
                     value="PHP for Beginners">
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Description</label>
              <textarea class="form-control" rows="4">Learn PHP from scratch with real projects.</textarea>
            </div>

            <div class="mb-4">
              <label class="form-label fw-semibold">Level</label>
              <select class="form-select">
                <option>Débutant</option>
                <option selected>Intermédiaire</option>
                <option>Avancé</option>
              </select>
            </div>

            <div class="d-flex justify-content-between">
              <a href="courses.html" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Cancel
              </a>

              <button type="button" class="btn btn-warning">
                <i class="bi bi-save"></i> Update Course
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
