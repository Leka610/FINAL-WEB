<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>L&D Clothing</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    <div>
        <?php include('sidebar.html');?>
    </div>

    <header>
        <div class="nav container">
            <a href="#" class="logo">L&D Clothing</a>
            <i class='bx bxs-cart' id="cart-icon"></i>
            <div class="cart">
                <h2 class="cart-title">Your Cart</h2>
                <div class="cart-content">

                </div>
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$0</div>
                </div>
                <button type="button" class="btn-buy">Buy Now</button>
                <i class='bx bx-x' id="close-cart"></i>
            </div>
        </div>  
    </header>

    <section class="shop container">
        <h2 class="section-title">Shop Products</h2>
        <div class="shop-content">

            <div class="product-box">
                <img src="product1.jpg" alt="" class="product-img">
                <h2 class="product-title">Hoodie Black</h2>
                <span class="price">$40</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product2.jpg" alt="" class="product-img">
                <h2 class="product-title">Hoodie Navy</h2>
                <span class="price">$45</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product3.jpg" alt="" class="product-img">
                <h2 class="product-title">Hoodie Gray</h2>
                <span class="price">$35</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product4.jpg" alt="" class="product-img">
                <h2 class="product-title">Jordan 1s - Blue</h2>
                <span class="price">$80</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product5.jpg" alt="" class="product-img">
                <h2 class="product-title">Air Force 1</h2>
                <span class="price">$75</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product6.jpg" alt="" class="product-img">
                <h2 class="product-title">Jordan 4s - Black</h2>
                <span class="price">$120</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product7.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product8.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$15</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h2 class="section-title">New Arrivals</h2>
        <div class="shop-content">
            <div class="product-box">
                <img src="product1.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product2.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product3.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product4.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product5.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product6.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product7.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="product8.jpg" alt="" class="product-img">
                <h2 class="product-title">Socks</h2>
                <span class="price">$10</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>
        </div>
    </section>

    <script src="shop.js"></script>
</body>
</html>
