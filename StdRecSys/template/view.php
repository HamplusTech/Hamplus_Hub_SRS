<?php
include '../config/config.php';
include '../logic/view.php';

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
    <link rel="stylesheet" href="<?= AppStyle;?>?<?= rand(); ?>">
    <script src="<?php echo AppScript; ?>"></script>
</head>

<body>
    <div>
     
      <a href="./index.php" style="float:right; margin-right:20px; margin-top:10px;">Log out</a>
       <?php ($delete == 1) ? $action = "hidden" : $action = ""; ?>
        <form action="" method="post" <?= $action;?> >
            <div id="student">
               
                <div>
                    <div id="passport" hidden>
                        <img src="" alt="Student's Passport">
                    </div>

                    <div id="data">
                        <h3><label for="fullname"><?= ucfirst($result[regno]); ?></label></h3>
                        <h3><label for="fullname"><?= ucfirst($result[fullname]); ?></label></h3>
                        <h4><label for="phone"><?= ucfirst($result[phone]); ?></label></h4>
                        <h4><label for="email"><?= ucfirst($result[email]); ?></label></h4>
                        <h4><label for="course"><?= ucfirst($result[course]); ?></label></h4>
                        <h4><label for="training_type"><?= ucfirst($result[training_type]); ?></label></h4>
                    </div>

                    <div>
                        <input id="success" type="submit" value="Edit" name="edit">
                        <input id="danger" type="submit" value="Delete" name="delete">
                    </div>
                </div>
                
            </div>
        </form>
        <?php ($delete != 1) ? $action = "hidden" : $action = ""; ?>
        <form action="" method="post" <?= $action;?> >
            <div>
                <div id="student">
                    <div id="data">
                        <h2>All your data with <?= AppName; ?> will be deleted! Do you want to continue?</h2>
                    </div>
                    <div>
                        <input id="success" type="submit" value="No" name="no">
                        <input id="danger" type="submit" value="Yes" name="yes">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>