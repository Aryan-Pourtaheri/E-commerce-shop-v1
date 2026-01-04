<?php
session_start();
include 'db.php';

// بررسی وجود محصول در سبد خرید
if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // بررسی وجود محصول در پایگاه داده
    $sql = "SELECT * FROM products WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        // اضافه کردن محصول به سبد خرید
        $cart_item = [
            'product_id' => $product['id'],
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => $quantity,
            'total' => $product['price'] * $quantity
        ];

        $_SESSION['cart'][] = $cart_item;
        header('Location: cart.php');
    } else {
        echo "محصول یافت نشد.";
    }
}
?>
