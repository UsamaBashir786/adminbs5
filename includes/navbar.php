<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button type="button" id="sidebarCollapse" class="btn btn-dark">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSearch" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-search"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="navbarDropdownSearch" style="min-width: 300px;">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bell"></i>
            <span class="badge bg-danger rounded-pill">5</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownNotification">
            <li class="dropdown-header">Notifications</li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <i class="fas fa-shopping-cart text-info me-2"></i>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">New order received</p>
                    <small class="text-muted">3 minutes ago</small>
                  </div>
                </div>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <i class="fas fa-user text-success me-2"></i>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">New user registered</p>
                    <small class="text-muted">10 minutes ago</small>
                  </div>
                </div>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <i class="fas fa-server text-warning me-2"></i>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0">Server load at 85%</p>
                    <small class="text-muted">15 minutes ago</small>
                  </div>
                </div>
              </a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-center" href="notifications.php">View All Notifications</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMessage" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-envelope"></i>
            <span class="badge bg-danger rounded-pill">3</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMessage">
            <li class="dropdown-header">Messages</li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="img/user1.jpg" class="rounded-circle" width="40" alt="User 1">
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <p class="mb-0">Sarah Johnson</p>
                    <small class="text-muted">Product inquiry</small>
                  </div>
                </div>
              </a></li>
            <li><a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="img/user2.jpg" class="rounded-circle" width="40" alt="User 2">
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <p class="mb-0">David Miller</p>
                    <small class="text-muted">Order status</small>
                  </div>
                </div>
              </a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-center" href="messages.php">View All Messages</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="img/profile-avatar.jpg" class="rounded-circle" width="30" alt="Profile">
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownProfile">
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="settings.php">Settings</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>