<?php
include '../config/config.php';
include '../logic/index.php';

error_reporting(0);
session_start();

if (isset($_POST['register'])) {
    header('Location:./register.php');
}

if (isset($_POST['login'])) {
    header('Location:./login.php');
}

if (isset($_POST['view'])) {
    (!empty($_SESSION['regno'])) ? header('Location:./view.php') : "";
}
session_destroy();
?>


<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo AppDescription; ?>">
    <meta name="application-name" content="<?php echo AppName; ?>">
    <meta name="author" content="<?php echo AppAuthor; ?>">
    <meta name="keywords" content="<?php echo AppKeyword; ?>">
    <title><?php echo AppTitle; ?></title>
    <link rel="stylesheet" href="<?php echo AppStyle; ?>">
    <script src="<?php echo AppScript; ?>"></script>
</head>

<body>
    <div>
        <div>
            <div>
                <form action="" method="post">
                    <div id="welcome">
                        <div>
                            <h1><em>WELCOME to</em> Hamplus Technologies International</h1>
                            <h3>- Hamplus Hub -</h3>
                        </div>

                        <hr>
                        <?= $message; ?>
                        <hr>

                        <div>
                            <h2>Student Record System</h2>
                        </div>
                        
                        <hr>
                        <hr>
                        
                        <div>
                            <input id="primary" type="submit" value="Login" name="login">
                            <input id="warning" type="submit" value="Register" name="register">
                            <input id="danger" type="submit" value="View Students" name="view">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>