<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orders Management - Admin Dashboard</title>
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
        <h1 class="mt-4">Order Management</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Orders</li>
        </ol>

        <!-- Order Summary Cards -->
        <div class="row mb-4">
          <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Total Orders</h5>
                    <h2>128</h2>
                  </div>
                  <div class="icon">
                    <i class="fas fa-shopping-cart fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Completed</h5>
                    <h2>87</h2>
                  </div>
                  <div class="icon">
                    <i class="fas fa-check-circle fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Processing</h5>
                    <h2>32</h2>
                  </div>
                  <div class="icon">
                    <i class="fas fa-clock fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Cancelled</h5>
                    <h2>9</h2>
                  </div>
                  <div class="icon">
                    <i class="fas fa-times-circle fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Action buttons -->
        <div class="mb-4">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createOrderModal">
            <i class="fas fa-plus me-1"></i> Create New Order
          </button>
          <button type="button" class="btn btn-success">
            <i class="fas fa-file-export me-1"></i> Export Orders
          </button>
          <button type="button" class="btn btn-info text-white">
            <i class="fas fa-print me-1"></i> Print Order List
          </button>
        </div>

        <!-- Orders list card -->
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-shopping-cart me-1"></i>
            Order List
          </div>
          <div class="card-body">
            <!-- Filter options -->
            <div class="row mb-3">
              <div class="col-md-3">
                <div class="input-group">
                  <span class="input-group-text">Status</span>
                  <select class="form-select" id="statusFilter">
                    <option value="">All Status</option>
                    <option value="completed">Completed</option>
                    <option value="processing">Processing</option>
                    <option value="shipped">Shipped</option>
                    <option value="pending">Pending</option>
                    <option value="cancelled">Cancelled</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="input-group">
                  <span class="input-group-text">Date Range</span>
                  <select class="form-select" id="dateRangeFilter">
                    <option value="">All Time</option>
                    <option value="today">Today</option>
                    <option value="yesterday">Yesterday</option>
                    <option value="last7days">Last 7 Days</option>
                    <option value="last30days">Last 30 Days</option>
                    <option value="thismonth">This Month</option>
                    <option value="lastmonth">Last Month</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search orders..." id="orderSearch">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Orders table -->
            <table id="ordersTable" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="selectAll">
                    </div>
                  </th>
                  <th>Order ID</th>
                  <th>Customer</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Items</th>
                  <th>Total</th>
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
                  <td>#ORD-1234</td>
                  <td>John Smith</td>
                  <td>2025-04-14</td>
                  <td><span class="badge bg-success">Completed</span></td>
                  <td>3</td>
                  <td>$245.30</td>
                  <td>
                    <div class="btn-group">
                      <a href="order-details.php?id=1234" class="btn btn-sm btn-primary" title="View">
                        <i class="fas fa-eye"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="2">
                    </div>
                  </td>
                  <td>#ORD-1233</td>
                  <td>Alice Johnson</td>
                  <td>2025-04-14</td>
                  <td><span class="badge bg-warning text-dark">Processing</span></td>
                  <td>2</td>
                  <td>$127.50</td>
                  <td>
                    <div class="btn-group">
                      <a href="order-details.php?id=1233" class="btn btn-sm btn-primary" title="View">
                        <i class="fas fa-eye"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="3">
                    </div>
                  </td>
                  <td>#ORD-1232</td>
                  <td>Michael Brown</td>
                  <td>2025-04-13</td>
                  <td><span class="badge bg-info">Shipped</span></td>
                  <td>1</td>
                  <td>$89.99</td>
                  <td>
                    <div class="btn-group">
                      <a href="order-details.php?id=1232" class="btn btn-sm btn-primary" title="View">
                        <i class="fas fa-eye"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="4">
                    </div>
                  </td>
                  <td>#ORD-1231</td>
                  <td>Emma Wilson</td>
                  <td>2025-04-13</td>
                  <td><span class="badge bg-danger">Cancelled</span></td>
                  <td>4</td>
                  <td>$320.00</td>
                  <td>
                    <div class="btn-group">
                      <a href="order-details.php?id=1231" class="btn btn-sm btn-primary" title="View">
                        <i class="fas fa-eye"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="5">
                    </div>
                  </td>
                  <td>#ORD-1230</td>
                  <td>Robert Davis</td>
                  <td>2025-04-12</td>
                  <td><span class="badge bg-success">Completed</span></td>
                  <td>2</td>
                  <td>$76.25</td>
                  <td>
                    <div class="btn-group">
                      <a href="order-details.php?id=1230" class="btn btn-sm btn-primary" title="View">
                        <i class="fas fa-eye"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Orders pagination">
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
                  <li><a class="dropdown-item" href="#">Mark as Completed</a></li>
                  <li><a class="dropdown-item" href="#">Mark as Processing</a></li>
                  <li><a class="dropdown-item" href="#">Mark as Shipped</a></li>
                  <li><a class="dropdown-item" href="#">Mark as Cancelled</a></li>
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

  <!-- Create Order Modal -->
  <div class="modal fade" id="createOrderModal" tabindex="-1" aria-labelledby="createOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createOrderModalLabel">Create New Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <!-- Customer Information -->
            <div class="mb-4">
              <h6>Customer Information</h6>
              <hr>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="customerId" class="form-label">Select Customer</label>
                  <select class="form-select" id="customerId">
                    <option value="">Select a customer</option>
                    <option value="1">John Smith</option>
                    <option value="2">Sarah Johnson</option>
                    <option value="3">Michael Brown</option>
                    <option value="4">Emma Wilson</option>
                    <option value="5">Robert Davis</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Or Create New</label>
                  <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="collapse" data-bs-target="#newCustomerForm">
                    <i class="fas fa-plus me-1"></i> Add New Customer
                  </button>
                </div>
              </div>
              <div class="collapse" id="newCustomerForm">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone">
                  </div>
                </div>
              </div>
            </div>

            <!-- Order Items -->
            <div class="mb-4">
              <h6>Order Items</h6>
              <hr>
              <div class="table-responsive">
                <table class="table table-sm" id="orderItemsTable">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <select class="form-select form-select-sm">
                          <option value="">Select Product</option>
                          <option value="1">Premium Laptop Pro</option>
                          <option value="2">Premium Cotton T-Shirt</option>
                          <option value="3">Modern Sectional Sofa</option>
                          <option value="4">Business Management Guide</option>
                          <option value="5">Premium Face Cream</option>
                        </select>
                      </td>
                      <td>$0.00</td>
                      <td>
                        <input type="number" class="form-control form-control-sm" value="1" min="1">
                      </td>
                      <td>$0.00</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-danger">
                          <i class="fas fa-times"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="5">
                        <button type="button" class="btn btn-sm btn-success">
                          <i class="fas fa-plus me-1"></i> Add Item
                        </button>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <!-- Order Details -->
            <div class="row mb-4">
              <div class="col-md-6">
                <h6>Shipping Information</h6>
                <hr>
                <div class="mb-3">
                  <label for="shippingAddress" class="form-label">Shipping Address</label>
                  <textarea class="form-control" id="shippingAddress" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label for="shippingMethod" class="form-label">Shipping Method</label>
                  <select class="form-select" id="shippingMethod">
                    <option value="standard">Standard Shipping ($5.99)</option>
                    <option value="express">Express Shipping ($12.99)</option>
                    <option value="nextday">Next Day Delivery ($24.99)</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <h6>Payment Information</h6>
                <hr>
                <div class="mb-3">
                  <label for="paymentMethod" class="form-label">Payment Method</label>
                  <select class="form-select" id="paymentMethod">
                    <option value="credit">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank">Bank Transfer</option>
                    <option value="cod">Cash on Delivery</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="orderNotes" class="form-label">Order Notes</label>
                  <textarea class="form-control" id="orderNotes" rows="3"></textarea>
                </div>
              </div>
            </div>

            <!-- Order Summary -->
            <div class="card mb-3">
              <div class="card-header">
                <h6 class="mb-0">Order Summary</h6>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <span>Subtotal:</span>
                  <span>$0.00</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Shipping:</span>
                  <span>$5.99</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Tax (8%):</span>
                  <span>$0.00</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between fw-bold">
                  <span>Total:</span>
                  <span>$5.99</span>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Create Order</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Order Modal -->
  <div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteOrderModalLabel">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this order? This action cannot be undone.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger">Delete Order</button>
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
      const ordersTable = document.getElementById('ordersTable');
      if (ordersTable) {
        new simpleDatatables.DataTable(ordersTable, {
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