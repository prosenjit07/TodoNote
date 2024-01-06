<?php
session_start();
if (isset($_SESSION['logged_in']) and $_SESSION['logged_in'] == true) {
    header("Location: orderlist.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="centered-wrapper">
        <div class="form-container" id="form">
            <h3>Login</h3>

            <?php
            //     $username = "prosenjit07";
            //     $email = "prosenjit07@mail.com";
            //     $password = "@Prosenjit123";
            //     $repeat_password = "@Prosenjit123";

            //     $password_hash = password_hash($password, PASSWORD_DEFAULT);

            //     $errors = array();
            //     require_once "database.php";

            //     if (count($errors) > 0) {
            //         foreach ($errors as $error) {
            //             echo "<div class='alert alert-danger error'>$error</div>";
            //         }
            //     } else {
            //         $sql_cmd = "INSERT INTO admin (username, email, password) VALUES (?, ?, ?)";
            //         $sql_init = mysqli_stmt_init($conn);
            //         $success = mysqli_stmt_prepare($sql_init, $sql_cmd);

            //         if ($success) {
            //             mysqli_stmt_bind_param($sql_init, "sss", $username, $email, $password_hash);
            //             mysqli_stmt_execute($sql_init);
            //             echo "<div class='alert alert-success'>You are registered successfully.</div>";
            //         } else {
            //             die("Something went wrong...");
            //         }
            //     }
            ?> 

            <?php
            if (isset($_POST["login"])) {
                $usermail = $_POST["usermail"];
                $password = $_POST["password"];

                require_once "database.php";

                $sql_cmd = "SELECT * FROM admin WHERE username = '$usermail' OR email = '$usermail'";
                $result = mysqli_query($conn, $sql_cmd);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if ($user) {
                    if (password_verify($password, $user["password"])) {
                        session_start();

                        $_SESSION["username"] = $user["username"];
                        $_SESSION["userid"] = $user["id"];
                        $_SESSION["email"] = $user["email"];
                        $_SESSION["logged_in"] = true;

                        header("Location: orderlist.php");
                        die();
                    } else {
                        echo "<div class='alert alert-danger error'>Password is incorrect.</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger error'>Account not found.</div>";
                }
            }
            ?>

            <form class="form" action="login.php" method="post">
                <i class="icon fas fa-user"></i>
                <input class="shadow-input" type="text" placeholder="Username or Email" name="usermail"
                    autocomplete="off" />
                <br>

                <i class="icon fas fa-lock"></i>
                <input class="shadow-input" type="password" placeholder="Password" name="password" autocomplete="off" />
                <br>

                <button class="colored-btn" type="submit" name="login">Login</button>
            </form>

            <p>Don't have an account? <a href="register.php">Register now</a></p>
        </div>
    </div>

    <script src="./main.js"></script>

</body>

</html>