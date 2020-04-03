<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<form method="get">
    <h3>Simple Calculator</h3>
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <label>
                    <td>First Operand:</td>
                    <td><input type="text" name="firstOperand"></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>Operator:</td>
                    <td><select name="operator">
                            <option>Addition</option>
                            <option>Subtraction</option>
                            <option>Multiplication</option>
                            <option>Division</option>
                        </select></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>Second Operand:</td>
                    <td><input type="text" name="secondOperand"></td>
                </label>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </fieldset>
</form>
<?php
$isFirstOperand = $_GET['firstOperand'];
$isSecondOperand = $_GET['secondOperand'];
$isOperator = $_GET['operator'];
        echo '<b>Result: </b>';
        switch ($isOperator) {
            case 'Addition':
                echo $isFirstOperand + $isSecondOperand;
                break;
            case 'Subtraction':
                echo $isFirstOperand - $isSecondOperand;
                break;
            case 'Division':
                echo $isFirstOperand / $isSecondOperand;
                break;
            case 'Multiplication':
                echo $isFirstOperand * $isSecondOperand;
                break;
        }
?>

</body>
</html>

