<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
    
        <div class="wrapper">
            <section class="form signup">
                <header>Chat App</header>
                <form action="#" enctype="multipart/form-data" autocomplete="off">
                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label>Frist Name</label>
                            <input type="text" placeholder="First Name" required name="fname">
                        </div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" placeholder="Last Name" required name="lname">
                        </div>
                    </div>
                        <div class="field input">
                            <label>Email Address</label>
                            <input type="email" placeholder="enter your email" required name="email">
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" placeholder="enter new password" required name="pass">
                        </div>
                        <div class="field image">
                            <label>Select Image</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Continue to Chat">
                        </div>
                </form>
                <div class="link">Already signed up? <a href="login.php">Login now</a></div>
            </section>
        </div>

    
    <script src="JavaScript/signup.js"></script>

</body>
</html>