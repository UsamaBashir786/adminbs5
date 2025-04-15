<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="login-page">
    <div class="login-form">
      <div class="login-logo mb-4">
        <h2><i class="fas fa-lock me-2"></i>Admin Dashboard</h2>
        <p class="text-muted">Please sign in to continue</p>
      </div>

      <?php
      // Display error message if login failed
      if (isset($_GET['error'])) {
        echo '<div class="alert alert-danger">Invalid username or password</div>';
      }

      // Display success message for logout
      if (isset($_GET['logout'])) {
        echo '<div class="alert alert-success">You have been logged out successfully</div>';
      }
      ?>

      <form action="authenticate.php" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
          <label for="username" class="form-label required-field">Username</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            <input type="text" class="form-control" id="username" name="username" required>
            <div class="invalid-feedback">
              Please enter your username
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label required-field">Password</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
            <input type="password" class="form-control" id="password" name="password" required>
            <span class="input-group-text">
              <i id="togglePassword" class="fas fa-eye-slash cursor-pointer"></i>
            </span>
            <div class="invalid-feedback">
              Please enter your password
            </div>
          </div>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="remember" name="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-sign-in-alt me-2"></i>Login
          </button>
        </div>

        <div class="text-center mt-3">
          <a href="forgot-password.php">Forgot Password?</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
      const password = document.getElementById('password');
      const toggleIcon = document.getElementById('togglePassword');

      if (password.type === 'password') {
        password.type = 'text';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
      } else {
        password.type = 'password';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
      }
    });

    // Form validation
    (function() {
      'use strict'

      const forms = document.querySelectorAll('.needs-validation');

      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>
</body>

</html>