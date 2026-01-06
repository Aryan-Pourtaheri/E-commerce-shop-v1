<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="فروشگاه آنلاین | خرید آسان و سریع">
    <title>فروشگاه آنلاین</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/components/footer/footer.css">
    <link rel="stylesheet" href="./components/header/header.css">

</head>
<body>

    <!-- Header -->
    <?php include("./components/header/header.php"); ?>

    <!-- HERO -->
    <section class="hero-section text-white d-flex align-items-center">
        <div class="container text-center">
            <h1 class="fw-bold mb-3">تجربه خرید آنلاین آسان و مطمئن</h1>
            <p class="lead mb-4">
                بهترین محصولات با قیمت مناسب، پشتیبانی واقعی و ارسال سریع
            </p>
            <a href="product.php" class="btn btn-warning btn-lg px-5">
                مشاهده محصولات
            </a>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="container my-5">
        <div class="row text-center g-4">

            <div class="col-md-4">
                <div class="feature-box p-4 h-100 shadow-sm">
                    <div class="fs-1 mb-3">🚚</div>
                    <h5 class="fw-bold">ارسال سریع</h5>
                    <p class="text-muted small">
                        ارسال سفارشات در کوتاه‌ترین زمان ممکن به سراسر کشور
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 h-100 shadow-sm">
                    <div class="fs-1 mb-3">💳</div>
                    <h5 class="fw-bold">پرداخت امن</h5>
                    <p class="text-muted small">
                        پرداخت آنلاین امن با درگاه‌های معتبر بانکی
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box p-4 h-100 shadow-sm">
                    <div class="fs-1 mb-3">⭐</div>
                    <h5 class="fw-bold">کیفیت تضمینی</h5>
                    <p class="text-muted small">
                        تضمین کیفیت تمام محصولات و پشتیبانی واقعی
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="fw-bold mb-3">چرا فروشگاه ما؟</h2>
                    <p class="text-muted">
                        ما با هدف ایجاد یک تجربه خرید ساده، سریع و امن فعالیت خود را آغاز کرده‌ایم.
                        تمرکز ما روی کیفیت محصولات، قیمت منصفانه و رضایت مشتری است.
                    </p>
                    <a href="about.php" class="btn btn-outline-primary">
                        بیشتر بدانید
                    </a>
                </div>

                <div class="col-md-6 text-center">
                    <img src="assets/images/about.png" class="img-fluid rounded" alt="About us">
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section text-white text-center py-5">
        <div class="container">
            <h2 class="fw-bold mb-3">آماده خرید هستید؟</h2>
            <p class="mb-4">همین حالا محصولات ما را ببینید</p>
            <a href="product.php" class="btn btn-light btn-lg px-5">
                ورود به فروشگاه
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include("./components/footer/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
