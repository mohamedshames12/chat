<?php
 include_once "config.php";
  session_start();
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $pass = mysqli_real_escape_string($conn, $_POST["pass"]);

    if(!empty($email) && !empty($pass)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $status = "Active now";
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
            if($sql2){
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "successfully";
            }

        }else{
            echo "Email or password incorrect!";
        }
    }else{
        echo "All input fileds are required!";
    }
?>