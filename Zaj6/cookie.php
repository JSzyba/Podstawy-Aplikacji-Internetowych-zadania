<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
    <?php if(isset($_GET["utworzCookie"])){
        if($_GET["czas"] != null){
            if(setcookie("ciacho", "val", time() + $_GET["czas"], "/"))
                echo "Ciastko zostało zapisane!<br>";
        }
    }
    ?>
    <a href="index.php">Wstecz</a>
</body>
</html>