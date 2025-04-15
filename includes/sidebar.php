<nav id="sidebar" class="bg-dark">
  <div class="sidebar-header">
    <h3>Admin Dashboard</h3>
  </div>

  <div class="profile-info">
    <img src="img/profile-avatar.jpg" class="img-fluid rounded-circle profile-image" alt="Profile Image">
    <div class="profile-text">
      <h6 class="mb-0">John Admin</h6>
      <span class="text-muted small">Administrator</span>
    </div>
  </div>

  <ul class="list-unstyled components">
    <li class="active">
      <a href="index.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
      </a>
    </li>
    <li>
      <a href="#userSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-users"></i>
        Users
      </a>
      <ul class="collapse list-unstyled" id="userSubmenu">
        <li>
          <a href="users.php">All Users</a>
        </li>
        <li>
          <a href="users-add.php">Add New User</a>
        </li>
        <li>
          <a href="roles.php">User Roles</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#productSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-box"></i>
        Products
      </a>
      <ul class="collapse list-unstyled" id="productSubmenu">
        <li>
          <a href="products.php">All Products</a>
        </li>
        <li>
          <a href="products-add.php">Add New Product</a>
        </li>
        <li>
          <a href="categories.php">Categories</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="orders.php">
        <i class="fas fa-shopping-cart"></i>
        Orders
      </a>
    </li>
    <li>
      <a href="#reportSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-chart-line"></i>
        Reports
      </a>
      <ul class="collapse list-unstyled" id="reportSubmenu">
        <li>
          <a href="reports-sales.php">Sales</a>
        </li>
        <li>
          <a href="reports-inventory.php">Inventory</a>
        </li>
        <li>
          <a href="reports-customers.php">Customers</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="settings.php">
        <i class="fas fa-cog"></i>
        Settings
      </a>
    </li>
    <li>
      <a href="messages.php">
        <i class="fas fa-envelope"></i>
        Messages
        <span class="badge bg-danger rounded-pill">3</span>
      </a>
    </li>
  </ul>

  <div class="sidebar-footer">
    <a href="logout.php" class="btn btn-danger w-100">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </div>
</nav>