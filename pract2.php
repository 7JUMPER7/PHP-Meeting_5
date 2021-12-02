<!-- <?php
echo "<div>Страница 2</div>";
$num1 = $_COOKIE['num1'];
echo "<div>$num1</div>";
?> -->


<?php
    session_start();
    // session_start();
    // if(!isset($_SESSION['num1'])) {
    //     $_SESSION['num1'] = 100;
    // }
    echo "<div>".$_SESSION['num1']."</div>";
?>
    
<a href="pract.php">Страница 1</a>