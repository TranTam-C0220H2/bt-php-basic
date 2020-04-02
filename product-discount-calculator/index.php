<html>
<head>
    <title>Product Discount Calculator</title>
</head>
<body>
<form action="product-discount-calculator.php" method="post">
    <fieldset>
        <h2>Product Discount Calculator</h2>
        <table>
            <tr>
                <td><label>Product Description:</td>
                <td><input type="text" name="myProduct" placeholder="Mô tả của sản phẩm"></td>
                </label>
            </tr>
            <tr>
                <td><label>List Price:</td>
                <td><input type="text" name="myPrice" placeholder="Giá niêm yết của sản phẩm"></td>
                </label>
            </tr>
            <tr>
                <td><label>Discount Percent:</td>
                <td><input type="text" name="myDiscount" placeholder="Tỷ lệ chiết khấu"> (%)</td>
                </label>
            </tr>
            <tr>
                <td><input type="submit" value="Calculate Discount "></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>

