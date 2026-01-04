<?php
include 'db.php';

// گرفتن تمامی محصولات از پایگاه داده
$sql = "SELECT * FROM products";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="صفحه محصولات">
    <title>محصولات فروشگاه</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Header (ناوبری) -->
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

    <!-- بخش محصولات -->
    <section class="all-products">
        <h2>تمام محصولات</h2>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="assets/images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                    <p><?php echo substr(htmlspecialchars($product['description']), 0, 100); ?>...</p>
                    <span class="price"><?php echo number_format($product['price'], 0, ',', ','); ?> تومان</span>
                    <a href="product-detail.php?id=<?php echo $product['id']; ?>">مشاهده جزئیات</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 فروشگاه آنلاین. تمامی حقوق محفوظ است.</p>
    </footer>
</body>
</html>
