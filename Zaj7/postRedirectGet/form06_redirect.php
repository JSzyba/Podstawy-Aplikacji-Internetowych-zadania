<?php session_start();
if (!isset($_SESSION['success'])) {
    $_SESSION['success'] = "idle";
}

if (
    isset($_POST['addEmployee']) &&
    is_numeric($_POST['id']) &&
    is_string($_POST['nazwisko'])
) {
    mysqli_report(MYSQLI_REPORT_OFF);
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    $isSuccess = true;
    $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("is", $_POST['id'], $_POST['nazwisko']);
    $result = $stmt->execute();
    if (!$result) {
        $isSuccess = false;
    }
    $stmt->close();
    if ($isSuccess) {
        $_SESSION['success'] = "success";
        header("Location: form06_get.php");
    }
    else {
        $_SESSION['success'] = "failure";
        header("Location: form06_post.php");
    }
}
else {
    header("Location: form06_post.php");
}