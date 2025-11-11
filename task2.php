<?php

$expenses = [
    "Food" => 400,
    "Transport" => 250,
    "Entertainment" => 150,
];


array_push($expenses, 100); 
array_pop($expenses); 

$extraExpenses = [
    "Shopping" => 300,
    "Medical" => 200,
];
$mergedExpenses = array_merge($expenses, $extraExpenses);

$totalExpense = array_sum($mergedExpenses);

echo "<h3>Expenses List:</h3>";
print_r($mergedExpenses);
echo "<br><strong>Total Expense:</strong> $totalExpense<br><br>";


$expenseString = "100,200,300,400";
$expenseArray = explode(",", $expenseString);
$backToString = implode("-", $expenseArray);  

echo "<strong>Original String:</strong> $expenseString<br>";
echo "<strong>After explode:</strong> ";
print_r($expenseArray);
echo "<br><strong>After implode:</strong> $backToString<br><br>";


$category = "transport";
echo "<strong>Uppercase:</strong> " . strtoupper($category) . "<br>";
echo "<strong>String Length:</strong> " . strlen($category) . "<br>";
echo "<strong>Substring (first 4 chars):</strong> " . substr($category, 0, 4) . "<br>";
echo "<strong>Replace 'port' with 'ation':</strong> " . str_replace("port", "ation", $category) . "<br><br>";


$fileName = "expenses.txt";
$fileData = "Expenses Data:\n";

foreach ($mergedExpenses as $category => $amount) {
    $fileData .= "$category: $amount\n";
}

file_put_contents($fileName, $fileData); 
echo "<strong>File 'expenses.txt' created and data written successfully!</strong><br><br>";


$newExpense = "Internet: 120\n";
file_put_contents($fileName, $newExpense, FILE_APPEND); 

echo "<strong>New Expense Appended!</strong><br><br>";

echo "<h3>File Content:</h3>";
$fileContent = file_get_contents($fileName);
echo nl2br($fileContent);




?>
