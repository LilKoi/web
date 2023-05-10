<?php
$m = 10;
$n = 10;
$number = 1;

function is_simple($num)
{
    return gmp_prob_prime($num); // встроенная функция в php, нужно вкл в php.ini
}

?>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .is_simple {
        background-color: red;
    }
</style>

<table border="1px">
    <?php
    for ($i = 0; $i < $m; $i++) { ?>
        <tr>
            <?php for ($j = 0; $j < $n; $j++) { ?>
                <td class="<?php echo (is_simple($number) ? "is_simple" : "");  ?>"><?php echo $number;
                                                                                    $number++; ?></td>
            <?php } ?>
        </tr>
    <?php }
    ?>
</table>

<h1>задание 2</h1>
<?php
//задание два
$daysOfWeek = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
$months = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
$date = getdate();
$dayOfWeek = $daysOfWeek[$date['wday']];
$month = $months[$date['mon'] - 1];
echo 'Сегодня ' . $dayOfWeek . ', ' . $date['mday'] . ' ' . $month;
?>

<h1>Задание 3</h1>

<?php
function printDate($days)
{
    // Получаем текущую дату
    $currentDate = date('d-m-Y');

    // Получаем дату, отстоящую от текущей на заданное количество дней
    $futureDate = date('d-m-Y', strtotime("+$days days"));

    // Выводим текущую дату и дату через указанное количество дней на экран
    echo "Текущая дата: $currentDate <br>";
    echo "Дата через $days дней: $futureDate <br>";
}

// Вызываем функцию и передаем ей количество дней
printDate(40);
?>

<h1>Задание 4</h1>

<?php
function math($num1, $num2, $operator)
{
    switch ($operator) {
        case "-":
            return $num1 - $num2;
            break;
        case "+":
            return $num1 + $num2;
            break;
        case "*":
            return $num1 * $num2;
            break;
        case "/":
            return $num1 / $num2;
            break;
        default:
            return "такого оператора не существует";
            break;
    }
}
$a = 1;
$b = 5;
$znak = "/";
echo "$a $znak $b = " . math($a, $b, $znak);
?>
<h1>Задание 5</h1>
<?php
$file = fopen("laba2.txt", "r");
read($file);
echo "///" . "<br>";
$file = fopen("laba2.txt", "r");
read_2($file, "П");
echo "///" . "<br>";
$file = fopen("laba2.txt", "r");
read_2($file, "1");
function read($file)
{
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
}
function read_2($file, $symbol)
{
    if ($symbol == 1) {
        while (!feof($file)) {
            echo fgets($file) . "<br>";
        }
        fclose($file);
    } else {
        while (!feof($file)) {
            $line = fgets($file);
            if (mb_substr($line, 0, 1) == $symbol) {
                echo $line . "<br>";
            }
        }
        fclose($file);
    }
}
echo "<h1>Задание 6</h1>";
function read_3($file, $symbol)
{
    if ($symbol == 1) {
        while (!feof($file)) {
            echo ucfirst(fgets($file)) . "<br>";
        }
        fclose($file);
    } else {
        while (!feof($file)) {
            $line = fgets($file);
            if (mb_substr($line, 0, 1) == $symbol) {
                echo  mb_convert_case(ucfirst($line), MB_CASE_TITLE, "UTF-8") . "<br>";
                //echo $line;
            }
        }
        fclose($file);
    }
}

$file = fopen("laba2.txt", "r");
read_3($file, "и");
?>
<h1>Задание 7</h1>

<?php
$file = fopen("laba2_new.txt", "w");
$array = [
    "Иванов" => [
        "name" => "Сергей",
        "surname" => "Иванович",
        "lastname" => "Иванов",
        "age" => 22
    ],
    "Петров" => [
        "name" => "Алексей",
        "surname" => "Владимирович",
        "lastname" => "Петров",
        "age" => 32
    ],
    "Сидоров" => [
        "name" => "Иван",
        "surname" => "Сергеевич",
        "lastname" => "Сидоров",
        "age" => 42
    ],
    "Павлов" => [
        "name" => "Константин",
        "surname" => "Петрович",
        "lastname" => "Павлов",
        "age" => 22
    ],
];
print_r($array);
foreach ($array as $index => $people) {
    fwrite($file, join(" ", $people) . "\n");
}
?>