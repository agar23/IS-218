<?php

        $Product = $_POST['product_description'];
        $Price = $_POST['list_price'];
        $Discount = $_POST['discount_percent'];

        $FProduct = filter_input(INPUT_POST, 'product_description');
        $FPrice = filter_input(INPUT_POST, 'list_price');
        $FDiscount = filter_input(INPUT_POST, 'discount_percent');

        $Discount1 = $FPrice * $FDiscount * .01;
        $Discount_Price = $FPrice - $Discount1;

        $MPrice = money_format('$%i', $FPrice);
        $MDiscount_Price = money_format('$%i', $Discount_Price);
        $MDiscount = money_format('$%i', $Discount1);
        $Format_FDiscount = $FDiscount."%";

        $FProduct_Escaped = htmlspecialchars($FProduct);
        $MPrice_Escaped = htmlspecialchars($MPrice);
        $Format_FDiscount_Escaped = htmlspecialchars($Format_FDiscount);
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $FProduct_Escaped; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $MPrice_Escaped; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $Format_FDiscount_Escaped; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $MDiscount; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $MDiscount_Price; ?></span><br>
    </main>
</body>
</html>
