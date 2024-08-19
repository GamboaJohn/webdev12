<?php
session_start();
if (!isset($_SESSION['email']) == TRUE) {
  header("Location: http://localhost/WEBDEV1/index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamboa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">
      <img src="http://localhost/WEBDEV1/images/logo.png" style="max-width: 36px;" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Main</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Grade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">etc.</a>
        </li>
      </ul>
      <form action="../config/logout.php" method="POST">
        <input type="submit" class="btn btn-danger" value="LOGOUT">
      </form>
    </div>
  </div>
</nav>






   


    <div class="container mt-4">
        <div class="row">
            <!-- Student Profile Section -->
            <div class="col-md-3">
                <div class="card">
                    <img src="http://localhost/WEBDEV1/students/student.jpg" class="card-img-top" alt="Student Photo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Name: SELF DUNGCA</h5>
                        <p class="card-text"> Pogram and Section: BSIT-2A</p>
                        <p class="card-text">Age: 19</p>
                        <a href="#" class="btn btn-primary btn-sm">View Complete Record</a>
                    </div>
                </div>
            </div>
            
            <!-- Student Updates Section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Student Updates
                    </div>
                    <div class="card-body">
                        <!-- Attendance Section -->
                        <div class="mb-3">
                            <h6>Attendance: <a href="#">see all &gt;</a></h6>
                            <ul class="list-unstyled">
                                <li>04/27/2024: Present</li>
                                <li>04/24/2024: Present</li>
                                <li>04/23/2024: Present</li>
                                <li>04/22/2024: Present</li>
                            </ul>
                        </div>
                        
                        <!-- Homework Assigned Section -->
                        <div class="mb-3">
                            <h6>Homework Assigned: <a href="#">see all &gt;</a></h6>
                            <ul class="list-unstyled">
                                <li>OOP</li>
                                <li>WEBDEV</li>
                            </ul>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer with Settings Option -->
        <div class="text-end mt-3">
            <a href="#" class="btn btn-link">Settings</a> |
            <a href="#" class="btn btn-link">Support</a> |
            <a href="#" class="btn btn-link">Grade</a>
        </div>
    </div>

</body>
</html>
