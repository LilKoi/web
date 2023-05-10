<?php

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



?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<form action="laba_3.php" method="POST" class="w-25">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>