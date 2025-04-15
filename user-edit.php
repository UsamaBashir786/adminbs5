<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User - Admin Dashboard</title>
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
        <h1 class="mt-4">Edit User</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="users.php">Users</a></li>
          <li class="breadcrumb-item active">Edit User</li>
        </ol>

        <div class="card mb-4">
          <div class="card-header bg-primary text-white">
            <div class="d-flex align-items-center">
              <img src="img/profile-avatar.jpg" class="rounded-circle me-3" width="50" height="50" alt="User Avatar">
              <div>
                <h5 class="mb-0">John Admin</h5>
                <span>ID: #1 | Username: johnadmin</span>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3 mb-4">
                <div class="list-group">
                  <a href="#profile" class="list-group-item list-group-item-action active" data-bs-toggle="list">
                    <i class="fas fa-user me-2"></i> Profile Information
                  </a>
                  <a href="#account" class="list-group-item list-group-item-action" data-bs-toggle="list">
                    <i class="fas fa-lock me-2"></i> Account Settings
                  </a>
                  <a href="#role" class="list-group-item list-group-item-action" data-bs-toggle="list">
                    <i class="fas fa-user-tag me-2"></i> Role & Permissions
                  </a>
                  <a href="#notifications" class="list-group-item list-group-item-action" data-bs-toggle="list">
                    <i class="fas fa-bell me-2"></i> Notification Settings
                  </a>
                  <a href="#activity" class="list-group-item list-group-item-action" data-bs-toggle="list">
                    <i class="fas fa-history me-2"></i> Activity Log
                  </a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="tab-content">
                  <!-- Profile Information Tab -->
                  <div class="tab-pane fade show active" id="profile">
                    <form class="needs-validation" novalidate>
                      <div class="card mb-4">
                        <div class="card-header">
                          <h5 class="mb-0">Profile Information</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-4 text-center">
                            <img src="img/profile-avatar.jpg" class="img-fluid rounded-circle mb-3" style="width: 120px; height: 120px;" alt="Profile Image">
                            <div>
                              <button type="button" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-upload me-1"></i> Change Photo
                              </button>
                              <button type="button" class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-trash me-1"></i> Remove
                              </button>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="firstName" class="form-label required-field">First Name</label>
                              <input type="text" class="form-control" id="firstName" name="firstName" value="John" required>
                              <div class="invalid-feedback">
                                Please enter first name
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="lastName" class="form-label required-field">Last Name</label>
                              <input type="text" class="form-control" id="lastName" name="lastName" value="Admin" required>
                              <div class="invalid-feedback">
                                Please enter last name
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="email" class="form-label required-field">Email Address</label>
                              <input type="email" class="form-control" id="email" name="email" value="john@example.com" required>
                              <div class="invalid-feedback">
                                Please enter a valid email address
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="phone" class="form-label">Phone Number</label>
                              <input type="tel" class="form-control" id="phone" name="phone" value="(555) 123-4567">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              <label for="bio" class="form-label">Bio</label>
                              <textarea class="form-control" id="bio" name="bio" rows="3">Experienced administrator with expertise in product management and user support.</textarea>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="location" class="form-label">Location</label>
                              <input type="text" class="form-control" id="location" name="location" value="New York, USA">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="website" class="form-label">Website</label>
                              <input type="url" class="form-control" id="website" name="website" value="https://example.com">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Update Profile
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Account Settings Tab -->
                  <div class="tab-pane fade" id="account">
                    <form class="needs-validation" novalidate>
                      <div class="card mb-4">
                        <div class="card-header">
                          <h5 class="mb-0">Account Settings</h5>
                        </div>
                        <div class="card-body">
                          <div class="row mb-3">
                            <div class="col-md-6">
                              <label for="username" class="form-label required-field">Username</label>
                              <input type="text" class="form-control" id="username" name="username" value="johnadmin" required>
                              <div class="invalid-feedback">
                                Please enter a username
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="status" class="form-label required-field">Account Status</label>
                              <select class="form-select" id="status" name="status" required>
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="pending">Pending</option>
                                <option value="banned">Banned</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select account status
                              </div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="twoFactorAuth">
                              <label class="form-check-label" for="twoFactorAuth">
                                Enable Two-Factor Authentication
                              </label>
                            </div>
                            <div class="form-text">
                              Enhance your account's security by enabling two-factor authentication.
                            </div>
                          </div>

                          <hr>
                          <h6>Change Password</h6>
                          <p class="text-muted small">Leave these fields empty if you don't want to change the password.</p>

                          <div class="row mb-3">
                            <div class="col-md-6">
                              <label for="currentPassword" class="form-label">Current Password</label>
                              <div class="input-group">
                                <input type="password" class="form-control" id="currentPassword" name="currentPassword">
                                <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword">
                                  <i class="fas fa-eye-slash"></i>
                                </button>
                              </div>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <div class="col-md-6">
                              <label for="newPassword" class="form-label">New Password</label>
                              <div class="input-group">
                                <input type="password" class="form-control" id="newPassword" name="newPassword">
                                <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
                                  <i class="fas fa-eye-slash"></i>
                                </button>
                              </div>
                              <div class="password-strength mt-2">
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="small text-muted">Password strength: <span id="passwordStrength">Weak</span></span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="confirmPassword" class="form-label">Confirm New Password</label>
                              <div class="input-group">
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                                <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                  <i class="fas fa-eye-slash"></i>
                                </button>
                              </div>
                            </div>
                          </div>

                          <hr>
                          <h6 class="text-danger">Danger Zone</h6>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="card border-danger">
                                <div class="card-body">
                                  <h6 class="card-title">Delete Account</h6>
                                  <p class="card-text small">Once you delete this user account, there is no going back. Please be certain.</p>
                                  <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                                    <i class="fas fa-trash me-1"></i> Delete User Account
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Update Account
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Role & Permissions Tab -->
                  <div class="tab-pane fade" id="role">
                    <form class="needs-validation" novalidate>
                      <div class="card mb-4">
                        <div class="card-header">
                          <h5 class="mb-0">Role & Permissions</h5>
                        </div>
                        <div class="card-body">
                          <div class="row mb-4">
                            <div class="col-md-6">
                              <label for="role" class="form-label required-field">User Role</label>
                              <select class="form-select" id="role" name="role" required>
                                <option value="admin" selected>Administrator</option>
                                <option value="manager">Manager</option>
                                <option value="editor">Editor</option>
                                <option value="customer">Customer</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a user role
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="department" class="form-label">Department</label>
                              <select class="form-select" id="department" name="department">
                                <option value="">Not Assigned</option>
                                <option value="sales">Sales</option>
                                <option value="marketing">Marketing</option>
                                <option value="support" selected>Customer Support</option>
                                <option value="development">Development</option>
                                <option value="hr">Human Resources</option>
                              </select>
                            </div>
                          </div>

                          <div class="mb-4">
                            <h6>Permissions</h6>
                            <div class="alert alert-info">
                              <i class="fas fa-info-circle me-2"></i> The user currently inherits permissions from the <strong>Administrator</strong> role. You can override specific permissions below.
                            </div>

                            <div class="row mb-2">
                              <div class="col-md-12">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="overridePermissions">
                                  <label class="form-check-label" for="overridePermissions">
                                    Override role permissions
                                  </label>
                                </div>
                              </div>
                            </div>

                            <div id="permissionsContainer" class="mt-3">
                              <div class="row">
                                <div class="col-md-6 mb-3">
                                  <div class="card">
                                    <div class="card-header bg-light">
                                      <h6 class="mb-0">User Management</h6>
                                    </div>
                                    <div class="card-body">
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_view_users" checked disabled>
                                        <label class="form-check-label" for="perm_view_users">
                                          View Users
                                        </label>
                                      </div>
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_create_users" checked disabled>
                                        <label class="form-check-label" for="perm_create_users">
                                          Create Users
                                        </label>
                                      </div>
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_edit_users" checked disabled>
                                        <label class="form-check-label" for="perm_edit_users">
                                          Edit Users
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="perm_delete_users" checked disabled>
                                        <label class="form-check-label" for="perm_delete_users">
                                          Delete Users
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                  <div class="card">
                                    <div class="card-header bg-light">
                                      <h6 class="mb-0">Product Management</h6>
                                    </div>
                                    <div class="card-body">
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_view_products" checked disabled>
                                        <label class="form-check-label" for="perm_view_products">
                                          View Products
                                        </label>
                                      </div>
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_create_products" checked disabled>
                                        <label class="form-check-label" for="perm_create_products">
                                          Create Products
                                        </label>
                                      </div>
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_edit_products" checked disabled>
                                        <label class="form-check-label" for="perm_edit_products">
                                          Edit Products
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="perm_delete_products" checked disabled>
                                        <label class="form-check-label" for="perm_delete_products">
                                          Delete Products
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                  <div class="card">
                                    <div class="card-header bg-light">
                                      <h6 class="mb-0">Order Management</h6>
                                    </div>
                                    <div class="card-body">
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_view_orders" checked disabled>
                                        <label class="form-check-label" for="perm_view_orders">
                                          View Orders
                                        </label>
                                      </div>
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_create_orders" checked disabled>
                                        <label class="form-check-label" for="perm_create_orders">
                                          Create Orders
                                        </label>
                                      </div>
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_edit_orders" checked disabled>
                                        <label class="form-check-label" for="perm_edit_orders">
                                          Edit Orders
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="perm_delete_orders" checked disabled>
                                        <label class="form-check-label" for="perm_delete_orders">
                                          Delete Orders
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                  <div class="card">
                                    <div class="card-header bg-light">
                                      <h6 class="mb-0">Reports & Settings</h6>
                                    </div>
                                    <div class="card-body">
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_view_reports" checked disabled>
                                        <label class="form-check-label" for="perm_view_reports">
                                          View Reports
                                        </label>
                                      </div>
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_manage_settings" checked disabled>
                                        <label class="form-check-label" for="perm_manage_settings">
                                          Manage Settings
                                        </label>
                                      </div>
                                      <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="perm_access_api" checked disabled>
                                        <label class="form-check-label" for="perm_access_api">
                                          API Access
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="perm_system_logs" checked disabled>
                                        <label class="form-check-label" for="perm_system_logs">
                                          View System Logs
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Update Role & Permissions
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Notification Settings Tab -->
                  <div class="tab-pane fade" id="notifications">
                    <form class="needs-validation" novalidate>
                      <div class="card mb-4">
                        <div class="card-header">
                          <h5 class="mb-0">Notification Settings</h5>
                        </div>
                        <div class="card-body">
                          <h6 class="mb-3">Email Notifications</h6>
                          <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                            <label class="form-check-label" for="emailNotifications">
                              Receive email notifications
                            </label>
                          </div>

                          <div id="emailSettings">
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="emailOrderUpdates" checked>
                              <label class="form-check-label" for="emailOrderUpdates">
                                Order updates
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="emailProductUpdates" checked>
                              <label class="form-check-label" for="emailProductUpdates">
                                Product updates
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="emailUserUpdates" checked>
                              <label class="form-check-label" for="emailUserUpdates">
                                User account updates
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="emailSystemAlerts" checked>
                              <label class="form-check-label" for="emailSystemAlerts">
                                System alerts
                              </label>
                            </div>
                            <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox" id="emailMarketingUpdates">
                              <label class="form-check-label" for="emailMarketingUpdates">
                                Marketing and promotional updates
                              </label>
                            </div>
                          </div>

                          <hr>
                          <h6 class="mb-3">System Notifications</h6>
                          <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="systemNotifications" checked>
                            <label class="form-check-label" for="systemNotifications">
                              Receive system notifications
                            </label>
                          </div>

                          <div id="systemSettings">
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="sysOrderUpdates" checked>
                              <label class="form-check-label" for="sysOrderUpdates">
                                Order notifications
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="sysProductUpdates" checked>
                              <label class="form-check-label" for="sysProductUpdates">
                                Product notifications
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="sysUserUpdates" checked>
                              <label class="form-check-label" for="sysUserUpdates">
                                User account notifications
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="sysSystemAlerts" checked>
                              <label class="form-check-label" for="sysSystemAlerts">
                                System alerts
                              </label>
                            </div>
                          </div>

                          <hr>
                          <h6 class="mb-3">Reports</h6>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="dailyReports">
                            <label class="form-check-label" for="dailyReports">
                              Receive daily report summary
                            </label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="weeklyReports" checked>
                            <label class="form-check-label" for="weeklyReports">
                              Receive weekly report summary
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="monthlyReports" checked>
                            <label class="form-check-label" for="monthlyReports">
                              Receive monthly report summary
                            </label>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Update Notification Settings
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Activity Log Tab -->
                  <div class="tab-pane fade" id="activity">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Activity Log</h5>
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                          <i class="fas fa-download me-1"></i> Export Log
                        </button>
                      </div>
                      <div class="card-body">
                        <div class="row mb-3">
                          <div class="col-md-12">
                            <div class="input-group">
                              <span class="input-group-text">Filter by</span>
                              <select class="form-select">
                                <option value="all">All Activities</option>
                                <option value="login">Login Activities</option>
                                <option value="user">User Management</option>
                                <option value="product">Product Management</option>
                                <option value="order">Order Management</option>
                                <option value="setting">Settings Changes</option>
                              </select>
                              <span class="input-group-text">Date</span>
                              <input type="date" class="form-control" value="2025-04-01">
                              <button class="btn btn-outline-secondary" type="button">Apply</button>
                            </div>
                          </div>
                        </div>

                        <div class="activity-timeline">
                          <div class="activity-item">
                            <div class="activity-icon bg-primary text-white">
                              <i class="fas fa-sign-in-alt"></i>
                            </div>
                            <div class="activity-content">
                              <div class="activity-title">Logged In</div>
                              <div class="activity-text">User logged in from 192.168.1.105</div>
                              <div class="activity-time">Today, 09:15 AM</div>
                            </div>
                          </div>
                          <div class="activity-item">
                            <div class="activity-icon bg-success text-white">
                              <i class="fas fa-edit"></i>
                            </div>
                            <div class="activity-content">
                              <div class="activity-title">Updated Product</div>
                              <div class="activity-text">Modified product "Premium Laptop Pro" - Price updated from $1,199.99 to $1,299.99</div>
                              <div class="activity-time">Today, 08:45 AM</div>
                            </div>
                          </div>
                          <div class="activity-item">
                            <div class="activity-icon bg-warning text-white">
                              <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="activity-content">
                              <div class="activity-title">Order Status Updated</div>
                              <div class="activity-text">Changed status of Order #ORD-1234 from "Processing" to "Shipped"</div>
                              <div class="activity-time">Yesterday, 03:22 PM</div>
                            </div>
                          </div>
                          <div class="activity-item">
                            <div class="activity-icon bg-info text-white">
                              <i class="fas fa-user-edit"></i>
                            </div>
                            <div class="activity-content">
                              <div class="activity-title">Profile Updated</div>
                              <div class="activity-text">Updated profile information</div>
                              <div class="activity-time">Yesterday, 11:45 AM</div>
                            </div>
                          </div>
                          <div class="activity-item">
                            <div class="activity-icon bg-danger text-white">
                              <i class="fas fa-trash"></i>
                            </div>
                            <div class="activity-content">
                              <div class="activity-title">Deleted Product</div>
                              <div class="activity-text">Removed product "Outdated Gadget"</div>
                              <div class="activity-time">April 13, 2025, 02:17 PM</div>
                            </div>
                          </div>
                          <div class="activity-item">
                            <div class="activity-icon bg-secondary text-white">
                              <i class="fas fa-cog"></i>
                            </div>
                            <div class="activity-content">
                              <div class="activity-title">Changed Settings</div>
                              <div class="activity-text">Updated notification settings</div>
                              <div class="activity-time">April 12, 2025, 10:30 AM</div>
                            </div>
                          </div>
                          <div class="activity-item">
                            <div class="activity-icon bg-primary text-white">
                              <i class="fas fa-sign-in-alt"></i>
                            </div>
                            <div class="activity-content">
                              <div class="activity-title">Logged In</div>
                              <div class="activity-text">User logged in from 203.0.113.42</div>
                              <div class="activity-time">April 11, 2025, 09:20 AM</div>
                            </div>
                          </div>
                        </div>

                        <nav aria-label="Activity log pagination">
                          <ul class="pagination justify-content-center mt-4">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php include 'includes/footer.php'; ?>
    </div>
  </div>

  <!-- Delete Account Modal -->
  <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="deleteAccountModalLabel">Confirm Account Deletion</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger">
            <i class="fas fa-exclamation-triangle me-2"></i> Warning: This action cannot be undone!
          </div>
          <p>You are about to delete the user account for <strong>John Admin</strong>. This will permanently remove all user data, preferences, and history from the system.</p>
          <p>Please type <strong>DELETE</strong> to confirm this action:</p>
          <input type="text" class="form-control" id="deleteConfirmation" placeholder="Type DELETE here">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="confirmDeleteAccountBtn" disabled>
            <i class="fas fa-trash me-1"></i> Delete Account
          </button>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Chart.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
  <!-- DataTables -->
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>
  <!-- Custom JS -->
  <script src="js/scripts.js"></script>
  <script src="js/charts.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Toggle password visibility
      document.querySelectorAll('[id^="toggle"]').forEach(button => {
        button.addEventListener('click', function() {
          const targetId = this.id.replace('toggle', '');
          const passwordField = document.getElementById(targetId.charAt(0).toLowerCase() + targetId.slice(1));
          const icon = this.querySelector('i');

          if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.replace('fa-eye-slash', 'fa-eye');
          } else {
            passwordField.type = 'password';
            icon.classList.replace('fa-eye', 'fa-eye-slash');
          }
        });
      });

      // New Password strength meter
      const newPassword = document.getElementById('newPassword');
      if (newPassword) {
        newPassword.addEventListener('input', function() {
          const password = this.value;
          const progressBar = document.querySelector('.password-strength .progress-bar');
          const strengthText = document.getElementById('passwordStrength');

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
      }

      // Override permissions toggle
      const overridePermissions = document.getElementById('overridePermissions');
      if (overridePermissions) {
        overridePermissions.addEventListener('change', function() {
          const checkboxes = document.querySelectorAll('#permissionsContainer input[type="checkbox"]');
          checkboxes.forEach(checkbox => {
            checkbox.disabled = !this.checked;
          });
        });
      }

      // Email notifications toggle
      const emailNotifications = document.getElementById('emailNotifications');
      if (emailNotifications) {
        emailNotifications.addEventListener('change', function() {
          const emailSettings = document.getElementById('emailSettings');
          emailSettings.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.disabled = !this.checked;
          });
        });
      }

      // System notifications toggle
      const systemNotifications = document.getElementById('systemNotifications');
      if (systemNotifications) {
        systemNotifications.addEventListener('change', function() {
          const systemSettings = document.getElementById('systemSettings');
          systemSettings.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.disabled = !this.checked;
          });
        });
      }

      // Delete account confirmation
      const deleteConfirmation = document.getElementById('deleteConfirmation');
      const confirmDeleteAccountBtn = document.getElementById('confirmDeleteAccountBtn');

      if (deleteConfirmation && confirmDeleteAccountBtn) {
        deleteConfirmation.addEventListener('input', function() {
          confirmDeleteAccountBtn.disabled = this.value !== 'DELETE';
        });
      }

      // Form validation
      const forms = document.querySelectorAll('.needs-validation');

      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          } else {
            event.preventDefault(); // For demo purposes
            alert('Changes saved successfully!');
          }

          form.classList.add('was-validated');
        }, false);
      });
    });
  </script>
</body>

</html>