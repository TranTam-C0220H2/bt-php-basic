<html>
<head>
    <title>Convert Currency</title>
</head>
<body>
<form method="get">
    <label>USD: <input type="number" name="isUSD"> USD</label><br>
    <label>Rate: <input type="number" name="isRate"> VND/USD</label><br>
    <input type="submit" value="Convert">
</form>
<?php
    $yourUSD = $_GET['isUSD'];
    $myRate = $_GET['isRate'];
    $result = $yourUSD*$myRate;
    echo $yourUSD.' USD = '.$result.' VND';
?>
</body>
</html>
