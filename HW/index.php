<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    <?php
        if(isset($_POST['clrcookies'])) {
            var_dump($_POST['clrcookies']);
            unset($_POST['clrcookies']);
            unset($_COOKIE['visits']);
            setcookie('visits', null, -1);
            setcookie('lastvisit', null, -1);
            setcookie('firstname', null, -1);
        }

        if(!isset($_COOKIE['visits'])) {
            setcookie('visits', 1, time() + 3600);
        } else {
            setcookie('visits', ++$_COOKIE['visits'], time() + 3600);
        }
        setcookie('lastvisit', time(), time() + 3600);
        if(isset($_POST['firstname'])) {
            setcookie('firstname', $_POST['firstname'], time() + 3600);
        }
    ?>

    <div class="container">
        <h2><?php if(isset($_COOKIE['visits'])) echo "<div>Visits count: ".$_COOKIE['visits']."</div>" ?></h2>
        <h3><?php echo "<div>Last visit time: ".date("H:i:s", $_COOKIE['lastvisit'])."</div>" ?></h3>
        <h3><?php if(isset($_COOKIE['firstname'])) echo "<div>Name: ".$_COOKIE['firstname']."</div>"; ?></h3>
    </div>
    <form action="index.php" method="POST">
        <label for="firstname">Name:
            <input type="text" name="firstname">
        </label>
        <input type="submit" value="Set name">
    </form>
    <form action="index.php" method="POST">
        <input type="submit" value="Clear cookies" name="clrcookies">
    </form>
</body>
</html>