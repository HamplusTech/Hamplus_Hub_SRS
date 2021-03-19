<?php
include '../config/config.php';
include '../logic/edit.php';

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
    <link rel="stylesheet" href="<?php echo AppStyle; ?> ? <? echo rand(); ?>">
    <script src="<?php echo AppScript; ?>"></script>
</head>

<body>
    <div>
        <form action="" method="post">
            <div id="modify">
                <div>
                    <fieldset>
                        <legend>Modify Data</legend>
                        <input type="text" name="fullname" value="<?=  $result['fullname']; ?>" placeholder="Your Fullname">
                        
                        <input type="tel" name="phone" value="<?= $result['phone']; ?>" placeholder="Your Phone No. (WhatsApp preferrably)">
                        
                        <input type="email" name="email" value="<?=  $result['email']; ?>" placeholder="Your Email">
                        
                        <?=  $result[gender]; ?>
                        <select name="gender" id="">
                            <option>- - Gender - -</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        
                        <?=  $result[training_type]; ?>
                        <select name="TrainingType" id="">
                            <option>- - Training Type - -</option>
                            <optgroup label="Paid">
                            <option>Part-time</option>
                            <option>Full-time</option>
                            </optgroup>
                            
                            <optgroup label="Promotional">
                            <option>Sponsored</option>
                            <option>Hub</option>
                            </optgroup>
                        </select>
                        
                        <?=  $result[course]; ?>
                        <select name="course" id="">
                            <option>- - Course - -</option>
                            <option>Computer Literacy</option>
                            <option>Web Development</option>
                            <option>Graphics</option>
                            <option>Animation</option>
                            <option>SEO</option>
                        </select>
                        
                        <textarea name="address" id="" cols="30" rows="10" placeholder="Your Address"><?= $result['std_address']; ?></textarea>
                        
                    </fieldset>
                </div>

                <hr>

                <?php echo $message; 
                /*var_dump($_POST);*/
                ?>

                <div>
                    <input id="warning" type="submit" value="Save" name="save">
                    <input id="danger" type="reset" value="Clear" name="clear">
                </div>
                <a href="./index.php">Go Back</a>
            </div>
        </form>
    </div>
</body>

</html>