<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="css/signup.css" />
  </head>

<div class="container">
        <div class="title">
            <p>Register yourself now!</p>
        </div>
        <?php
        if(isset($_POST["submit"])) {
            $name = $_POST["name"];
            $id = $_POST["id"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $pass  = $_POST["pass"];
            $confirmpas = $_POST["confirmpass"];
            $branch = $_POST["branch"];
            $uname = $_POST["uname"];
            

            $passhash = password_hash($pass, PASSWORD_DEFAULT);

            $errors = array();

            if(empty($name) || empty($branch) || empty($email) || empty($phone) || empty($pass) || empty($confirmpas) || empty($uname) ){
                array_push($errors,"Please fill all fields ");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors,"Email is not valid");
            }
            if (strlen($pass)<8){
                array_push($errors,"Password must contain at least 8 characters");
            }
            if ($pass!==$confirmpas){
                array_push($errors, "Passwords do not match");  
            }
            require_once "db.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if($rowCount> 0){
                array_push($errors,"Email already exists!");
            }
            if (count($errors)> 0){
                foreach($errors as $errors){
                    echo "<div class='alert alert-danger'>$errors</div>";

                }
            }else{
                require_once "db.php";
                $sql = "INSERT INTO users (name, id, email, phone, pass, branch, uname, role) VALUES (?, ?, ?, ?, ?, ?, ?, 'user')";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                if ($preparestmt){
                    mysqli_stmt_bind_param($stmt, "sssssss", $name, $id, $email, $phone, $passhash, $branch, $uname);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                }else{
                    die("something went wrong");
                }
                }
            }
        ?>
        <form action="signup.php" method="POST">
            <div class="user_details">
            <div class="input_box">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
                </div>
                <div class="input_box">
                    <label for="id">Moodle ID</label>
                    <input type="number" id="id" class="form-control" placeholder="Enter your moodleid" name="id" required>
                </div>
                <div class="input_box">
                    <label for="email">email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email" name="email"required>
                </div>
                <div class="input_box">
                    <label for="phone">Phone Number</label>
                    <input type="number" id="phone" class="form-control" placeholder="Enter your number" name="phone" required >
                </div>
                <div class="input_box">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" class="form-control" placeholder="Enter your password" name="pass"required >
                </div>
                <div class="input_box">
                    <label for="confirmpass">Confirm Password</label>
                    <input type="password" id="confirmpass" class="form-control" placeholder="Confirm your password" name="confirmpass"required >
                </div>
                <div class="input_box">
                    <label for="branch">Branch</label>
                    <input type="text" id="branch" class="form-control" placeholder="Enter your branch" name="branch"required >
                </div>
                <div class="input_box">
                    <label for="uname">Username</label>
                    <input type="text" id="uname" class="form-control" placeholder="firstname_lastname_FE/SE/TE/BE" name="uname" required>
                </div>
            </div>
            
            <div class="reg_btn">
                <input type="submit" value="Register" name="submit">
            </div>
        </form>
    </div>