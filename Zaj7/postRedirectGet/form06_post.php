<?php session_start(); 
if (!isset($_SESSION['success'])) {
    $_SESSION['success'] = "idle";
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj pracownika</title>
</head>

<body>
    <form action="form06_redirect.php" method="POST">
        <fieldset>
            <legend>Dodaj nowego pracownika</legend>
            <label for="id">Id pracownika:</label>
            <input type="number" name="id">
            <br />
            <br />
            <label for="nazwisko">Nazwisko pracownika: </label>
            <input type="text" name="nazwisko">
            <br />
            <input type="submit" value="Zatwierdź" name="addEmployee">
        </fieldset>
    </form>

    <br />
    <a href="form06_get.php">Lista pracowników</a>

    <br />
    <br />
    <p style="color: red;">
    <?php
    if ($_SESSION['success'] == "failure") {
        echo "Nie udało się dodać pracownika! Podano błędne dane!";
        $_SESSION['success'] = "idle";
    }
    ?>
    </p>
</body>

</html>