<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    <?php
        include_once('./script.php');
        addPath($_SERVER['PHP_SELF']);
        if(isset($_POST['lastname'])) {
            $_SESSION['lastname'] = $_POST['lastname'];
        }
    ?>

    <form action="./page4.php" method="POST">
        <label for="age">
            <span>Age:</span>
            <input type="number" name="age" required>
        </label>
        <input type="submit" value="Next">
    </form>
</body>
</html>