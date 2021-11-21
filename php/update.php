<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $phn = $_POST['phn'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pin = $_POST['pin'];
  $pwd = $_POST['pwd'];
  $pwd2 = $_POST['pwd2'];

  if ($pwd !== $pwd2) {
    echo '
      <script type="text/javascript">
        alert("Password Mis-Matched");
        window.open("../page/updateDetail.php", "_self");
      </script>
    ';
  }

  else {

    session_start();

    
    $id = $_SESSION["id"];
    $_SESSION["name"] = $name;
    $_SESSION["dob"] = $dob;
    $_SESSION["phn"] = $phn;
    $_SESSION["address"] = $address;
    $_SESSION["city"] = $city;
    $_SESSION["pin"] = $pin;
    $_SESSION["email"] = $email;
    $_SESSION["pwd"] = $pwd;
    
    // Create connection
    $conn = new mysqli("localhost", "root", "", "cgindia");

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    else {
      $sql = "UPDATE users SET name='$name', email='$email', dob='$dob', phn='$phn', address='$address', city='$city', pin='$pin', pwd='$pwd' WHERE id='$id'";

      if ($conn->query($sql) === TRUE) { ?>
          <script type="text/javascript">
            alert("Details Updated!"); 
            window.open("../page/custView.php", "_self")
          </script>
          <?php      
      }
      else {?>
        <script type="text/javascript">
          alert("An Error Occured!");
          window.open("../page/updateDetail.php", "_self")
        </script>
        <?php
      }
    }

    $conn->close();
  }
?>