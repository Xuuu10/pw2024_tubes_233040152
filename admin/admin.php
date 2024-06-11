<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XUUU GYM | Admin</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="asset/css/admin.css">
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">XUUU GYM | Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto p-3">
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-user"></i> Hello, Admin</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link btn btn-danger" style="background-color:red;" href="../login.php" onclick="return confirm('Are You Sure?');">Logout </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-fluid mt-4">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="fas fa-tachometer-alt"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php">
                <i class="fas fa-users"></i> Users
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tambahmember.php">
                <i class="fas fa-users"></i> Member
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

        <div class="row fw-bold">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <a href="user.php" class="text-dark">
                <h5 class="card-title">USERS</h5>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <a href="tambahmember.php" class="text-dark fw-bold">
                <h5 class="card-title">PAKET MEMBER</h5>
                </a>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
