<?php

echo "<h1>Задание 1</h1>";
$arr = [[], [], []];
for ($i = 1; $i <= 100; $i++) {
    array_push($arr[0], $i);
    echo $i . " ";
}
var_dump($arr);
echo "<br><br><br>";
for ($i = 1; $i <= 100; $i++) {
    array_push($arr[1], pow($i, 2));
    echo pow($i, 2) . " ";
}

echo "<br><br><br>";
for ($i = 1; $i <= 100; $i++) {
    array_push($arr[2], -$i);
    echo -$i . " ";
}

?>
<h1>Задание 2</h1>
<table border="1px">
    <?php for ($i = 0; $i < 100; $i++) { ?>
        <tr align="center">
            <td><?php echo $arr[0][$i] ?></td>
            <td><?php echo $arr[1][$i] ?></td>
            <td><?php echo $arr[2][$i] ?></td>
        </tr>
    <?php } ?>
</table>

<h1>Задание 3 и 4</h1>

<?php
$number = 1;
$del = 3;
?>
<table border="1px">
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr align="center">
            <?php $count = 0; ?>
            <?php for ($j = 1; $j <= 10; $j++) { ?>
                <td <?php echo ($number % $del == 0 ? "class='color'" : ""); ?>><?php echo $number;
                    $number++;
                    $count++; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>

<?php echo "колличество чисел в строке $count <br>"; ?>
<?php echo "число, на которое делим без остатка $del "?>

<style>
    .color {
        background-color: red;
    }
</style>