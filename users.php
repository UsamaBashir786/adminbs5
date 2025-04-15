<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Management - Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- DataTables CSS -->
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
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
        <h1 class="mt-4">User Management</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ol>

        <!-- Action buttons -->
        <div class="mb-4">
          <a href="users-add.php" class="btn btn-primary">
            <i class="fas fa-user-plus me-1"></i> Add New User
          </a>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importUsersModal">
            <i class="fas fa-file-import me-1"></i> Import Users
          </button>
          <button type="button" class="btn btn-info text-white">
            <i class="fas fa-file-export me-1"></i> Export Users
          </button>
        </div>

        <!-- Users list card -->
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-users me-1"></i>
            All Users
          </div>
          <div class="card-body">
            <!-- Filter options -->
            <div class="row mb-3">
              <div class="col-md-3">
                <div class="input-group">
                  <span class="input-group-text">Role</span>
                  <select class="form-select" id="roleFilter">
                    <option value="">All Roles</option>
                    <option value="admin">Administrator</option>
                    <option value="manager">Manager</option>
                    <option value="editor">Editor</option>
                    <option value="customer">Customer</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="input-group">
                  <span class="input-group-text">Status</span>
                  <select class="form-select" id="statusFilter">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="pending">Pending</option>
                    <option value="banned">Banned</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search users..." id="userSearch">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Users table -->
            <table id="usersTable" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="selectAll">
                    </div>
                  </th>
                  <th>ID</th>
                  <th>User</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Created</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1">
                    </div>
                  </td>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="img/profile-avatar.jpg" class="rounded-circle me-2" width="40" alt="User Avatar">
                      <div>
                        <div class="fw-bold">John Admin</div>
                        <div class="small text-muted">@johnadmin</div>
                      </div>
                    </div>
                  </td>
                  <td>john@example.com</td>
                  <td><span class="badge bg-primary">Administrator</span></td>
                  <td><span class="badge bg-success">Active</span></td>
                  <td>2023-01-15</td>
                  <td>
                    <a href="user-edit.php?id=1" class="btn btn-sm btn-info text-white" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="2">
                    </div>
                  </td>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="img/user1.jpg" class="rounded-circle me-2" width="40" alt="User Avatar">
                      <div>
                        <div class="fw-bold">Sarah Johnson</div>
                        <div class="small text-muted">@sarahj</div>
                      </div>
                    </div>
                  </td>
                  <td>sarah@example.com</td>
                  <td><span class="badge bg-info">Manager</span></td>
                  <td><span class="badge bg-success">Active</span></td>
                  <td>2023-02-21</td>
                  <td>
                    <a href="user-edit.php?id=2" class="btn btn-sm btn-info text-white" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="3">
                    </div>
                  </td>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="img/user2.jpg" class="rounded-circle me-2" width="40" alt="User Avatar">
                      <div>
                        <div class="fw-bold">David Miller</div>
                        <div class="small text-muted">@davidm</div>
                      </div>
                    </div>
                  </td>
                  <td>david@example.com</td>
                  <td><span class="badge bg-secondary">Editor</span></td>
                  <td><span class="badge bg-success">Active</span></td>
                  <td>2023-03-05</td>
                  <td>
                    <a href="user-edit.php?id=3" class="btn btn-sm btn-info text-white" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="4">
                    </div>
                  </td>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="rounded-circle bg-light text-dark d-flex align-items-center justify-content-center me-2" style="width: 40px; height: 40px;">
                        <span>EW</span>
                      </div>
                      <div>
                        <div class="fw-bold">Emma Wilson</div>
                        <div class="small text-muted">@emmaw</div>
                      </div>
                    </div>
                  </td>
                  <td>emma@example.com</td>
                  <td><span class="badge bg-warning text-dark">Customer</span></td>
                  <td><span class="badge bg-danger">Banned</span></td>
                  <td>2023-04-12</td>
                  <td>
                    <a href="user-edit.php?id=4" class="btn btn-sm btn-info text-white" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="5">
                    </div>
                  </td>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="rounded-circle bg-light text-dark d-flex align-items-center justify-content-center me-2" style="width: 40px; height: 40px;">
                        <span>RD</span>
                      </div>
                      <div>
                        <div class="fw-bold">Robert Davis</div>
                        <div class="small text-muted">@robertd</div>
                      </div>
                    </div>
                  </td>
                  <td>robert@example.com</td>
                  <td><span class="badge bg-warning text-dark">Customer</span></td>
                  <td><span class="badge bg-warning text-dark">Pending</span></td>
                  <td>2023-04-28</td>
                  <td>
                    <a href="user-edit.php?id=5" class="btn btn-sm btn-info text-white" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Users pagination">
              <ul class="pagination justify-content-end">
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

            <!-- Bulk actions -->
            <div class="mt-3">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Bulk Actions
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Activate Selected</a></li>
                  <li><a class="dropdown-item" href="#">Deactivate Selected</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-danger" href="#">Delete Selected</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php include 'includes/footer.php'; ?>
    </div>
  </div>

  <!-- Import Users Modal -->
  <div class="modal fade" id="importUsersModal" tabindex="-1" aria-labelledby="importUsersModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="importUsersModalLabel">Import Users</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Upload a CSV file containing user data.</p>
          <form>
            <div class="mb-3">
              <label for="csvFile" class="form-label">CSV File</label>
              <input class="form-control" type="file" id="csvFile" accept=".csv">
              <div class="form-text">Please ensure your CSV has the following columns: username, email, role, status</div>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="headerRow" checked>
              <label class="form-check-label" for="headerRow">
                CSV contains header row
              </label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Upload and Import</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete User Modal -->
  <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteUserModalLabel">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this user? This action cannot be undone.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger">Delete User</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>
  <!-- Custom JS -->
  <script src="js/scripts.js"></script>
  <script>
    // Initialize DataTable
    document.addEventListener('DOMContentLoaded', function() {
      const usersTable = document.getElementById('usersTable');
      if (usersTable) {
        new simpleDatatables.DataTable(usersTable, {
          searchable: true,
          fixedHeight: true,
          perPage: 10
        });
      }

      // Select All checkbox
      const selectAll = document.getElementById('selectAll');
      if (selectAll) {
        selectAll.addEventListener('change', function() {
          const checkboxes = document.querySelectorAll('tbody .form-check-input');
          checkboxes.forEach(checkbox => {
            checkbox.checked = selectAll.checked;
          });
        });
      }
    });
  </script>
</body>

</html>