<?php
  
  session_start();

  $heading = $_POST["heading"];
  $loc = $_POST["location"];
  $custid = $_SESSION["id"];
  $date = date("Y/m/d");
  $status = 0;
  $description = $_POST["details"];

    // Create connection
  $conn = new mysqli("localhost", "root", "", "cgindia");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  else {
    $fnm = $_FILES['issue']['name'];
    $ds = '../uploaded/'.$fnm;
    $ds_db = '../uploaded/'.$fnm;

    move_uploaded_file($_FILES["issue"]["tmp_name"], $ds);
    
    $sql = "INSERT INTO issue (heading, custid, location, time, status, description, pic)
              VALUES ('$heading', '$custid', '$loc', '$date', '$status', '$description', '$ds_db')";

    if ($conn->query($sql) === TRUE) { ?>
      <script type="text/javascript">
        alert("Issue Uploaded!"); 
        window.open("../page/custView.php", "_self")
      </script>
      <?php
    }
    else { ?>
      <script type="text/javascript">
        alert("An Error Occured!");
        window.open("../page/custView.php", "_self")
      </script>
      <?php
    }
  }

  $conn->close();

?>