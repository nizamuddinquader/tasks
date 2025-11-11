<?php



define("APP_NAME", "Expense Tracker");
define("AUTHOR", "Nizamuddin Quader");


echo "App Name: " . APP_NAME . "<br>";
print("Author: " . AUTHOR . "<br>");
printf("Developed by %s<br><br>", AUTHOR);


$food = 450;
$transport = 300;
$others = 200;


$total = $food + $transport + $others;
$average = $total / 3;


if ($total > 1000) {
    echo "Budget Exceeded<br>";
} else {
    echo "Within Budget<br>";
}


$message = ($total > 1000) ? "High Spending" : "Normal Spending";
echo "Ternary Message: $message<br>";


switch (true) {
    case ($total <= 500):
        echo "Expense Range: Low<br>";
        break;
    case ($total <= 1000):
        echo "Expense Range: Medium<br>";
        break;
    default:
        echo "Expense Range: High<br>";
        break;
}


function calculateTotal($food, $transport, $others)
{
    return $food + $transport + $others;
}


function checkBudget($total)
{
    if ($total > 1000) {
        return "Budget Exceeded";
    } else {
        return "Within Budget";
    }
}


$totalExpense = calculateTotal($food, $transport, $others);
$result = checkBudget($totalExpense);

echo "<br>Total Expense : $totalExpense<br>";
echo "Budget Status : $result<br>";


?>
