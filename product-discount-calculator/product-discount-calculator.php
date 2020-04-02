<html>
<head>
    <title>Product Discount Calculator</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $isProduct = $_POST['myProduct'];
 $isPrice = $_POST['myPrice'];
 $isDiscountPercent = $_POST['myDiscount'];
 $isDiscountAmount = $isPrice * $isDiscountPercent * 0.01;
 $isDiscountPrice = $isPrice - $isDiscountAmount;
}
echo '
<div>
    <h2>Product Discount Calculator</h2>
    <table>
        <tr>
            <td>Product Description:</td>
            <td>' . $isProduct . '</td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td>' . $isPrice . '</td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td>' . $isDiscountPercent . '</td>
        </tr>
        <tr>
            <td>Discount Amount:</td>
            <td>' . $isDiscountAmount . '</td>
        </tr>
        <tr>
            <td>Discount Price:</td>
            <td>' . $isDiscountPrice . '</td>
        </tr>
    </table>
</div>'
?>
</body>
</html>

