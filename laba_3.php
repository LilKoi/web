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
}

if (isset($_POST["calc_2"])) {
    $result_2 = $_POST["rub"] / $_POST["val"];
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

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<form action="laba_3.php" method="POST" class="w-25 border border-black">
    <label class="form-label">Аргумент 1</label>
    <input name="calc" type="hidden">
    <input required name="arg_1" class="form-control">
    <label class="form-label">Оператор</label>
    <select required name="operator" class="form-control">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <label class="form-label">Аргумент 2</label>
    <input required name="arg_2" class="form-control">
    <button class="btn btn-primary">Посчитать</button>
</form>
<?php
if (isset($_POST["calc"])) {
    echo "Результат $result";
}
?>
<form action="laba_3.php" method="POST" class="w-25 mt-5 border  border-black">
    <label class="form-label fw-bold">Исходная валюта</label>
    <input required name="calc_2" type="hidden">
    <select required name="val">
        <option value="90">Евро</option>
        <option value="80">Доллар</option>
    </select>
    <input name="rub" class="form-control">
    <button class="btn btn-primary">Посчитать</button>

</form>

<?php
if (isset($_POST["calc_2"])) {
    echo "Результат $result_2";
}
?>

<form action="laba_3.php" method="POST" class="w-25 mt-5 border  border-black">
    <input type="hidden" name="auth">
    <label class="form-label">Логин</label>
    <input class="form-control" name="login" placeholder="login">
    <label class="form-label">Пароль</label>
    <input class="form-control" name="password" placeholder="password" type="password">
    <button class="btn btn-primary">Автризоваться</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>