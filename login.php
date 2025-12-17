<?php
  include("functions.php");

  if($_SERVER['REQUEST_METHOD']== 'POST'){
     $email = $_POST['email'];
     $password = $_POST['password'];

     $query = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
     $result = mysqli_query($connexion,$query);

    if(mysqli_num_rows($result) > 0)
    {
      // get associative array
      $row = mysqli_fetch_assoc($result);
      
      // save data in a session
      $_SESSION['user_information'] = $row;

      header("Location: profile.php");
    }
    else {

        $error = "incorrect email or password";

    }


  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CourseHub | Login</title>

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
    .login-card {
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card login-card">
          <div class="card-body p-4">

            <div class="text-center mb-4">
              <h2 class="fw-bold">CourseHub</h2>
              <p class="text-muted">Sign in to your account</p>
            </div>

            <!-- Login Form (Design Only) -->
            <form method="POST">
            <?php if (!empty($error)) : ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo htmlspecialchars($error); ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">
                    Remember me
                  </label>
                </div>
                <a href="#" class="text-decoration-none">Forgot password?</a>
              </div>

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
              </div>

              <div class="text-center">
                <small class="text-muted">
                  Don’t have an account?
                  <a href="register.php" class="text-decoration-none">Register</a>
                </small>
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
