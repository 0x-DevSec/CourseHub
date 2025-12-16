<?php

// connect to database

include("database.php");

  $name = '';
  $email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors = "All fields are required.";
    }

 
    if ($password !== $confirm_password) {
        $errors = "Passwords do not match.";
    }

  
    if (strlen($password) < 8) {
        $errors = "Password must be at least 8 characters long.";
    }

    
    if (empty($errors)) {
        // send data to database
        $sql = "INSERT into users (full_name,email,password) VALUES ('$name','$email','$password')";
        mysqli_query($connexion,$sql);

         $name = '';
         $email = '';

         header("Location: login.php");



    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CourseHub | Register</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #0d6efd, #6610f2);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .register-card {
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card register-card">
          <div class="card-body p-4">
            
            <div class="text-center mb-4">
              <h2 class="fw-bold">CourseHub</h2>
              <p class="text-muted">Create your account</p>
            </div>

            <!-- Register Form (Design Only) -->
            <form method="POST">
              <?php if (!empty($errors)) : ?>
                <div class="alert alert-danger">
                  <ul class="mb-0">
                    <?php foreach ($errors as $error) : ?>
                      <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>

              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
              </div>

              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email;?>">
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
              </div>

              <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
              </div>
              <div class="text-center">
                 <small class="text-muted"> Already have an account? <a href="login.php" class="text-decoration-none">Login here</a></small>
              </div>
              
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
