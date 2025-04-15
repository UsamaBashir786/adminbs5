<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories - Admin Dashboard</title>
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
        <h1 class="mt-4">Product Categories</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="products.php">Products</a></li>
          <li class="breadcrumb-item active">Categories</li>
        </ol>

        <div class="row">
          <!-- Add/Edit Category Form -->
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-folder-plus me-2"></i> <span id="formTitle">Add New Category</span></h5>
              </div>
              <div class="card-body">
                <form id="categoryForm">
                  <input type="hidden" id="categoryId" name="categoryId" value="">

                  <div class="mb-3">
                    <label for="categoryName" class="form-label required-field">Category Name</label>
                    <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                    <div class="invalid-feedback">
                      Please enter a category name
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="categorySlug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="categorySlug" name="categorySlug">
                    <div class="form-text">The "slug" is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</div>
                  </div>

                  <div class="mb-3">
                    <label for="parentCategory" class="form-label">Parent Category</label>
                    <select class="form-select" id="parentCategory" name="parentCategory">
                      <option value="">None</option>
                      <option value="1">Electronics</option>
                      <option value="2">Clothing</option>
                      <option value="3">Furniture</option>
                      <option value="4">Books</option>
                      <option value="5">Beauty</option>
                      <option value="6">Sports</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="categoryDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="categoryDescription" name="categoryDescription" rows="3"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="categoryIcon" class="form-label">Icon Class</label>
                    <div class="input-group">
                      <span class="input-group-text"><i id="iconPreview" class="fas fa-folder"></i></span>
                      <input type="text" class="form-control" id="categoryIcon" name="categoryIcon" placeholder="fas fa-folder">
                    </div>
                    <div class="form-text">Enter a Font Awesome icon class. <a href="https://fontawesome.com/icons" target="_blank">Browse icons</a></div>
                  </div>

                  <div class="mb-3">
                    <label for="categoryImage" class="form-label">Category Image</label>
                    <input type="file" class="form-control" id="categoryImage" name="categoryImage">
                  </div>

                  <div class="mb-3">
                    <label for="displayOrder" class="form-label">Display Order</label>
                    <input type="number" class="form-control" id="displayOrder" name="displayOrder" min="0" value="0">
                  </div>

                  <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-outline-secondary" id="resetBtn">
                      <i class="fas fa-undo me-1"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">
                      <i class="fas fa-save me-1"></i> <span id="submitBtnText">Add Category</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Categories List -->
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="fas fa-folder me-2"></i> Categories</h5>
                <div>
                  <button type="button" class="btn btn-sm btn-outline-primary me-2" id="expandAllBtn">
                    <i class="fas fa-plus-square me-1"></i> Expand All
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" id="collapseAllBtn">
                    <i class="fas fa-minus-square me-1"></i> Collapse All
                  </button>
                </div>
              </div>
              <div class="card-body">
                <!-- Search and filters -->
                <div class="row mb-3">
                  <div class="col-md-8">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search categories..." id="categorySearch">
                      <button class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <select class="form-select" id="sortCategories">
                      <option value="name">Sort by Name</option>
                      <option value="count">Sort by Product Count</option>
                      <option value="order">Sort by Display Order</option>
                      <option value="date">Sort by Date Added</option>
                    </select>
                  </div>
                </div>

                <!-- Categories tree view -->
                <div class="table-responsive">
                  <table id="categoriesTable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th style="width: 45%">Name</th>
                        <th style="width: 15%">Slug</th>
                        <th style="width: 10%">Count</th>
                        <th style="width: 15%">Order</th>
                        <th style="width: 15%">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Electronics Category with subcategories -->
                      <tr class="parent-row" data-id="1">
                        <td>
                          <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-sm btn-link toggle-children me-1">
                              <i class="fas fa-caret-down"></i>
                            </button>
                            <i class="fas fa-laptop text-primary me-2"></i>
                            <span class="fw-medium">Electronics</span>
                          </div>
                        </td>
                        <td>electronics</td>
                        <td><span class="badge bg-primary">125</span></td>
                        <td>1</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="1" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="1" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <!-- Subcategories of Electronics -->
                      <tr class="child-row" data-parent="1">
                        <td>
                          <div class="d-flex align-items-center" style="padding-left: 40px;">
                            <i class="fas fa-mobile-alt text-secondary me-2"></i>
                            <span>Smartphones</span>
                          </div>
                        </td>
                        <td>smartphones</td>
                        <td><span class="badge bg-secondary">43</span></td>
                        <td>1</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="11" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="11" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <tr class="child-row" data-parent="1">
                        <td>
                          <div class="d-flex align-items-center" style="padding-left: 40px;">
                            <i class="fas fa-laptop text-secondary me-2"></i>
                            <span>Laptops</span>
                          </div>
                        </td>
                        <td>laptops</td>
                        <td><span class="badge bg-secondary">38</span></td>
                        <td>2</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="12" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="12" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <tr class="child-row" data-parent="1">
                        <td>
                          <div class="d-flex align-items-center" style="padding-left: 40px;">
                            <i class="fas fa-tablet-alt text-secondary me-2"></i>
                            <span>Tablets</span>
                          </div>
                        </td>
                        <td>tablets</td>
                        <td><span class="badge bg-secondary">21</span></td>
                        <td>3</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="13" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="13" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <tr class="child-row" data-parent="1">
                        <td>
                          <div class="d-flex align-items-center" style="padding-left: 40px;">
                            <i class="fas fa-headphones text-secondary me-2"></i>
                            <span>Audio</span>
                          </div>
                        </td>
                        <td>audio</td>
                        <td><span class="badge bg-secondary">23</span></td>
                        <td>4</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="14" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="14" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <!-- Clothing Category with subcategories -->
                      <tr class="parent-row" data-id="2">
                        <td>
                          <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-sm btn-link toggle-children me-1">
                              <i class="fas fa-caret-right"></i>
                            </button>
                            <i class="fas fa-tshirt text-primary me-2"></i>
                            <span class="fw-medium">Clothing</span>
                          </div>
                        </td>
                        <td>clothing</td>
                        <td><span class="badge bg-primary">98</span></td>
                        <td>2</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="2" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="2" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <!-- Subcategories of Clothing (initially hidden) -->
                      <tr class="child-row" data-parent="2" style="display: none;">
                        <td>
                          <div class="d-flex align-items-center" style="padding-left: 40px;">
                            <i class="fas fa-male text-secondary me-2"></i>
                            <span>Men's Clothing</span>
                          </div>
                        </td>
                        <td>mens-clothing</td>
                        <td><span class="badge bg-secondary">45</span></td>
                        <td>1</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="21" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="21" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <tr class="child-row" data-parent="2" style="display: none;">
                        <td>
                          <div class="d-flex align-items-center" style="padding-left: 40px;">
                            <i class="fas fa-female text-secondary me-2"></i>
                            <span>Women's Clothing</span>
                          </div>
                        </td>
                        <td>womens-clothing</td>
                        <td><span class="badge bg-secondary">53</span></td>
                        <td>2</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="22" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="22" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <!-- Furniture Category -->
                      <tr class="parent-row" data-id="3">
                        <td>
                          <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-sm btn-link toggle-children me-1">
                              <i class="fas fa-caret-right"></i>
                            </button>
                            <i class="fas fa-couch text-primary me-2"></i>
                            <span class="fw-medium">Furniture</span>
                          </div>
                        </td>
                        <td>furniture</td>
                        <td><span class="badge bg-primary">52</span></td>
                        <td>3</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="3" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="3" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <!-- Books Category -->
                      <tr class="parent-row" data-id="4">
                        <td>
                          <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-sm btn-link toggle-children me-1">
                              <i class="fas fa-caret-right"></i>
                            </button>
                            <i class="fas fa-book text-primary me-2"></i>
                            <span class="fw-medium">Books</span>
                          </div>
                        </td>
                        <td>books</td>
                        <td><span class="badge bg-primary">78</span></td>
                        <td>4</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="4" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="4" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <!-- Beauty Category -->
                      <tr class="parent-row" data-id="5">
                        <td>
                          <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-sm btn-link toggle-children me-1">
                              <i class="fas fa-caret-right"></i>
                            </button>
                            <i class="fas fa-spa text-primary me-2"></i>
                            <span class="fw-medium">Beauty</span>
                          </div>
                        </td>
                        <td>beauty</td>
                        <td><span class="badge bg-primary">45</span></td>
                        <td>5</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="5" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="5" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <!-- Sports Category -->
                      <tr class="parent-row" data-id="6">
                        <td>
                          <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-sm btn-link toggle-children me-1">
                              <i class="fas fa-caret-right"></i>
                            </button>
                            <i class="fas fa-football-ball text-primary me-2"></i>
                            <span class="fw-medium">Sports</span>
                          </div>
                        </td>
                        <td>sports</td>
                        <td><span class="badge bg-primary">35</span></td>
                        <td>6</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info text-white edit-category" data-id="6" title="Edit">
                              <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-category" data-id="6" title="Delete">
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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

  <!-- Delete Category Modal -->
  <div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteCategoryModalLabel">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this category? This action cannot be undone.</p>
          <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle me-2"></i> Warning: Deleting a parent category will also delete all of its subcategories. Products in this category will not be deleted, but they will no longer be associated with this category.
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete Category</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Custom JS -->
  <script src="js/scripts.js"></script>
  <script>
    // Category search
    document.getElementById('categorySearch').addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const rows = document.querySelectorAll('#categoriesTable tbody tr');

      rows.forEach(row => {
        const categoryName = row.querySelector('td:first-child span').textContent.toLowerCase();
        const categorySlug = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

        if (categoryName.includes(searchTerm) || categorySlug.includes(searchTerm)) {
          row.style.display = '';

          // If it's a child row, also show parent
          if (row.classList.contains('child-row')) {
            const parentId = row.dataset.parent;
            const parentRow = document.querySelector(`tr[data-id="${parentId}"]`);
            if (parentRow) {
              parentRow.style.display = '';
              // Update parent row's toggle icon
              const toggleIcon = parentRow.querySelector('.toggle-children i');
              toggleIcon.classList.remove('fa-caret-right');
              toggleIcon.classList.add('fa-caret-down');
            }
          }

          // If it's a parent row, also show children
          if (row.classList.contains('parent-row')) {
            const categoryId = row.dataset.id;
            const childRows = document.querySelectorAll(`tr[data-parent="${categoryId}"]`);
            childRows.forEach(childRow => {
              childRow.style.display = '';
            });
            // Update parent row's toggle icon
            const toggleIcon = row.querySelector('.toggle-children i');
            toggleIcon.classList.remove('fa-caret-right');
            toggleIcon.classList.add('fa-caret-down');
          }
        } else {
          // Hide non-matching rows unless they're a parent of a visible child
          if (row.classList.contains('parent-row')) {
            const categoryId = row.dataset.id;
            const hasVisibleChild = Array.from(document.querySelectorAll(`tr[data-parent="${categoryId}"]`))
              .some(child => child.style.display !== 'none');

            if (!hasVisibleChild) {
              row.style.display = 'none';
            }
          } else {
            row.style.display = 'none';
          }
        }
      });
    });

    // Category sorting
    document.getElementById('sortCategories').addEventListener('change', function() {
      const sortBy = this.value;
      const tbody = document.querySelector('#categoriesTable tbody');
      const parentRows = Array.from(document.querySelectorAll('tr.parent-row'));

      // Sort parent rows
      parentRows.sort((a, b) => {
        let valueA, valueB;

        switch (sortBy) {
          case 'name':
            valueA = a.querySelector('td:first-child span').textContent.toLowerCase();
            valueB = b.querySelector('td:first-child span').textContent.toLowerCase();
            return valueA.localeCompare(valueB);

          case 'count':
            valueA = parseInt(a.querySelector('td:nth-child(3) span').textContent);
            valueB = parseInt(b.querySelector('td:nth-child(3) span').textContent);
            return valueB - valueA; // Descending order for count

          case 'order':
            valueA = parseInt(a.querySelector('td:nth-child(4)').textContent);
            valueB = parseInt(b.querySelector('td:nth-child(4)').textContent);
            return valueA - valueB;

          default:
            return 0;
        }
      });

      // Rebuild the table
      parentRows.forEach(row => {
        const categoryId = row.dataset.id;
        const childRows = Array.from(document.querySelectorAll(`tr.child-row[data-parent="${categoryId}"]`));

        // Move the parent row to the end of the tbody
        tbody.appendChild(row);

        // Sort child rows if needed
        if (sortBy === 'name' || sortBy === 'count' || sortBy === 'order') {
          childRows.sort((a, b) => {
            let valueA, valueB;

            switch (sortBy) {
              case 'name':
                valueA = a.querySelector('td:first-child span').textContent.toLowerCase();
                valueB = b.querySelector('td:first-child span').textContent.toLowerCase();
                return valueA.localeCompare(valueB);

              case 'count':
                valueA = parseInt(a.querySelector('td:nth-child(3) span').textContent);
                valueB = parseInt(b.querySelector('td:nth-child(3) span').textContent);
                return valueB - valueA; // Descending order for count

              case 'order':
                valueA = parseInt(a.querySelector('td:nth-child(4)').textContent);
                valueB = parseInt(b.querySelector('td:nth-child(4)').textContent);
                return valueA - valueB;

              default:
                return 0;
            }
          });
        }

        // Move the child rows after their parent
        childRows.forEach(childRow => {
          tbody.appendChild(childRow);
        });
      });
    });
  </script>
</body>

</html>