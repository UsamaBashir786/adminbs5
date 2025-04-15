<nav id="sidebar" class="bg-dark">
  <div class="sidebar-header">
    <h3>Admin Dashboard</h3>
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
  </ul>

  <div class="sidebar-footer">
    <a href="logout.php" class="btn btn-danger w-100">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </div>
</nav>