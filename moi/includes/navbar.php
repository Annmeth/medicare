<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="images/viv.jpeg" alt="image" />
        </div>

        <div class="profile-name">
          <p class="name">
            Welcome
          </p>
          <p class="designation">
            Medical Officer in Charge (MOI)
          </p>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="nurse.php">
        <i class="fa fa-user menu-icon"></i>
        <span class="menu-title">Nurses</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
        <i class="fa fa-building menu-icon"></i>
        <span class="menu-title">Department</span>
      </a>
      <div class="collapse" id="page-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="department.php">List of Departments</a></li>
          <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="hod.php">Head of Department List</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item d-none d-lg-block">
      <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
        <i class="fas fa-warehouse menu-icon"></i>
        <span class="menu-title">Stores</span>

      </a>
      <div class="collapse" id="sidebar-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="Store.php">List of Stores</a></li>
          <li class="nav-item"> <a class="nav-link" href="storekeeper_list.php">List of Storekeepers</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="store_request.php">
        <i class="fas fa-pen-square menu-icon"></i>

        <span class="menu-title">Store Requests</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
        <i class="fas fa-file-medical menu-icon"></i>
        <span class="menu-title">Report</span>

      </a>
      <div class="collapse" id="maps">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="report.php">Department report</a></li>
          <li class="nav-item"> <a class="nav-link" href="store_report.php">Store report</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
<!-- partial -->