<?php
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Ошибка: деление на ноль!";
        }
    }
}

// Пример использования калькулятора
$calculator = new Calculator();

$number1 = 10;
$number2 = 5;

// Сложение
echo "Сложение: " . $calculator->add($number1, $number2) . "\n";

// Вычитание
echo "Вычитание: " . $calculator->subtract($number1, $number2) . "\n";

// Умножение
echo "Умножение: " . $calculator->multiply($number1, $number2) . "\n";

// Деление
echo "Деление: " . $calculator->divide($number1, $number2) . "\n";
?>
