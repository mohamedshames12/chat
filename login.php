<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    
        <div class="wrapper">
            <section class="form login">
                <header>Chat App</header>
                <form action="#" autocomplete="off">
                    <div class="error-txt"></div>
                        <div class="field input">
                            <label>Email Address</label>
                            <input type="email" placeholder="enter your email" required name="email">
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" placeholder="enter your password" class="eye" required name="pass">
                            <!-- <i class="fa-sharp fa-solid fa-eye"></i> -->
                        </div>
                        <div class="field button">
                            <input type="submit" value="Continue to Chat">
                        </div>
                </form>
                <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
            </section>
        </div>

 

        <!-- for eye password -->
            <script src="JavaScript/eye.js"></script>
            <script src="JavaScript/login.js"></script>

</body>
</html>