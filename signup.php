<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="STYLE/style1.css" />
    <title>SighnUp</title>
</head>

<body>
    <form action="Index.php" class="sign-up-form" method="POST">

      <?php
 
        if (isset($_POST["signup"])) {

          $Username = $_POST["username"];
          $Email = $_POST["email"];
          $Password = $_POST["password"];



         $conn = mysqli_connect("localhost", "root", "", "userdata");
         $query = "INSERT INTO registration VALUES ('$Username', '$Email', '$Password')";

         mysqli_query($conn, $query);

         echo '<script>alert("Registration Done Successfully");</script>';
        }

      ?>

        <h2 class="title">Sign up page</h2>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" />
        </div>
        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" />
        </div>
        <div class=" input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id=password placeholder="Password" name="password" />
        </div>
        <input type="submit" class="btn" value="Sign up" name="signup" />
        <p class="social-text">Or Sign up with social platforms</p>
        <div class="social-media">
            <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </form>
    </div>
    </div>
</body>

</html>