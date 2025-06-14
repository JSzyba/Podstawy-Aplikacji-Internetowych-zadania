<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
<?php require("funkcje.php")?>
</head>
<body>
    <?php if(isSet($_POST["Zaloguj"])) {
        if((test_input($_POST["login"])==$osoba1->login and test_input($_POST["hasło"])==$osoba1->haslo) or (test_input($_POST["login"])==$osoba2->login and test_input($_POST["hasło"])==$osoba2->haslo)){
            if(test_input($_POST["login"])==$osoba1->login){
                $_SESSION["zalogowanyImie"]=$osoba1->imieNazwisko;
            }
        else{
            $_SESSION["zalogowanyImie"]=$osoba2->imieNazwisko;
        }
        $_SESSION["zalogowany"]=1;
        header("Location: user.php");
        }
        else{
            header("Location: index.php");
        }
    } ?>
</form>
</body>
</html>