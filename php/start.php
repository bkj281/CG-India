<?php
  $conn = new mysqli("localhost", "root", "", "cgindia");

  if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
  }

  $id = $_POST["idno"];

  $sql = "UPDATE issue SET status='1' WHERE id='$id'";  

  if ($conn->query($sql) === TRUE) { ?>
    <script type="text/javascript">
      alert("Status Updated!"); 
      window.open("../page/govView.php", "_self")
    </script>
    <?php      
  }
  else {?>
    <script type="text/javascript">
      alert("An Error Occured!");
      window.open("../page/govView.php", "_self")
    </script>
    <?php
  }

  $conn->close();

?>