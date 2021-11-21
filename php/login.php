<?php
  session_start();

  if ($_SESSION["verify"] != $_POST["verify"]) {
    echo '
      <script>
        alert("Invalid Captcha");
        window.open("../index.php", "_self");
      </script>';
  }

  else {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $type = $_POST["category"];

    $conn = new mysqli("localhost", "root", "", "cgindia");
    
    if ($conn->connect_error) {
      die ("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users where email='$email' and pwd='$pwd' and type='$type'";

    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
    

      while($row = $result->fetch_assoc()) {

        $_SESSION["name"] = $row["name"];
        $_SESSION["dob"] = $row["dob"];
        $_SESSION["phn"] = $row["phn"];
        $_SESSION["address"] = $row["address"];
        $_SESSION["city"] = $row["city"];
        $_SESSION["pin"] = $row["pin"];
        $_SESSION["email"] = $email;
        $_SESSION["pwd"] = $pwd;
        $_SESSION["type"] = $type;
        $_SESSION["id"] = $row["id"];
        $_SESSION["profile"] = $row["profile"];

      }
      

      if ($_SESSION["type"] === "person") {?>
        <script type="text/javascript">
          // alert("User Registered!"); 
          window.open("../page/greeting.php", "_self")
        </script>
        <?php
      }
      else {?>
        <script type="text/javascript">
          // alert("Official Registered!"); 
          window.open("../page/govView.php", "_self")
        </script>
        <?php
      }

    }

    $conn->close();
  }
?>