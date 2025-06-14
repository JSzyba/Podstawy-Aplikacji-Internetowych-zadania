<?php session_start();
if (!isset($_SESSION['success'])) {
    $_SESSION['success'] = "idle";
}

$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p style="color: green">
        <?php
        if ($_SESSION['success'] == "success") {
            echo "Udało się dodać nowego pracownika!";
            $_SESSION['success'] = "idle";
        }
        ?>
    </p>
    <br />
    <a href="form06_post.php">Dodaj nowego pracownika</a>
    <br />
    <?php
    $sql = "SELECT * FROM pracownicy";
    $result = $link->query($sql);
    foreach ($result as $v) {
        echo $v["ID_PRAC"] . " " . $v["NAZWISKO"] . "<br/>";
    }
    $result->free();
    $link->close();
    ?>
</body>

</html>