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
            <form>
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your full name">
              </div>

              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email">
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Create a password">
              </div>

              <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm your password">
              </div>

              <div class="d-grid mb-3">
                <button type="button" class="btn btn-primary btn-lg">Register</button>
              </div>

              <div class="text-center">
                <small class="text-muted">
                  Already have an account?
                  <a href="login.php" class="text-decoration-none">Login here</a>
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
