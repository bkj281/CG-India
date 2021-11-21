<?php
  $first = $_POST['f_name'];
  $last = $_POST['l_name'];
  $name = $first." ".$last;
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $phn = $_POST['phn'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pin = $_POST['pin'];
  $pwd = $_POST['pwd'];
  $pwd2 = $_POST['pwd2'];
  $type = $_POST['category'];



  if ($pwd !== $pwd2) {
    echo '
      <script type="text/javascript">
        alert("Password Mis-Matched");
        window.open("../index.php", "_self");
      </script>
    ';
  }

  else {

    session_start();

    $_SESSION["name"] = $name;
    $_SESSION["dob"] = $dob;
    $_SESSION["phn"] = $phn;
    $_SESSION["address"] = $address;
    $_SESSION["city"] = $city;
    $_SESSION["pin"] = $pin;
    $_SESSION["email"] = $email;
    $_SESSION["pwd"] = $pwd;
    $_SESSION["type"] = $type;
    
    // Create connection
    $conn = new mysqli("localhost", "root", "", "cgindia");

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    else {
      $fnm = $_FILES['dp']['name'];
      $ds = '../uploaded/'.$fnm;
      $ds_db = '../uploaded/'.$fnm;

      move_uploaded_file($_FILES["dp"]["tmp_name"], $ds);
      
      $sql = "INSERT INTO users (name, email, dob, phn, address, city, pin, pwd, type, profile)
                VALUES ('$name', '$email', '$dob', '$phn', '$address', '$city', '$pin', '$pwd', '$type', '$ds_db')";

      if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        $_SESSION["id"] = $last_id;
        $_SESSION["profile"] = $ds_db;

    $header = 'From: bkj281@gmail.com';
    $msg = 'Thank You for registering on our website.
We are happy as you have choosed us.
Together we will clean the Nation.
&
Make it a Green Nation.
';
  
    $mail_sent = mail($email, 'Welcome', $msg, $header);

    //     echo $mail_sent;

        if ($_SESSION["type"] === "person") {?>
          <script type="text/javascript">
            alert("User Registered!"); 
            window.open("../page/greeting.php", "_self")
          </script>
          <?php
        }
        else {?>
          <script type="text/javascript">
            alert("Official Registered!"); 
            window.open("../page/govView.php", "_self")
          </script>
          <?php
        }
      
      }
      else {?>
        <script type="text/javascript">
          alert("An Error Occured!");
          window.open("../index.php", "_self")
        </script>
        <?php
      }
    }

    $conn->close();
  }
?>