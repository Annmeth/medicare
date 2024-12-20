<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="images/id.jpeg" alt="image" />
        </div>
        <div class="profile-name">
          <p class="name">
            Welcome
          </p>
          <p class="designation">
            Head of Department (HOD)
          </p>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
        <i class="fas fa-suitcase menu-icon"></i>
        <span class="menu-title">Items</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="page-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="assigned_items.php">Assigned Items</a></li>
          <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="assign_items.php">Assign Items</a></li>
          <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="registered_items.php">Registered Items</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="nurse.php">
        <i class="fa fa-user menu-icon"></i>
        <span class="menu-title">Nurses</span>
      </a>
    </li>

    <li class="nav-item d-none d-lg-block">
      <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
        <i class="fas fa-pen-square menu-icon"></i>
        <span class="menu-title">requests</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="Store_request.php">Store Request</a></li>
          <li class="nav-item"> <a class="nav-link" href="dep_request.php">Department Request</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="report.php">
        <i class="fas fa-file-medical menu-icon"></i>
        <span class="menu-title">Report</span>
      </a>
    </li>
</nav>
<!-- partial -->