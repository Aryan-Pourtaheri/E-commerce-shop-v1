document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('#add-to-cart');
    const cartItems = [];

    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productName = button.closest('.product-info').querySelector('h2').innerText;
            const productPrice = button.closest('.product-info').querySelector('.price').innerText;
            const size = document.querySelector('#size').value;

            // اضافه کردن محصول به سبد خرید
            const product = {
                name: productName,
                price: productPrice,
                size: size,
                quantity: 1
            };
            cartItems.push(product);
            alert(`${productName} به سبد خرید اضافه شد!`);
        });
    });

    // محاسبه مجموع سبد خرید و تعداد محصولات
    const updateCartSummary = () => {
        let totalPrice = 0;
        cartItems.forEach(item => {
            const price = parseFloat(item.price.replace(' تومان', '').replace(',', ''));
            totalPrice += price * item.quantity;
        });
        document.querySelector('.total p').innerText = `مجموع: ${totalPrice.toLocaleString()} تومان`;
    };

    // آپدیت مجموع سبد خرید
    updateCartSummary();
});
