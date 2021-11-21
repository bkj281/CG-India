<?php

  session_start();

  $conn = new mysqli("localhost", "root", "", "cgindia");

  if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM issue";  

  $result = $conn->query($sql);

  $result2 = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CG People</title>
  <link rel="shortcut icon" href="../assets/image/favicon.jpg" type="image/x-icon">  
  <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
  <script src="https://kit.fontawesome.com/a0d95914a1.js" crossorigin="anonymous"></script>
</head>
<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
      <img src="../assets/image/favicon.jpg" alt="Logo" width="24" class="d-inline-block align-text-top rounded-circle">
			<span class="align-bottom mx-2">CG India</span>
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="../index.php">
          <i class="fas fa-sign-out-alt fa-fw"></i>
          Log Out
        </a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                <i class="fas fa-chart-line fa-fw"></i>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                <i class="fas fa-columns fa-fw"></i>
                Future Feature
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                <i class="fas fa-columns fa-fw"></i>
                Future Feature
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>
              <i class="fas fa-highlighter fa-fw"></i>
              Highlights
            </span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                <i class="fas fa-calendar-check fa-fw"></i>
                Current Year
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                <i class="fas fa-calendar-check fa-fw"></i>
                Past Year
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                <i class="fas fa-hands-helping fa-fw"></i>
                Social engagement
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">
            <i class="fas fa-chart-line fa-fw"></i>
            Dashboard
          </h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button class="btn btn-sm btn-danger">Not Started</button>
              <button class="btn btn-sm btn-warning">Under Work</button>
              <button class="btn btn-sm btn-success">Completed</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>

        <div class="container mt-5">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {?>
                  <div class="col">
                    <?php 
                      if ($row["status"] == 0) {?>
                        <div class="card h-100 text-white bg-danger">
                        <?php
                      }
                      else if ($row["status"] == 1) {?>
                        <div class="card h-100 text-dark bg-warning">
                        <?php
                      }
                      else if ($row["status"] == 2) {?>
                        <div class="card h-100 text-white bg-success">
                        <?php
                      }
                      ?>
                      <img src=<?php echo $row["pic"]; ?> class="card-img-top img-thumbnail w-100">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row["heading"]; ?></h5>
                        <p class="card-text"><?php echo $row["description"]; ?></p>
                      </div>
                      <?php 
                        if ($row["status"] == 0) {?>
                          <form class="bg-white" action="../php/start.php" method="POST">
                            <input class="form-control d-none" name="idno" type="text" value=<?php echo $row["id"]; ?>>
                            <button type="submit" class="btn btn-outline-warning btn-sm w-100">Start Working</button>
                          </form>
                          <?php
                        }
                        else if ($row["status"] == 1) {?>
                          <form class="bg-white" action="../php/end.php" method="POST">
                            <input class="form-control d-none" name="idno" type="text" value=<?php echo $row["id"]; ?>>
                            <button type="submit" class="btn btn-outline-success btn-sm w-100">Completed!</button>
                          </form>
                          <?php
                        }
                      ?>
                      <div class="card-footer">
                        <?php
                          if ($row["status"] == 1) {
                            echo '<span class="text-muted">Posted on '.$row["time"].' at '.$row["location"].'.<span>';
                          }
                          else {
                            echo '<span class="text-white-50">Posted on '.$row["time"].' at '.$row["location"].'.<span>';
                          }
                        ?>
                      </div>
                    </div>
                  </div>
                <?php  
                }
              }
              else {
                echo "<h1>No Complaints to display!</h1>";
              }
            ?>
          </div>
        </div>

        <h2 class="mt-5">Summary</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Status</th>
                <th scope="col">CustId</th>
                <th scope="col">Time</th>
                <th scope="col">Location</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if ($result2->num_rows > 0) {
                  while($row = $result2->fetch_assoc()) {?>
                    <tr>  
                      <td><?php echo $row["id"]; ?></td>
                      <td><?php echo $row["status"]; ?></td>
                      <td><?php echo $row["custid"]; ?></td>
                      <td><?php echo $row["time"]; ?></td>
                      <td><?php echo $row["location"]; ?></td>
                    </tr>
                  <?php
                  }
                }
              ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>


  <?php
    include('./footer.php')
  ?>

  <script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>

<?php
  $conn->close();
?>