<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="css/style3.css" />
    <title>Sign In </title>
  </head>
  <body>
    <!-- header  -->
    <header>
      <div class="cntr-main header-cntr-main">
        <img id="logo-main" src="imgs/Meet-Greet-10-4-2023.png" alt="meet&greet"
        /></a>
      </div>
    </header>
    <!-- hero  -->
    <main>
      <section class="section section-left">
        <div>
        
          <p>Art by <span>Alessandra Bernard</span></p>
        </div>
      </section>
      <section class="section section-right">
        <?php 
        session_start();
        if (isset($_POST["login"])) {
          
          $email = $_POST["email"];
          $pass = $_POST["pass"];
          
          require_once "db.php";

          $sql = "SELECT * FROM `users` WHERE email = '$email' ";
          $result = mysqli_query($conn, $sql);
          $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $user_id = $user['id'];
          $username = $user['uname'];
          $branch = $user['branch'];
          
          $_SESSION['branch'] = $branch;
          $_SESSION['auth_user_id'] = $user_id;
          $_SESSION['authuser_name'] = $username;
          if($user) {
         
            if (password_verify($pass, $user["pass"])) {
              $_SESSION['user_role'] = $user['role'];
              $_SESSION['branch'] = $branch;
              header("location: index.php");
              die();
            }else{
              echo "<div class='alert alert-danger'>Password does not match</div>";
            }
          }else{
            echo "<div class='alert alert-danger'>Email does not match</div>";
          }

         // $admin_sql = "SELECT * FROM `admin` WHERE email = '$email' ";
         // $admin_result = mysqli_query($conn, $admin_sql);
        //  $admin = mysqli_fetch_array($admin_result, MYSQLI_ASSOC);
        //  $branch1 = $admin['branch'];

          // If an admin with the provided email exists, check the password
       //   if ($admin) {
       //     $_SESSION['user_role'] = $admin['role'];
                  // Redirect to the admin dashboard or some admin-specific page
         //         header("location: index.php");
                 
           //   } else {
          //        echo "<div class='alert alert-danger'>Admin password does not match</div>";
          //    }
          
              
          }
        ?>

        <div class="cntr-main">
          <h1 class="title-main">Connect with your peers, join your community today! </h1>
     
          <div class="ctnr-form">
            <form action="login.php" method="post">


              <label class="form-label" for="email"
                >Email ID</label
              >
              <input
                class="form-input-box"
                type="text"
                id="email"
                name="email"
                required
              />
              <div class="password-label-ctnr">
                <label class="form-label" for="pass">Password</label>
                
              </div>
              <input
                class="form-input-box"
                id="pass"
                name="pass"
                type="password"
                required
              />
             
 
              <button type="submit" class="btn sign-in-btn" value="login" name="login">Sign In</button>
            </form>
            <p class="sign-up-link">
              Not a member?
              <a href="signup.php">Sign up now</a>
            </p>
            <p class="back">
              <a href="index.php">
              <button  type="menu" class="btn back">back </button>
              </a>
            </p>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>