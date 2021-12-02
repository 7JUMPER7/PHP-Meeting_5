<!-- <?php
$num1 = 100;
setcookie("num1", $num1, time() + 60*2, '/', '', false);
echo "<div>Страница 1</div>";
echo "<div>$num1</div>";
?> -->



<?php
    session_start();
    if(!isset($_SESSION['num1'])) {
        $_SESSION['num1'] = 100;
    }
    echo "<div>".$_SESSION['num1']."</div>";
?>
    
<a href="pract2.php">Страница 2</a>