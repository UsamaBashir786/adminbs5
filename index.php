<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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

      <!-- Dashboard Content -->
      <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <!-- Stats Cards -->
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Users</h5>
                    <h2>1,258</h2>
                  </div>
                  <div class="icon">
                    <i class="fas fa-users fa-3x"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="users.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Products</h5>
                    <h2>523</h2>
                  </div>
                  <div class="icon">
                    <i class="fas fa-box fa-3x"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="products.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Orders</h5>
                    <h2>128</h2>
                  </div>
                  <div class="icon">
                    <i class="fas fa-shopping-cart fa-3x"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="orders.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Revenue</h5>
                    <h2>$34,587</h2>
                  </div>
                  <div class="icon">
                    <i class="fas fa-dollar-sign fa-3x"></i>
                  </div>
                </div>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="reports.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Charts Row -->
        <div class="row">
          <div class="col-xl-6">
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                Monthly Revenue
              </div>
              <div class="card-body">
                <canvas id="revenueChart" width="100%" height="40"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Product Categories
              </div>
              <div class="card-body">
                <canvas id="categoryChart" width="100%" height="40"></canvas>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Orders -->
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Recent Orders
          </div>
          <div class="card-body">
            <table id="recentOrders" class="table table-striped">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Customer</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Amount</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#ORD-1234</td>
                  <td>John Smith</td>
                  <td>2025-04-14</td>
                  <td><span class="badge bg-success">Completed</span></td>
                  <td>$245.30</td>
                  <td>
                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#ORD-1233</td>
                  <td>Alice Johnson</td>
                  <td>2025-04-14</td>
                  <td><span class="badge bg-warning">Processing</span></td>
                  <td>$127.50</td>
                  <td>
                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#ORD-1232</td>
                  <td>Michael Brown</td>
                  <td>2025-04-13</td>
                  <td><span class="badge bg-info">Shipped</span></td>
                  <td>$89.99</td>
                  <td>
                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#ORD-1231</td>
                  <td>Emma Wilson</td>
                  <td>2025-04-13</td>
                  <td><span class="badge bg-danger">Cancelled</span></td>
                  <td>$320.00</td>
                  <td>
                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#ORD-1230</td>
                  <td>Robert Davis</td>
                  <td>2025-04-12</td>
                  <td><span class="badge bg-success">Completed</span></td>
                  <td>$76.25</td>
                  <td>
                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php include 'includes/footer.php'; ?>
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
</body>

</html>