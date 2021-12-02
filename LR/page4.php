<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    <?php
        include_once('./script.php');
        addPath($_SERVER['PHP_SELF']);
        if(isset($_POST['age'])) {
            $_SESSION['age'] = $_POST['age'];
        }
    ?>

    <div class="container">
        <div class="param">
            <span>Firstname:</span>
            <span><?php echo $_SESSION['firstname'];?></span>
        </div>
        <div class="param">
            <span>Lastname:</span>
            <span><?php echo $_SESSION['lastname'];?></span>
        </div>
        <div class="param">
            <span>Age:</span>
            <span><?php echo $_SESSION['age'];?></span>
        </div>

        <?php
            echo '<span><b>Passed links:</b></span>';
            echo '<div class="links">';
            if(isset($_SESSION['links'])) {
                foreach($_SESSION['links'] as $link) {
                    echo "<div class='link'>$link</div>";
                }
            }
            echo '</div>';
        ?>
    </div>
</body>
</html>