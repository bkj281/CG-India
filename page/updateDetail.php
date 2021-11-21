<?php
  session_start();
  $name = $_SESSION["name"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Details</title>
  <link rel="shortcut icon" href="../assets/image/favicon.jpg" type="image/x-icon">  
  <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://kit.fontawesome.com/a0d95914a1.js" crossorigin="anonymous"></script>
</head>

<body class="updbg">
  	<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-success text-white">
					<h5 class="modal-title">
						User Update Details
					</h5>
				</div>

				<div class="modal-body">
					<i class="fas fa-user fa-10x d-block text-center text-success mb-4"></i>
					<form action="../php/update.php" method="POST" enctype="multipart/form-data">
						<div class="mb-3">
							<label for="" class="form-label">
								<i class="fas fa-file-signature fa-fw"></i>
								Full Name
							</label>
							<input type="text" class="form-control" name="name" value=<?php echo $name; ?> required>
						</div>

						<div class="mb-3">
							<label for="username" class="form-label">
								<i class="fas fa-signature fa-fw"></i>
								User ID
							</label>
							<input type="email" class="form-control" name="email" value=<?php echo $_SESSION["email"]; ?> required>
						</div>

						<div class="mb-3">
							<label for="dob" class="form-label">
								<i class="fas fa-birthday-cake fa-fw"></i>
								D.O.B.
							</label>
							<input type="date" class="form-control" name="dob" value=<?php echo $_SESSION["dob"]; ?> required>
						</div>

						<div class="mb-3">
							<label for="phn" class="form-label">
								<i class="fas fa-mobile-alt fa-fw"></i>
								Phone No.
							</label>
							<input type="tel" class="form-control" name="phn" value=<?php echo $_SESSION["phn"]; ?> required>
						</div>

						<div class="row mb-3">
							<div class="col-12 mb-2">
								<label for="address" class="mb-2">
									<i class="fas fa-map-marker-alt fa-fw"></i>
									Address
								</label>
								<input type="text" class="form-control" name="address" value=<?php echo $_SESSION["address"]; ?> required>
							</div>
							<div class="col-md-4 mb-1">
								<input type="text" name="city" class="form-control" value=<?php echo $_SESSION["city"]; ?> required>
							</div>
							<div class="col-md-4 mb-1">
								<input type="text" name="state" class="form-control" value="Gujarat" required>
							</div>
							<div class="col-md-4 mb-1">
								<input type="number" name="pin" class="form-control" value=<?php echo $_SESSION["pin"]; ?> required>
							</div>
						</div>

						<div class="mb-3">
							<label for="pwd" class="form-label">
								<i class="fas fa-key fa-fw"></i>
								Password
							</label>
							<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Your Password" required>
						</div>

						<div class="mb-3">
							<label for="pwd2" class="form-label">
								<i class="fas fa-key fa-fw"></i>
								Re-Enter Password
							</label>
							<input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="Your Password" required>
						</div>

						<div class="mb-3">
							<label for="dp" class="form-label">
								<i class="far fa-image fa-fw"></i>
								Profile Pic
							</label>
							<input type="file" class="form-control" id="dp" name="dp" accept="image/*">
						</div>

						<div class="mt-3">
							<button type="submit" class="btn btn-success btn-sm w-100">Update</button>
						</div>
					</form>
				</div>
        <form action="./custView.php" method="POST">
			  	<div class="modal-footer d-block">
			  		<button type="submit" class="btn btn-danger btn-sm w-25">Cancel</button>
			  	</div>
        </form>
      </div>
		</div>
	</div>
</body>
</html>