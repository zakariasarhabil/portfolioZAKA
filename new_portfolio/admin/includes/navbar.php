<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
<i class="fas fa-bars"></i>
</button>

<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
    <i class="fas fa-search"></i>
  </button>
        </div>
    </div>
</form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
    </li>
</ul>
</nav>

<div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-check-circle"></i>
            <span>ALL Project</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="./add.php">
            <i class="fas fa-plus-circle"></i>
            <span>Add Project</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./update.php">
            <i class="fas fa-pen-alt"></i>
            <span>Update Project</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./delete.php">
            <i class="fas fa-trash-alt"></i>
            <span>Delete Project</span></a>
    </li>


</ul>