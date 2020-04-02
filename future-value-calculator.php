<html>
<head>
    <title>Future Value Calculator</title>
</head>
<body>
<form method="post">
    <label>Inventment Amount: <input type="text" name="isMoney" placeholder="Luong tien dau tu ban dau"></label>
    <label>Yearly Interest Rate: <input type="text" name="isInterestRate" placeholder="Lai suat nam"></label>
    <label>Number of Years: <input type="text" name="isYear" placeholder="So nam dau tu"></label>
    <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myMoney = $_POST['isMoney'];
    $myInterestRate = $_POST['isInterestRate'];
    $myYear = $_POST['isYear'];
    $isFuture[0] = $myMoney + $myMoney * $myInterestRate;
    for ($i = 1; $i < 1000; $i++) {
        $isFuture[$i] = $isFuture[$i - 1] + $isFuture[$i - 1] * $myInterestRate;
    }
    echo $isFuture[$myYear - 1];
}
?>
</body>
</html>
