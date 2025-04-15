<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Product - Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Select2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Dropzone CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
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
        <h1 class="mt-4">Add New Product</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="products.php">Products</a></li>
          <li class="breadcrumb-item active">Add New Product</li>
        </ol>

        <form class="needs-validation" novalidate>
          <!-- Action buttons -->
          <div class="row mb-4">
            <div class="col-12 d-flex justify-content-end">
              <button type="button" class="btn btn-outline-secondary me-2" onclick="window.location.href='products.php'">
                <i class="fas fa-times me-1"></i> Cancel
              </button>
              <button type="button" class="btn btn-outline-primary me-2" id="saveAsDraft">
                <i class="fas fa-save me-1"></i> Save as Draft
              </button>
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-check me-1"></i> Publish Product
              </button>
            </div>
          </div>

          <div class="row">
            <!-- Main Product Information -->
            <div class="col-md-8">
              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0"><i class="fas fa-box me-2"></i> Basic Information</h5>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label for="productName" class="form-label required-field">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName" required>
                    <div class="invalid-feedback">
                      Please enter a product name
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="sku" class="form-label required-field">SKU</label>
                      <input type="text" class="form-control" id="sku" name="sku" required>
                      <div class="invalid-feedback">
                        Please enter a SKU
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="barcode" class="form-label">Barcode (UPC/EAN)</label>
                      <input type="text" class="form-control" id="barcode" name="barcode">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="shortDescription" class="form-label required-field">Short Description</label>
                    <textarea class="form-control" id="shortDescription" name="shortDescription" rows="3" required></textarea>
                    <div class="invalid-feedback">
                      Please enter a short description
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="fullDescription" class="form-label">Full Description</label>
                    <textarea class="form-control" id="fullDescription" name="fullDescription" rows="6"></textarea>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0"><i class="fas fa-images me-2"></i> Images</h5>
                </div>
                <div class="card-body">
                  <p>Upload product images. The first image will be used as the product thumbnail.</p>
                  <div class="dropzone" id="productImagesDropzone">
                    <div class="dz-message" data-dz-message>
                      <i class="fas fa-cloud-upload-alt fa-3x"></i>
                      <p>Drop files here or click to upload</p>
                      <p class="text-muted small">(Max 8 images, up to 5MB each)</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0"><i class="fas fa-tags me-2"></i> Pricing & Inventory</h5>
                </div>
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-md-4">
                      <label for="regularPrice" class="form-label required-field">Regular Price ($)</label>
                      <input type="number" class="form-control" id="regularPrice" name="regularPrice" step="0.01" min="0" required>
                      <div class="invalid-feedback">
                        Please enter a valid price
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="salePrice" class="form-label">Sale Price ($)</label>
                      <input type="number" class="form-control" id="salePrice" name="salePrice" step="0.01" min="0">
                    </div>
                    <div class="col-md-4">
                      <label for="costPrice" class="form-label">Cost Price ($)</label>
                      <input type="number" class="form-control" id="costPrice" name="costPrice" step="0.01" min="0">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="taxable" name="taxable" checked>
                        <label class="form-check-label" for="taxable">Charge Tax on this product</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="trackInventory" name="trackInventory" checked>
                        <label class="form-check-label" for="trackInventory">Track Inventory</label>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3" id="inventoryFields">
                    <div class="col-md-4">
                      <label for="stockQuantity" class="form-label">Stock Quantity</label>
                      <input type="number" class="form-control" id="stockQuantity" name="stockQuantity" min="0">
                    </div>
                    <div class="col-md-4">
                      <label for="lowStockThreshold" class="form-label">Low Stock Threshold</label>
                      <input type="number" class="form-control" id="lowStockThreshold" name="lowStockThreshold" min="0">
                    </div>
                    <div class="col-md-4">
                      <label for="stockStatus" class="form-label">Stock Status</label>
                      <select class="form-select" id="stockStatus" name="stockStatus">
                        <option value="instock">In Stock</option>
                        <option value="outofstock">Out of Stock</option>
                        <option value="onbackorder">On Backorder</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0"><i class="fas fa-truck me-2"></i> Shipping</h5>
                </div>
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-md-4">
                      <label for="weight" class="form-label">Weight (kg)</label>
                      <input type="number" class="form-control" id="weight" name="weight" step="0.01" min="0">
                    </div>
                    <div class="col-md-8">
                      <label for="dimensions" class="form-label">Dimensions (cm)</label>
                      <div class="input-group">
                        <input type="number" class="form-control" placeholder="Length" aria-label="Length" id="length" name="length" step="0.1" min="0">
                        <span class="input-group-text">×</span>
                        <input type="number" class="form-control" placeholder="Width" aria-label="Width" id="width" name="width" step="0.1" min="0">
                        <span class="input-group-text">×</span>
                        <input type="number" class="form-control" placeholder="Height" aria-label="Height" id="height" name="height" step="0.1" min="0">
                      </div>
                    </div>
                  </div>
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="freeShipping" name="freeShipping">
                    <label class="form-check-label" for="freeShipping">
                      Free shipping
                    </label>
                  </div>
                  <div class="mb-3">
                    <label for="shippingClass" class="form-label">Shipping Class</label>
                    <select class="form-select" id="shippingClass" name="shippingClass">
                      <option value="">No shipping class</option>
                      <option value="standard">Standard</option>
                      <option value="bulky">Bulky Items</option>
                      <option value="fragile">Fragile</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0"><i class="fas fa-clipboard-list me-2"></i> Attributes</h5>
                </div>
                <div class="card-body">
                  <div id="attributesContainer">
                    <div class="attribute-row mb-3">
                      <div class="row">
                        <div class="col-md-5">
                          <label class="form-label">Attribute Name</label>
                          <input type="text" class="form-control" name="attributeName[]" placeholder="e.g. Color">
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Values</label>
                          <input type="text" class="form-control" name="attributeValues[]" placeholder="e.g. Red, Blue, Green (comma separated)">
                        </div>
                        <div class="col-md-1 d-flex align-items-end">
                          <button type="button" class="btn btn-outline-danger remove-attribute">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-outline-primary" id="addAttribute">
                    <i class="fas fa-plus me-1"></i> Add Attribute
                  </button>
                </div>
              </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0"><i class="fas fa-sliders-h me-2"></i> Product Status</h5>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label for="productStatus" class="form-label">Status</label>
                    <select class="form-select" id="productStatus" name="productStatus">
                      <option value="active">Active</option>
                      <option value="draft">Draft</option>
                      <option value="pending">Pending Review</option>
                      <option value="discontinued">Discontinued</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="visibility" class="form-label">Visibility</label>
                    <select class="form-select" id="visibility" name="visibility">
                      <option value="public">Public</option>
                      <option value="hidden">Hidden</option>
                      <option value="featured">Featured</option>
                    </select>
                  </div>
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="scheduledPublish" name="scheduledPublish">
                    <label class="form-check-label" for="scheduledPublish">
                      Schedule Publish
                    </label>
                  </div>
                  <div class="mb-3" id="publishDate" style="display: none;">
                    <label for="publishDateTime" class="form-label">Publish Date & Time</label>
                    <input type="datetime-local" class="form-control" id="publishDateTime" name="publishDateTime">
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0"><i class="fas fa-folder me-2"></i> Organization</h5>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label for="productCategory" class="form-label required-field">Category</label>
                    <select class="form-select select2" id="productCategory" name="productCategory" multiple required>
                      <option value="electronics">Electronics</option>
                      <option value="clothing">Clothing</option>
                      <option value="furniture">Furniture</option>
                      <option value="books">Books</option>
                      <option value="beauty">Beauty</option>
                      <option value="sports">Sports</option>
                      <option value="toys">Toys</option>
                      <option value="food">Food & Beverages</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select at least one category
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="productBrand" class="form-label">Brand</label>
                    <select class="form-select" id="productBrand" name="productBrand">
                      <option value="">Select Brand</option>
                      <option value="apple">Apple</option>
                      <option value="samsung">Samsung</option>
                      <option value="nike">Nike</option>
                      <option value="adidas">Adidas</option>
                      <option value="ikea">IKEA</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="productTags" class="form-label">Tags</label>
                    <input type="text" class="form-control" id="productTags" name="productTags" placeholder="e.g. summer, discount, new">
                    <div class="form-text">Separate tags with commas</div>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0"><i class="fas fa-link me-2"></i> Linked Products</h5>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label for="relatedProducts" class="form-label">Related Products</label>
                    <select class="form-select select2" id="relatedProducts" name="relatedProducts" multiple>
                      <option value="1">Premium Laptop Pro</option>
                      <option value="2">Premium Cotton T-Shirt</option>
                      <option value="3">Modern Sectional Sofa</option>
                      <option value="4">Business Management Guide</option>
                      <option value="5">Premium Face Cream</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="upSellProducts" class="form-label">Upsell Products</label>
                    <select class="form-select select2" id="upSellProducts" name="upSellProducts" multiple>
                      <option value="1">Premium Laptop Pro</option>
                      <option value="2">Premium Cotton T-Shirt</option>
                      <option value="3">Modern Sectional Sofa</option>
                      <option value="4">Business Management Guide</option>
                      <option value="5">Premium Face Cream</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0"><i class="fas fa-cog me-2"></i> Advanced</h5>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label for="purchaseNote" class="form-label">Purchase Note</label>
                    <textarea class="form-control" id="purchaseNote" name="purchaseNote" rows="2"></textarea>
                  </div>
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="enableReviews" name="enableReviews" checked>
                    <label class="form-check-label" for="enableReviews">
                      Enable Reviews
                    </label>
                  </div>
                  <div class="mb-3">
                    <label for="menuOrder" class="form-label">Menu Order</label>
                    <input type="number" class="form-control" id="menuOrder" name="menuOrder" min="0" value="0">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

      <!-- Footer -->
      <?php include 'includes/footer.php'; ?>
    </div>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Select2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- Dropzone JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
  <!-- CKEditor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/37.0.0/classic/ckeditor.js"></script>
  <!-- Custom JS -->
  <script src="js/scripts.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Select2
      $('.select2').select2({
        theme: 'bootstrap-5',
      });

      // Initialize Dropzone
      Dropzone.autoDiscover = false;
      new Dropzone("#productImagesDropzone", {
        url: "upload.php", // Replace with your upload handler
        maxFiles: 8,
        maxFilesize: 5, // MB
        acceptedFiles: "image/*",
        addRemoveLinks: true,
        dictRemoveFile: "Remove",
      });

      // Initialize CKEditor for rich text editing
      ClassicEditor
        .create(document.querySelector('#fullDescription'))
        .catch(error => {
          console.error(error);
        });

      // Toggle inventory fields based on tracking checkbox
      const trackInventory = document.getElementById('trackInventory');
      const inventoryFields = document.getElementById('inventoryFields');

      trackInventory.addEventListener('change', function() {
        if (this.checked) {
          inventoryFields.style.display = 'flex';
        } else {
          inventoryFields.style.display = 'none';
        }
      });

      // Toggle scheduled publish date
      const scheduledPublish = document.getElementById('scheduledPublish');
      const publishDate = document.getElementById('publishDate');

      scheduledPublish.addEventListener('change', function() {
        if (this.checked) {
          publishDate.style.display = 'block';
        } else {
          publishDate.style.display = 'none';
        }
      });

      // Add attribute button
      document.getElementById('addAttribute').addEventListener('click', function() {
        const attributeContainer = document.getElementById('attributesContainer');
        const attributeRow = document.querySelector('.attribute-row').cloneNode(true);

        // Clear input values
        attributeRow.querySelectorAll('input').forEach(input => {
          input.value = '';
        });

        // Add remove event listener
        attributeRow.querySelector('.remove-attribute').addEventListener('click', function() {
          this.closest('.attribute-row').remove();
        });

        attributeContainer.appendChild(attributeRow);
      });

      // Remove attribute button
      document.querySelectorAll('.remove-attribute').forEach(button => {
        button.addEventListener('click', function() {
          this.closest('.attribute-row').remove();
        });
      });

      // Form validation
      const form = document.querySelector('.needs-validation');
      form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add('was-validated');
      });

      // Save as draft button
      document.getElementById('saveAsDraft').addEventListener('click', function() {
        document.getElementById('productStatus').value = 'draft';
        // Submit the form or send AJAX request here
        alert('Product saved as draft');
      });
    });
  </script>
</body>

</html>