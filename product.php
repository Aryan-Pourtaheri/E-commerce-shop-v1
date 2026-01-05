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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <!-- Header (ناوبری) -->
    <?php include("./components/header/header.php");?>
 
    <form action="">
        <div class="search-bar">
            <input type="text" name="search" placeholder="جستجوی محصولات..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button type="submit">جستجو</button>
        </div>
    </form>
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
    <?php include("./components/footer/footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
