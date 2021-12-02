<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    <?php
        include_once('./script.php');
        addPath($_SERVER['PHP_SELF']);
        if(isset($_POST['firstname'])) {
            $_SESSION['firstname'] = $_POST['firstname'];
        }
    ?>

    <form action="./page3.php" method="POST">
        <label for="lastname">
            <span>Lastname:</span>
            <input type="text" name="lastname" required>
        </label>
        <input type="submit" value="Next">
    </form>
</body>
</html>