<?php

  session_start();

  $conn = new mysqli("localhost", "root", "", "cgindia");

  if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
  }

  $custid = $_SESSION["id"];

  $sql = "SELECT * FROM issue where custid='$custid'";  

  $result = $conn->query($sql);

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
  <script src="https://kit.fontawesome.com/a0d95914a1.js" crossorigin="anonymous"></script>
</head>
<body>

  <header class="jumbotron" id="home">
    
    <?php
      include('./topnav.php');
    ?>

    <div class="container-fluid">
  
      <div class="row align-items-md-stretch text-white bg-dark p-md-2">    
        <div class="col-12 col-md-5">
          <div class="h-100 p-3 p-lg-5">
            <img class="img-fluid" src="../assets/image/logobg.jpeg">
          </div>
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-6 p-3 p-lg-5">
          <h1>
            CG India
            <small class="text-muted mx-2 mx-md-4">Clean & Green India</small>
          </h1>
          <figure class="mt-5">
            <blockquote class="blockquote">
              <span>As long as, you do not take the broom and the bucket in your hands, you cannot make your towns and cities clean.</span>
            </blockquote>
            <figcaption class="blockquote-footer mx-5 text-end">
              <cite title="Source Title">Gandhiji</cite>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="row bg-light">
        <div class="col-12 col-md-6 p-0">
          <nav class="navbar px-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 py-1">
              <li class="breadcrumb-item">Rashtriya Sevak</li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php echo $_SESSION["name"] ?>
                <?php echo "<img src='".$_SESSION["profile"]."' id='custdp' class='img-thumbnail rounded-circle'>" ?>
              </li>
            </ol>
          </nav>
        </div>

        <div class="col-12 col-md-6 align-self-center text-end">
          <button class="btn btn-outline-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#post">
            <i class="fas fa-recycle fa-fw"></i>
            Post Issue
          </button>
          <a class="btn btn-outline-info btn-sm" href="#contact">
            <i class="fas fa-id-card fa-fw"></i>
            Contact Us
          </a>
          <form class="d-inline" action="./updateDetail.php" method="POST">
            <button class="btn btn-outline-success btn-sm" type="submit">
              <i class="fas fa-sign-out-alt fa-fw"></i>
              Edit Profile
            </button>
          </form>
          <form class="d-inline" action="../php/logout.php" method="POST">
            <button class="btn btn-outline-danger btn-sm" type="submit">
              <i class="fas fa-sign-out-alt fa-fw"></i>
              Logout
            </button>
          </form>
        </div>
      </div>
    </div>
    
  </header>

  <!-- Post Issue Modal -->
	<div class="modal fade" id="post">
		<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header bg-warning text-white">
					<h5 class="modal-title">
						Post Issue
					</h5>
					<button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

        <div class="modal-body bg-light">
          <i class="fas fa-trash fa-7x d-block text-center text-warning mb-4"></i>
            <form action="../php/post.php" method="POST" enctype="multipart/form-data">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-md-8">
                    <div class="mb-3">
                      <label for="username" class="form-label">
                        <i class="fas fa-heading fa-fw"></i>
                        Heading :
                      </label>
                      <input type="text" class="form-control" name="heading" id="heading" placeholder="Title" required>
                    </div>

                    <div class="mb-3">
                      <label for="location" class="form-label">
                        <i class="fas fa-thumbtack fa-fw"></i>
                        Location :
                      </label>
                      <input type="text" class="form-control" name="location" id="loaction" placeholder="Location" required>
                    </div>                    

                    <div class="mb-3">
                      <label for="duration" class="form-label">
                      <i class="fas fa-clock fa-fw"></i>
                        Duration :
                      </label>
                      <input type="text" class="form-control" name="duration" id="duration" placeholder="Duration" required>
                    </div>

                    <div class="mb-3">
                      <label for="issue" class="form-label">
                        <i class="far fa-image fa-fw"></i>
                        Current Pic
                      </label>
                      <input type="file" class="form-control" id="issue" name="issue" accept="image/*" required>
                    </div>

                  </div>

                  <div class="col-12 col-md-4">
                    <div class="mb-3">
                      <label for="details" class="form-label">&nbsp;Elaborate Issue: </label>
                      <textarea class="form-control" name="details" id="details" rows="12" placeholder="Provide Description here..."></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="mt-3">
                      <button type="submit" class="btn btn-outline-warning w-100">
                        <i class="fas fa-upload fa-fw"></i>
                        Upload
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>

				<div class="modal-footer d-block bg-light">
					<button type="button" data-bs-dismiss="modal" class="btn btn-danger w-25">Cancel</button>
				</div>
			</div>
		</div>
	</div>

  <main class="mt-5">

    <div class="container-fluid">
      
      <div class="row">

        <div class="col-12 col-md-9">

          <div class="h3 text-center">
            <span class="">Total Complaints : <?php echo $result->num_rows ?></span>
            <span class="text-muted mx-md-5 btn-group mt-3">
              <button disabled="disabled" class="btn btn-sm btn-danger">Not Started</button>
              <button disabled="disabled" class="btn btn-sm btn-warning">Under Work</button>
              <button disabled="disabled" class="btn btn-sm btn-success">Completed</button>
            </span>
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
                        
                        <div class="card-footer">
                          <?php
                            if ($row["status"] == 1) {
                              echo '<span class="text-muted">Posted on '.$row["time"].' at '.$row["location"].'.</span>';
                            }
                            else {
                              echo '<span class="text-white-50">Posted on '.$row["time"].' at '.$row["location"].'.</span>';
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
        </div>
        <div class="col-md-3 border-start mt-3">
          <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="fst-italic">About</h4>
              <span class="mb-0">
                Here are some Archives of our work since past few years.
                <br />
                Do join & work with for more success to our dream.
              </span>
            </div>

            <div class="p-4">
              <h4 class="fst-italic">Archives</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">September 2021</a></li>
                <li><a href="#">August 2021</a></li>
                <li><a href="#">July 2021</a></li>
                <li><a href="#">June 2021</a></li>
                <li><a href="#">May 2021</a></li>
                <li><a href="#">April 2021</a></li>
                <li><a href="#">March 2021</a></li>
                <li><a href="#">February 2021</a></li>
                <li><a href="#">January 2021</a></li>
                <li><a href="#">December 2020</a></li>
                <li><a href="#">November 2020</a></li>
                <li><a href="#">October 2020</a></li> 
              </ol>
            </div>

            <div class="p-4">
              <h4 class="fst-italic">Elsewhere</h4>
              <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Linked-In</a></li>
              </ol>
            </div>

          </div>

        </div>

      </div>
    </div>

    <hr class="w-75 mx-auto" />

    <?php
			include('./contactform.php')
		?>

  </main>

  <?php
    include('./footer.php')
  ?>

  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>

<?php
  $conn->close();
?>