<!DOCTYPE html>
<html>
<head>
    <title>ParLaur Beauty</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <header>
        <h1>ParLaur Beauty</h1>
    </header>
    <main>
        <h1>Add Item</h1>
        <form action="cart.php" method="post">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="productID" value=<?php echo $productID; ?>>

            <label>Item:</label>
            <?php echo $productID; ?>
            <br>

            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Item">
        </form>
        <p><a href="cart.php?action=show_cart">View Cart</a></p>    
    </main>
</body>
</html>