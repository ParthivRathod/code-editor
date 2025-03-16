<?php
session_start(); // For login session (optional)

// DB Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "code";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// REGISTER USER
if (isset($_POST['submit']) && $_POST['submit'] === 'Sign in') {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user/email already exists
    $check_query = "SELECT * FROM registred_user WHERE email='$email' OR username='$username'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops",
                    text: "Email or Username already exists!",
                    confirmButtonText: "Try Again"
                }).then(function() {
                    window.location.href = "signin.php";
                });
            </script>
        </body>
        </html>';
    } else {
        // (Optional) Hash password for better security
        // $password = password_hash($password, PASSWORD_DEFAULT);

        $insert = "INSERT INTO registred_user (fullname, username, email, password)
                   VALUES ('$fullname', '$username', '$email', '$password')";

        if (mysqli_query($conn, $insert)) {
            echo '
            <!DOCTYPE html>
            <html>
            <head>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Registration Successful!",
                        text: "You can now log in to your account.",
                        confirmButtonText: "OK"
                    }).then(function() {
                        window.location.href = "user-login.php";
                    });
                </script>
            </body>
            </html>';
        } else {
            echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops",
                    text: "Something went wrong. Try again.",
                    confirmButtonText: "Try Again"
                }).then(function() {
                    window.location.href = "login.php";
                });
            </script>
        </body>
        </html>';
        }
    }
}

// LOGIN USER
if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $username_or_email = $_POST['username'];
    $password = $_POST['password'];

    $login_query = "SELECT * FROM registred_user WHERE (username='$username_or_email' OR email='$username_or_email') AND password='$password'";
    $result = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        // $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['login_success'] = "Login Successful! Welcome, " . $user['username'] . ".";

        echo '
            <!DOCTYPE html>
            <html>
            <head>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Login Successful!",
                        
                        confirmButtonText: "OK"
                    }).then(function() {
                        window.location.href = "../index.php";
                    });
                </script>
            </body>
            </html>';
    } else {
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Login Failed",
                    text: "Wrong username or password!",
                    confirmButtonText: "Try Again"
                }).then(function() {
                    window.location.href = "signin.php";
                });
            </script>
        </body>
        </html>';
    }

}
?>