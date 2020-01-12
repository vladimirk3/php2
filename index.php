<?php
//Задание 1
//Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
$a = rand(-10, 10);
$b = rand(-10, 10);
$c = 0;
if ($a >= 0 && $b >=0) {
    //echo $a-$b;
    $c=$a-$b;
} elseif ($a < 0 && $b <0){
    //echo $a*$b;
    $c=$a*$b;
} else {
    //echo $a+$b;
    $c=$a+$b;
}
?>
<h2>Задание 1</h2>
<p>Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:</p>
<ul>
    <li>если $a и $b положительные, вывести их разность;</li>
    <li>если $а и $b отрицательные, вывести их произведение;</li>
    <li>если $а и $b разных знаков, вывести их сумму;</li>
</ul>

<p>a = <?=$a?></p>
<p>b = <?=$b?></p>
<p>Результат: <?=$c?></p>

<?php
//Задание 2
//Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
?>
<h2>Задание 2</h2>
<p>Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</p>

<?php
$d = rand(13,15);

switch (True){
case ($d<=0): echo "0 ";
case ($d<=1): echo "1 ";
case ($d<=2): echo "2 ";
case ($d<=3): echo "3 ";
case ($d<=4): echo "4 ";
case ($d<=5): echo "5 ";
case ($d<=6): echo "6 ";
case ($d<=7): echo "7 ";
case ($d<=8): echo "8 ";
case ($d<=9): echo "9 ";
case ($d<=10): echo "10 ";
case ($d<=11): echo "11 ";
case ($d<=12): echo "12 ";
case ($d<=13): echo "13 ";
case ($d<=14): echo "14 ";
case ($d<=15): echo "15 ";
}
?>
<p>Число $a = <?=$d?></p>

<?php
//Задание 3
//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return
?>
<h2>Задание 3</h2>
<p>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return</p>
<p>см php файл</p>
<?php
function sum ($e = 0, $f = 0) {
    return $e+$f;
}
function deduct ($e = 0, $f = 0) {
    return $e-$f;
}
function multi ($e = 0, $f = 0) {
    return $e*$f;
}
function div ($e = 0, $f = 0)
{
    if (!$f) {
        echo "Деление на ноль";
        return false;
    } else {
        return $e / $f;
    }
}
?>
<!--Задание 3
Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch)
-->
<h2>Задание 4</h2>
<p>Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 –
        значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции
        выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение
        (использовать switch).</p>

<?php
    function mathOperation($arg1 = 0, $arg2 = 0, $operation = '+')
    {
        switch ($operation) {
            case ('+'):
                return sum($arg1, $arg2);
                break;
            case ('-'):
                return deduct($arg1, $arg2);
                break;
            case ('*'):
                return multi($arg1, $arg2);
                break;
            case ('/'):
                return div($arg1, $arg2);
                break;
        }
    }
?>

<p>a = <?=$a?></p>
<p>b = <?=$b?></p>
<p>Результат сложения: <?=mathOperation($a, $b, "+")?></p>
<p>Результат сложения: <?=mathOperation($a, $b, "-")?></p>
<p>Результат сложения: <?=mathOperation($a, $b, "*")?></p>
<p>Результат сложения: <?=mathOperation($a, $b, "/")?></p>

<h2>Задание 6</h2>
<p>С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>

<?php
    function isInteger($n) {
        return ($n ^ 0) == $n;
    }

    function power($val, $pow) {
        if (isInteger($pow)) {
            if ($pow >=0) {
                if ($pow >= 1)
                    return $val*power($val, $pow - 1);
                return 1;
            } else {
                if ($pow <= -1)
                    return 1/$val*power($val, $pow + 1);
                return 1;
            }
        }
    }

    $x = rand(0, 4);
    $y = rand(0, -2);
?>
<p>Число: <?=$x?></p>
<p>Степень:  <?=$y?></p>
<p>Результат возведения в степень: <?=power($x, $y)?></p>

<h2>Задание 7</h2>
<p>Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:</p>
<?php
    function hsuffix($harg) {
        //можно так в лоб решить задачу
        if ($harg == 0 || ($harg >= 5 && $harg <= 20)) {
            return "часов";
        } elseif ($harg == 1 || $harg == 1) {
            return "час";
        } elseif ($harg >= 2 && $harg <= 3) {
            return "часа";
        } else {
            return "";
        }
    }

    function msuffix($marg) {
        //можно похитрей
        if (($marg >= 0 && $marg<=10) || ($marg >= 20 && $marg<=60)) {
            if ($marg % 10 == 0 || ($marg % 10 >= 5 && $marg % 10 <= 9)) {
                return "минут";
            } elseif ($marg % 10 == 1) {
                return "минута";
            } elseif ($marg % 10 >= 2 && $marg % 10 <= 4) {
                return "минуты";
            }
        } elseif ($marg >= 0 && $marg<=10) {
            return "минут";
        } else {
            return "";
        }
    }

    function time_custom() {
        $hour = date("G");
        $minute = date("i");
        $str_time = $hour.' '.hsuffix($hour).' '.$minute.' '.msuffix($minute);
        return $str_time;
    }
    echo time_custom();
?>