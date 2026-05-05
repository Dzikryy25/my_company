<?php 
session_start();
if($_SESSION['status'] != "login"){
    header("location:index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - CodeSpace</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-danger shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin CodeSpace</a>
            <div class="d-flex">
                <span class="navbar-text text-white me-3">Halo, <?php echo $_SESSION['username']; ?></span>
                <a href="logout.php" class="btn btn-sm btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Kelola Portfolio</a>
                    <a href="#" class="list-group-item list-group-item-action">Daftar Staff</a>
                    <a href="#" class="list-group-item list-group-item-action">Pesan Masuk</a>
                </div>
            </div>
            <!-- Main Content -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Ringkasan Statistik</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card bg-primary text-white p-3">
                                    <h5>Portfolio</h5>
                                    <h3>12 Item</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-success text-white p-3">
                                    <h5>Staff</h5>
                                    <h3>3 Orang</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-warning text-dark p-3">
                                    <h5>Pesan</h5>
                                    <h3>5 Baru</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>