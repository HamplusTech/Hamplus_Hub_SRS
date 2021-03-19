<?php
include '../config/config.php';
include '../logic/login.php';

error_reporting(0);

/*$created_at = date("Y-m-d H:i:s");
echo $created_at;*/
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
    <link rel="stylesheet" href="<?php echo AppStyle;?> ? <?echo rand();?>">
    <script src="<?php echo AppScript; ?>"></script>
</head>

<body>
    <div>
        <form action="" method="post">
            <div id="login">
                <div>
                    <fieldset>
                        <legend>Login</legend>
                        <input type="text" name="regno" value="<?php echo $_POST['regno']; ?>" placeholder="Registration Number">
                        
                        <input type="password" name="phone" value="<?php echo $_POST['phone']; ?>" placeholder="Phone Number">
                        
                    </fieldset>
                </div>

                <hr>

                <?php echo $message; 
                /*var_dump($_POST);*/
                ?>

                <div>
                    <input id="warning" type="submit" value="Login" name="login">
                    <input id="danger" type="reset" value="Clear" name="clear">
                </div>
                <a href="./index.php">Go Back</a>
            </div>
        </form>
    </div>
</body>

</html>