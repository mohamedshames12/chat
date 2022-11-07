<?php 

 include_once "config.php";
 session_start();
 $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
 $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
 $email = mysqli_real_escape_string($conn, $_POST["email"]);
 $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
//  $image = mysqli_real_escape_string($conn, $_POST["image"]);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pass)){
    // let's check user email and password are valid or not;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        // let's check that email already exists in the database or not
        $sql = mysqli_query($conn, "SELECT email FROM `users` WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){ // if email already exists;
            echo "$email - THis email already exist!";
        }else{
            // let's check users uploaded
            if(isset($_FILES["image"])){ //if file is uploaded
                $img_name = $_FILES["image"]["name"];
                $tmp_name = $_FILES["image"]["tmp_name"];

                $img_explode = explode(".", $img_name);
                $img_ext = end($img_explode);

                $extensions = ['png', 'jpg', 'jpeg'];

                if(in_array($img_ext, $extensions) === true) {
                    $time = time();

                    $new_img_name = $time.$img_name;
                    if( move_uploaded_file($tmp_name, "images/".$new_img_name)){
                        $status = "Active now";
                        $random_id = rand(time(), 10000000);
                        // let's insert all user database inside table
                        $insert = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, pass, img , status) 
                                               VALUES({$random_id},'{$fname}','{$lname}','{$email}','{$pass}','{$new_img_name}','{$status}')");
                        if($insert){
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE  email = '{$email}'");
                            if(mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "successfully";
                            }
                        }else{
                             echo "Something went wrong!";
                        }
                    }
                  
                }else{
                    echo "Please select an Image file - jpeg, jpg, png";
                }

            }else{
                echo "Please select an Image file!";
            }
        }
    }else{
        echo "$email - This is not vaild email!";
    }
}else{
    echo "All input field are required!";
}


?>