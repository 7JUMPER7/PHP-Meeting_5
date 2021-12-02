<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link href="../styles.css" rel="stylesheet">
</head>
<body>
    <?php
        include_once('./script.php');
        addPath($_SERVER['PHP_SELF']);
    ?>
    
    <form action="./page2.php" method="POST">
        <label for="firstname">
            <span>Firstname:</span>
            <input type="text" name="firstname" required>
        </label>
        <input type="submit" value="Next">
    </form>
</body>
</html>