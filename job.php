<?php
// Функция для вычисления значения математической функции (например, квадратный корень)
function excelFunction($number) {
    // Здесь можно использовать любую математическую функцию
    return sqrt($number);
}

// Пример использования функции
$inputNumber = 25; // Замените это числом, которое вы хотите использовать в функции
$result = excelFunction($inputNumber);

// Вывод результата
echo "Результат функции для числа $inputNumber: $result\n";
?>
