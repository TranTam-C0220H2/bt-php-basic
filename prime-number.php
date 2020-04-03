<html>
<head>
    <title>Prime Number</title>
</head>
<body>
<?php
echo 'Day so nguyen to trong khoang tu 1 den 100 la: ';
for ($yourNumber = 2; $yourNumber < 100; $yourNumber++) {
    $check = 1;
    for ($i = 2; $i <= sqrt($yourNumber); $i++) {
        if ($yourNumber % $i == 0) {
            $check = 0;
            break;
        }
    }
    if ($check == 1) {
        echo $yourNumber . ' ';
    }
}
?>
</body>
</html>

