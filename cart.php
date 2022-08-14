<?php
// Add an item to the cart
function add_item($key, $quantity) {
    //global $products;
    if ($quantity < 1) return;

    // If item already exists in cart, update quantity
    if (isset($_SESSION['cart'][$key])) {
        $quantity += $_SESSION['cart'][$key]['qty'];
        update_item($key, $quantity);
        return;
    }

    // Add item
    $cost = 0; //look up cost from database
    $db = new PDO('mysql:host=localhost;dbname=parlaurdatabase', 'parlaur', 'parlaurpass');
    $statement = $db->prepare("SELECT * FROM products WHERE productID = :key");
    $statement->bindValue(':key', $key);
    $statement->execute();
    $productRow = $statement->fetch();
    $statement->closeCursor();
    if (count ($productRow) != 0) {
        $cost = $productRow['productPrice'];
    }

    $total = $cost * $quantity;
    $item = array(
        'name' => $productRow['productDescr'],
        'cost' => $cost,
        'qty'  => $quantity,
        'total' => $total
    );
    $_SESSION['cart'][$key] = $item;
}

// Update an item in the cart
function update_item($key, $quantity) {
    $quantity = (int) $quantity;
    if (isset($_SESSION['cart'][$key])) {
        if ($quantity <= 0) {
            unset($_SESSION['cart'][$key]);
        } else {
            $_SESSION['cart'][$key]['qty'] = $quantity;
            $total = $_SESSION['cart'][$key]['cost'] *
                     $_SESSION['cart'][$key]['qty'];
            $_SESSION['cart'][$key]['total'] = $total;
        }
    }
}

// Get cart subtotal
function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}

// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

// Create a cart array if needed
if (empty($_SESSION['cart'])) { $_SESSION['cart'] = array(); }

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_add_item';
    }
}

// Add or update cart as needed
switch($action) {
    case 'show_add_item':
        $productID = filter_input(INPUT_GET, 'product');
        include('add_item_view.php');
        break;
    case 'add':
        $productID = filter_input(INPUT_POST, 'productID');
        $item_qty = filter_input(INPUT_POST, 'itemqty');
        add_item($productID, $item_qty);
        include('cart_view.php');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['cart'][$key]['qty'] != $qty) {
                update_item($key, $qty);
            }
        }
        include('cart_view.php');
        break;
    case 'show_cart':
        include('cart_view.php');
        break;
    case 'empty_cart':
        unset($_SESSION['cart']);
        include('cart_view.php');
        break;
}
?>