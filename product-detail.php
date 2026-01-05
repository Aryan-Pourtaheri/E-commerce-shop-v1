<?php
include 'db.php';

// گرفتن جزئیات محصول از پایگاه داده بر اساس ID
$product_id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $product_id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="جزئیات محصول">
    <title>جزئیات محصول - <?php echo htmlspecialchars($product['name']); ?></title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <!-- Header (ناوبری) -->
    <?php include("./components/header/header.php");?>



    <!-- بخش جزئیات محصول -->
    <section class="product-detail">
        <div class="product-images">
            <img src="assets/images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="main-image">
        </div>
        <div class="product-info">
            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
            <p class="price"><?php echo number_format($product['price'], 0, ',', ','); ?> تومان</p>
            <p class="description"><?php echo nl2br(htmlspecialchars($product['description'])); ?></p>

            <!-- انتخاب تعداد -->
            <div class="quantity">
                <label for="quantity">تعداد:</label>
                <input type="number" id="quantity" value="1" min="1">
            </div>

            <!-- افزودن به سبد خرید -->
            <button class="add-to-cart">افزودن به سبد خرید</button>

            <!-- بخش نظرات مشتریان -->
            <div class="reviews">
                <h3>نظرات کاربران</h3>
                <div class="review-item">
                    <p><strong>Ali</strong>: این محصول خیلی عالیه!</p>
                </div>
                <div class="review-item">
                    <p><strong>Reza</strong>: قیمت مناسب و کیفیت خوب.</p>
                </div>
                <button class="view-all-reviews">مشاهده تمامی نظرات</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include("./components/footer/footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
  