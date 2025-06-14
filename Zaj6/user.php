<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
require_once("funkcje.php");
if($_SESSION["zalogowany"] == 1){
    $dane = $_SESSION["zalogowanyImie"];
    echo "Zalogowano: $dane";
}
else{
    header("Location: index.php");
}
?>

<br>
<form name = "formularz wyloguj" action="index.php" method="POST">
    <table>
    <tr>
    <input type="submit" name="Wyloguj" value="Wyloguj">
    </tr>
</form>
<br>
<a href="index.php">Link do strony logowania</a>
<?php
    if(isset($_POST["Prześlij"])){
        $currentDir = getcwd();
        $uploadDirectory = "/zdjeciaUzytkownikow/";
        $fileName = $_FILES['myfile']['name'];
        $fileSize = $_FILES['myfile']['size'];
        $fileTmpName = $_FILES['myfile']['tmp_name'];
        $fileType = $_FILES['myfile']['type'];
        if($fileName != "" and 
        ($fileType == 'image/png' or $fileType == 'image/jpg'
        )){
            $uploadPath = $currentDir . $uploadDirectory . $fileName;
            if(move_uploaded_file($fileTmpName,$uploadPath))
                echo "<br> Zdjęcie zostało przesłane!";
        }
    }
    if(file_exists(getcwd() . "/zdjeciaUzytkownikow/obraz.png")){
        echo '<br> <img src = "/zdjeciaUzytkownikow/obraz.png">';
    }
    else{
        echo "<br>Nie znaleziono pliku na serwerze!";
    }
?>
<br>
<form action="user.php" method="POST" enctype="multipart/form-data">
  Wyślij plik:
  <input type="file" name="myfile">
  <br>
  <input type="submit" value="Prześlij" name="Prześlij">
</form>
</body>

</html>