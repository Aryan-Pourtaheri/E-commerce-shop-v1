<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="سبد خرید">
    <title>سبد خرید</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">خانه</a></li>
                <li><a href="product.php">محصولات</a></li>
                <li><a href="about.php">درباره ما</a></li>
                <li><a href="cart.php">سبد خرید</a></li>
            </ul>
        </nav>
    </header>

    <section class="cart">
        <h2>سبد خرید شما</h2>
        <table>
            <thead>
                <tr>
                    <th>محصول</th>
                    <th>تعداد</th>
                    <th>قیمت</th>
                    <th>مجموع</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_price = 0;
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        echo "<tr>
                            <td>{$item['name']}</td>
                            <td>{$item['quantity']}</td>
                            <td>{$item['price']} تومان</td>
                            <td>" . number_format($item['total'], 0, ',', ',') . " تومان</td>
                        </tr>";
                        $total_price += $item['total'];
                    }
                } else {
                    echo "<tr><td colspan='4'>سبد خرید شما خالی است.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="total">
            <p>مجموع: <?php echo number_format($total_price, 0, ',', ','); ?> تومان</p>
            <button>ثبت سفارش</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 فروشگاه آنلاین. تمامی حقوق محفوظ است.</p>
    </footer>
</body>
</html>
