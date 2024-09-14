<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-users"></i> Users</a>
        <a href="{{ route('product.all')}}"><i class="fas fa-users"></i> Products</a>
        <a href="#"><i class="fas fa-cog"></i> Settings</a>
        <a href="http://127.0.0.1:8000/"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <!-- Top Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light topbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i> Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="container-fluid">
            <div class="row">
                <!-- Example of a Card -->
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Users</div>
                        <div class="card-body">
                            <h5 class="card-title">150</h5>
                            <p class="card-text">Active Users</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Revenue</div>
                        <div class="card-body">
                            <h5 class="card-title">$5,000</h5>
                            <p class="card-text">This Month</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-header">Issues</div>
                        <div class="card-body">
                            <h5 class="card-title">23</h5>
                            <p class="card-text">Open Issues</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Rows for More Content -->
            <!-- Row 1 -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-header">Overview</div>
                        <div class="card-body">
                            <p>Content for overview goes here...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">Tasks</div>
                        <div class="card-body">
                            <p>Task content goes here...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
