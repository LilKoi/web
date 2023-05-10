<?php
session_start();
if (isset($_POST["calc"])) {
    switch ($_POST["operator"]) {
        case "-":
            $result =  $_POST["arg_1"] - $_POST["arg_2"];
            break;
        case "+":
            $result = $_POST["arg_1"] + $_POST["arg_2"];
            break;
        case "*":
            $result = $_POST["arg_1"] * $_POST["arg_2"];
            break;
        case "/":
            $result = $_POST["arg_1"] / $_POST["arg_2"];
            break;
        default:
            $result = "такого оператора не существует";
            break;
    }
    echo $result;
}

if (isset($_POST["find_name"])) {
    $file = fopen("laba2_new.txt", "r");
    $result = [];
    while (!feof($file)) {
        $line = trim(fgets($file));
        if (str_contains(mb_strtolower($line), mb_strtolower(trim($_POST["name"])))) {
            $result[] = $line;
        }
    }
    fclose($file);
    echo json_encode($result);
}

if (isset($_POST["auth"])) {
    $login = "admin";
    $password = "qwerty_lol";
    if ($_POST["login"] == $login and $_POST["password"] == $password) {
        $_SESSION["user"] = true;
        header("Location: authPage.php");
        exit;
    }
}
