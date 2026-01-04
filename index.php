<?php
include 'db.php';

// گرفتن محصولات ویژه از پایگاه داده (برای نمایش در لندینگ پیج)
$sql = "SELECT * FROM products LIMIT 4"; // گرفتن 4 محصول ویژه برای صفحه لندینگ
$stmt = $pdo->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="فروشگاه آنلاین">
    <title>فروشگاه آنلاین</title>
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

    <!-- بخش Hero -->
    <section class="hero">
        <h1>خوش آمدید به فروشگاه ما!</h1>
        <p>با محصولات با کیفیت و قیمت‌های مناسب.</p>
        <button><a href="product.php">مشاهده محصولات</a></button>
    </section>

    <!-- بخش محصولات ویژه -->
    <section class="featured-products">
        <h2>محصولات ویژه</h2>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="assets/images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                    <p><?php echo substr(htmlspecialchars($product['description']), 0, 100); ?>...</p>
                    <span class="price"><?php echo number_format($product['price'], 0, ',', ','); ?> تومان</span>
                    <a href="product.php?id=<?php echo $product['id']; ?>">مشاهده جزئیات</a>
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
