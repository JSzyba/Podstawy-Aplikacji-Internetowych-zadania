<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
<?php require("funkcje.php")?>
</head>
<body>
    <h1>
    Nasz system    
    </h1>
    <?php if(isSet($_POST["Wyloguj"])) {
        $_SESSION["zalogowany"]=0;
    } ?>
    <form name = "formularz" action="logowanie.php" method="POST">
    <table>
    <tr>
        <td>
            Login:
        </td>
    </tr>
    <tr>
    <td><input type="text" name="login" ></td>
    </tr>
    <tr>
        <td>
            Hasło:
        </td>
    </tr>
    <tr>
    <td><input type="password" name="hasło" ></td>
    </tr>
        <td>
        </td>
    <tr>
    <td><input type="submit" name="Zaloguj" value="Zaloguj"></td>
    </tr>
</table>
</form>
<br>
<form name = "cookies" action="cookie.php" method="GET">
    <table>
    <tr>
        <td>
        Czas:
        </td>
    </tr>
    <tr>
    <td><input type="number" name="czas" ></td>
    </tr>
        <td>
        </td>
    <tr>
    <td><input type="submit" name="utworzCookie" value="Utwórz Cookie"></td>
    </tr>
    </table>
</form>
<br>
    <?php if(isset($_COOKIE["ciacho"])){
        echo "CIASTKO AKTYWNE";
    }
    else{
        echo "BRAK AKTYWNYCH CIASTEK";
    }
    ?>
<br>
<a href="user.php">Link do zawartości</a>
</body>
</html>