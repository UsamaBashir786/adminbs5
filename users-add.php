<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New User - Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="content">
      <!-- Navbar -->
      <?php include 'includes/navbar.php'; ?>

      <!-- Content -->
      <div class="container-fluid px-4">
        <h1 class="mt-4">Add New User</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="users.php">Users</a></li>
          <li class="breadcrumb-item active">Add New User</li>
        </ol>

        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-user-plus me-1"></i>
            User Information
          </div>
          <div class="card-body">
            <form class="needs-validation" novalidate>
              <!-- Personal Information -->
              <div class="row mb-4">
                <div class="col-md-12 mb-3">
                  <h5>Personal Information</h5>
                  <hr>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="firstName" class="form-label required-field">First Name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" required>
                  <div class="invalid-feedback">
                    Please enter first name
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName" class="form-label required-field">Last Name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" required>
                  <div class="invalid-feedback">
                    Please enter last name
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label required-field">Email Address</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="profileImage" class="form-label">Profile Image</label>
                  <div class="input-group">
                    <input type="file" class="form-control" id="profileImage" name="profileImage" accept="image/*">
                    <label class="input-group-text" for="profileImage">Upload</label>
                  </div>
                  <div class="form-text">Recommended size: 200x200 pixels, Max file size: 2MB</div>
                </div>
              </div>

              <!-- Account Information -->
              <div class="row mb-4">
                <div class="col-md-12 mb-3">
                  <h5>Account Information</h5>
                  <hr>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="username" class="form-label required-field">Username</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                  <div class="invalid-feedback">
                    Please enter a username
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="status" class="form-label required-field">Account Status</label>
                  <select class="form-select" id="status" name="status" required>
                    <option value="">Select Status</option>
                    <option value="active" selected>Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="pending">Pending</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select account status
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="password" class="form-label required-field">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                      <i class="fas fa-eye-slash"></i>
                    </button>
                  </div>
                  <div class="invalid-feedback">
                    Please enter a password
                  </div>
                  <div class="password-strength mt-2">
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Password strength: <span id="passwordStrength">Weak</span></small>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="confirmPassword" class="form-label required-field">Confirm Password</label>
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                  <div class="invalid-feedback">
                    Passwords do not match
                  </div>
                </div>
              </div>

              <!-- Role and Permissions -->
              <div class="row mb-4">
                <div class="col-md-12 mb-3">
                  <h5>Role and Permissions</h5>
                  <hr>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="role" class="form-label required-field">User Role</label>
                  <select class="form-select" id="role" name="role" required>
                    <option value="">Select Role</option>
                    <option value="admin">Administrator</option>
                    <option value="manager">Manager</option>
                    <option value="editor">Editor</option>
                    <option value="customer" selected>Customer</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a user role
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="department" class="form-label">Department</label>
                  <select class="form-select" id="department" name="department">
                    <option value="">Select Department</option>
                    <option value="sales">Sales</option>
                    <option value="marketing">Marketing</option>
                    <option value="support">Customer Support</option>
                    <option value="development">Development</option>
                    <option value="hr">Human Resources</option>
                  </select>
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Additional Permissions</label>
                  <div class="row">
                    <div class="col-md-3 mb-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="perm_manage_users">
                        <label class="form-check-label" for="perm_manage_users">
                          Manage Users
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 mb-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="perm_manage_products">
                        <label class="form-check-label" for="perm_manage_products">
                          Manage Products
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 mb-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="perm_view_reports">
                        <label class="form-check-label" for="perm_view_reports">
                          View Reports
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 mb-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="perm_manage_orders">
                        <label class="form-check-label" for="perm_manage_orders">
                          Manage Orders
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 mb-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="perm_edit_settings">
                        <label class="form-check-label" for="perm_edit_settings">
                          Edit Settings
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 mb-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="perm_access_api">
                        <label class="form-check-label" for="perm_access_api">
                          API Access
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Notification Settings -->
              <div class="row mb-4">
                <div class="col-md-12 mb-3">
                  <h5>Notification Settings</h5>
                  <hr>
                </div>
                <div class="col-md-12">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                    <label class="form-check-label" for="emailNotifications">
                      Send email notifications
                    </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="systemNotifications" checked>
                    <label class="form-check-label" for="systemNotifications">
                      Send system notifications
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="weeklyReports">
                    <label class="form-check-label" for="weeklyReports">
                      Send weekly report summary
                    </label>
                  </div>
                </div>
              </div>

              <!-- Notes -->
              <div class="row mb-4">
                <div class="col-md-12 mb-3">
                  <h5>Additional Notes</h5>
                  <hr>
                </div>
                <div class="col-md-12">
                  <label for="notes" class="form-label">Notes</label>
                  <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                </div>
              </div>

              <!-- Form Actions -->
              <div class="row">
                <div class="col-12">
                  <hr>
                  <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='users.php'">
                      <i class="fas fa-times me-1"></i> Cancel
                    </button>
                    <div>
                      <button type="reset" class="btn btn-outline-primary me-2">
                        <i class="fas fa-redo me-1"></i> Reset
                      </button>
                      <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Create User
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php include 'includes/footer.php'; ?>
    </div>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="js/scripts.js"></script>
  <script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
      const password = document.getElementById('password');
      const toggleIcon = this.querySelector('i');

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

    // Password strength meter
    document.getElementById('password').addEventListener('input', function() {
      const password = this.value;
      const progressBar = document.querySelector('.password-strength .progress-bar');
      const strengthText = document.getElementById('passwordStrength');

      // Simple password strength check
      let strength = 0;
      if (password.length >= 8) strength += 25;
      if (password.match(/[A-Z]/)) strength += 25;
      if (password.match(/[0-9]/)) strength += 25;
      if (password.match(/[^A-Za-z0-9]/)) strength += 25;

      // Update progress bar
      progressBar.style.width = strength + '%';
      progressBar.setAttribute('aria-valuenow', strength);

      // Update color based on strength
      if (strength < 25) {
        progressBar.className = 'progress-bar bg-danger';
        strengthText.textContent = 'Weak';
      } else if (strength < 50) {
        progressBar.className = 'progress-bar bg-warning';
        strengthText.textContent = 'Fair';
      } else if (strength < 75) {
        progressBar.className = 'progress-bar bg-info';
        strengthText.textContent = 'Good';
      } else {
        progressBar.className = 'progress-bar bg-success';
        strengthText.textContent = 'Strong';
      }
    });

    // Password confirmation check
    document.getElementById('confirmPassword').addEventListener('input', function() {
      const password = document.getElementById('password').value;
      const confirmPassword = this.value;

      if (password !== confirmPassword) {
        this.setCustomValidity('Passwords do not match');
      } else {
        this.setCustomValidity('');
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

    // Dynamic permissions based on role
    document.getElementById('role').addEventListener('change', function() {
      const role = this.value;
      const permissions = {
        'admin': ['perm_manage_users', 'perm_manage_products', 'perm_view_reports', 'perm_manage_orders', 'perm_edit_settings', 'perm_access_api'],
        'manager': ['perm_manage_products', 'perm_view_reports', 'perm_manage_orders'],
        'editor': ['perm_manage_products', 'perm_view_reports'],
        'customer': []
      };

      // Clear all checkboxes
      document.querySelectorAll('input[type="checkbox"][id^="perm_"]').forEach(checkbox => {
        checkbox.checked = false;
      });

      // Set permissions based on role
      if (role in permissions) {
        permissions[role].forEach(permId => {
          const checkbox = document.getElementById(permId);
          if (checkbox) checkbox.checked = true;
        });
      }
    });
  </script>
</body>

</html>