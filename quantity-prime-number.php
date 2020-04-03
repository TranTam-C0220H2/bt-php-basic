<html>
<head>
    <title>Quantity Prime Number</title>
</head>
<body>
<form method="get">
    <label>Nhap so: <input type="number" name="choiceNumber1"></label><br>
    <input type="submit" value="Search Prime Number">
</form>
<?php
function searchPrimeNumber($number)
{
    if ($number < 2) {
        return false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

$choiceNumber = $_GET['choiceNumber1'];
$number = 2;
$count = 0;
while ($number < PHP_INT_MAX) {
    if (searchPrimeNumber($number)) {
        echo $number.' ';
        $count++;
    }
    $number++;
    if ($count == $choiceNumber) {
        break;
    }
}
?>
</body>
</html>
