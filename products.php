<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products Management - Admin Dashboard</title>
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
        <h1 class="mt-4">Product Management</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>

        <!-- Action buttons -->
        <div class="mb-4">
          <a href="products-add.php" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Add New Product
          </a>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importProductsModal">
            <i class="fas fa-file-import me-1"></i> Import Products
          </button>
          <button type="button" class="btn btn-info text-white">
            <i class="fas fa-file-export me-1"></i> Export Products
          </button>
          <a href="categories.php" class="btn btn-secondary">
            <i class="fas fa-tags me-1"></i> Manage Categories
          </a>
        </div>

        <!-- Products list card -->
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-box me-1"></i>
            All Products
          </div>
          <div class="card-body">
            <!-- Filter options -->
            <div class="row mb-3">
              <div class="col-md-3">
                <div class="input-group">
                  <span class="input-group-text">Category</span>
                  <select class="form-select" id="categoryFilter">
                    <option value="">All Categories</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="furniture">Furniture</option>
                    <option value="books">Books</option>
                    <option value="beauty">Beauty</option>
                    <option value="sports">Sports</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="input-group">
                  <span class="input-group-text">Status</span>
                  <select class="form-select" id="statusFilter">
                    <option value="">All Status</option>
                    <option value="instock">In Stock</option>
                    <option value="lowstock">Low Stock</option>
                    <option value="outofstock">Out of Stock</option>
                    <option value="discontinued">Discontinued</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search products..." id="productSearch">
                  <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Products table -->
            <table id="productsTable" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="selectAll">
                    </div>
                  </th>
                  <th>ID</th>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Status</th>
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
                  <td>P001</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="img/products/laptop.jpg" class="me-2" width="50" height="50" alt="Product">
                      <div>
                        <div class="fw-bold">Premium Laptop Pro</div>
                        <div class="small text-muted">SKU: LAP-PRO-15</div>
                      </div>
                    </div>
                  </td>
                  <td>Electronics</td>
                  <td>$1,299.99</td>
                  <td>24</td>
                  <td><span class="badge bg-success">In Stock</span></td>
                  <td>
                    <div class="btn-group">
                      <a href="product-edit.php?id=1" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteProductModal">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewProductModal">
                        <i class="fas fa-eye"></i>
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
                  <td>P002</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="img/products/tshirt.jpg" class="me-2" width="50" height="50" alt="Product">
                      <div>
                        <div class="fw-bold">Premium Cotton T-Shirt</div>
                        <div class="small text-muted">SKU: TS-BLK-M</div>
                      </div>
                    </div>
                  </td>
                  <td>Clothing</td>
                  <td>$24.99</td>
                  <td>152</td>
                  <td><span class="badge bg-success">In Stock</span></td>
                  <td>
                    <div class="btn-group">
                      <a href="product-edit.php?id=2" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteProductModal">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewProductModal">
                        <i class="fas fa-eye"></i>
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
                  <td>P003</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="img/products/sofa.jpg" class="me-2" width="50" height="50" alt="Product">
                      <div>
                        <div class="fw-bold">Modern Sectional Sofa</div>
                        <div class="small text-muted">SKU: SF-SECT-GRY</div>
                      </div>
                    </div>
                  </td>
                  <td>Furniture</td>
                  <td>$899.99</td>
                  <td>8</td>
                  <td><span class="badge bg-warning text-dark">Low Stock</span></td>
                  <td>
                    <div class="btn-group">
                      <a href="product-edit.php?id=3" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteProductModal">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewProductModal">
                        <i class="fas fa-eye"></i>
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
                  <td>P004</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="img/products/book.jpg" class="me-2" width="50" height="50" alt="Product">
                      <div>
                        <div class="fw-bold">Business Management Guide</div>
                        <div class="small text-muted">SKU: BK-BIZ-001</div>
                      </div>
                    </div>
                  </td>
                  <td>Books</td>
                  <td>$34.50</td>
                  <td>0</td>
                  <td><span class="badge bg-danger">Out of Stock</span></td>
                  <td>
                    <div class="btn-group">
                      <a href="product-edit.php?id=4" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteProductModal">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewProductModal">
                        <i class="fas fa-eye"></i>
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
                  <td>P005</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="img/products/cream.jpg" class="me-2" width="50" height="50" alt="Product">
                      <div>
                        <div class="fw-bold">Premium Face Cream</div>
                        <div class="small text-muted">SKU: BTY-FC-100ML</div>
                      </div>
                    </div>
                  </td>
                  <td>Beauty</td>
                  <td>$49.99</td>
                  <td>65</td>
                  <td><span class="badge bg-success">In Stock</span></td>
                  <td>
                    <div class="btn-group">
                      <a href="product-edit.php?id=5" class="btn btn-sm btn-info text-white" title="Edit">
                        <i class="fas fa-edit"></i>
                      </a>
                      <button type="button" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteProductModal">
                        <i class="fas fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewProductModal">
                        <i class="fas fa-eye"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Products pagination">
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
                  <li><a class="dropdown-item" href="#">Mark as In Stock</a></li>
                  <li><a class="dropdown-item" href="#">Mark as Out of Stock</a></li>
                  <li><a class="dropdown-item" href="#">Change Category</a></li>
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

  <!-- Import Products Modal -->
  <div class="modal fade" id="importProductsModal" tabindex="-1" aria-labelledby="importProductsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="importProductsModalLabel">Import Products</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Upload a CSV file containing product data.</p>
          <form>
            <div class="mb-3">
              <label for="csvFile" class="form-label">CSV File</label>
              <input class="form-control" type="file" id="csvFile" accept=".csv">
              <div class="form-text">Please ensure your CSV has the required columns: name, sku, category, price, stock</div>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="headerRow" checked>
              <label class="form-check-label" for="headerRow">
                CSV contains header row
              </label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="overwriteExisting">
              <label class="form-check-label" for="overwriteExisting">
                Overwrite existing products
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

  <!-- Delete Product Modal -->
  <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteProductModalLabel">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this product? This action cannot be undone.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger">Delete Product</button>
        </div>
      </div>
    </div>
  </div>

  <!-- View Product Modal -->
  <div class="modal fade" id="viewProductModal" tabindex="-1" aria-labelledby="viewProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewProductModalLabel">Product Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <img src="img/products/laptop.jpg" class="img-fluid rounded" alt="Product Image">
              <div class="mt-3">
                <h6 class="mb-2">Gallery</h6>
                <div class="row">
                  <div class="col-4 mb-2">
                    <img src="img/products/laptop_1.jpg" class="img-thumbnail" alt="Gallery Image">
                  </div>
                  <div class="col-4 mb-2">
                    <img src="img/products/laptop_2.jpg" class="img-thumbnail" alt="Gallery Image">
                  </div>
                  <div class="col-4 mb-2">
                    <img src="img/products/laptop_3.jpg" class="img-thumbnail" alt="Gallery Image">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <h4>Premium Laptop Pro</h4>
              <p class="badge bg-success mb-2">In Stock</p>
              <p class="text-muted">SKU: LAP-PRO-15</p>
              <h5 class="mb-3">$1,299.99</h5>
              <p><strong>Category:</strong> Electronics</p>
              <p><strong>Stock:</strong> 24 units</p>
              <p><strong>Created Date:</strong> January 15, 2025</p>
              <p><strong>Last Updated:</strong> April 10, 2025</p>

              <h6 class="mt-4">Description</h6>
              <p>The Premium Laptop Pro is a high-performance laptop featuring a 15.6" 4K display, the latest processor, 16GB RAM, and 1TB SSD storage. Perfect for professionals and power users who need reliable performance and stunning visuals.</p>

              <h6 class="mt-4">Specifications</h6>
              <ul>
                <li>Processor: Intel Core i7-1260P</li>
                <li>RAM: 16GB DDR5</li>
                <li>Storage: 1TB NVMe SSD</li>
                <li>Display: 15.6" 4K Ultra HD</li>
                <li>Graphics: NVIDIA GeForce RTX 3050 Ti</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="product-edit.php?id=1" class="btn btn-primary">Edit Product</a>
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
      const productsTable = document.getElementById('productsTable');
      if (productsTable) {
        new simpleDatatables.DataTable(productsTable, {
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