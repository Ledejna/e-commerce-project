<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product -</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/Product.css">
</head>

<body>
    <?php require './includes/nav.php' ?>

    <div class="products-page">

        <?php
        $db = mysqli_connect("localhost", "root", "", "clothesdb");
        $sqlMEN = "SELECT * FROM add_product where category like 'Men'";
        $sqlWOMEN = "SELECT * FROM add_product where category like 'Women'";
        $sqlSHOES = "SELECT * FROM add_product where category like 'Shoes'";

        $resultMen = mysqli_query($db, $sqlMEN);
        $resultWomen = mysqli_query($db, $sqlWOMEN);
        $resultShoes = mysqli_query($db, $sqlSHOES);

        echo "<section class='product'>";
        echo " <h2 class='product-category'> Men  </h2>";
        echo " <button class='pre-btn'><img src='img/arrow.png'></button>";
        echo " <button class='nxt-btn'><img src='img/arrow.png'></button>";
        echo " <div class='product-container'>";

        // array  = ()
        while ($rowM = mysqli_fetch_array($resultMen)) {
            echo "<div class='product-card'>";
            echo "<div class='product-image'>";
            echo "<span class='discount-tag'>50% off</span>";
            echo "<img src='img/" . $rowM['Image'] . "' class='product-thumb' >";
            echo "</div>";
            echo "<div class='product-info'>";
            echo "<h2 class='product-brand'>" . $rowM['title'] . "</h2>";
            echo "<p class='product-short-des'>" . $rowM['Text'] . "</p>";
            echo "<span class='price'>" . $rowM['discount'] . "$</span><span class='actual-price'>" . $rowM['price'] . "$</span>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</section>";

        echo "<section class='product'>";
        echo " <h2 class='product-category'>Women</h2>";
        echo " <button class='pre-btn'><img src='img/arrow.png'></button>";
        echo " <button class='nxt-btn'><img src='img/arrow.png'></button>";
        echo " <div class='product-container'>";
        while ($rowW = mysqli_fetch_array($resultWomen)) {
            echo "<div class='product-card'>";
            echo "<div class='product-image'>";
            echo "<span class='discount-tag'>50% off</span>";
            echo "<img src='img/" . $rowW['Image'] . "' class='product-thumb' >";
            echo "</div>";
            echo "<div class='product-info'>";
            echo "<h2 class='product-brand'>" . $rowW['title'] . "</h2>";
            echo "<p class='product-short-des'>" . $rowW['Text'] . "</p>";
            echo "<span class='price'>" . $rowW['discount'] . "$</span><span class='actual-price'>" . $rowW['price'] . "$</span>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</section>";

        echo "<section class='product'>";
        echo " <h2 class='product-category'>Shoes</h2>";
        echo " <button class='pre-btn'><img src='img/arrow.png'></button>";
        echo " <button class='nxt-btn'><img src='img/arrow.png'></button>";
        echo " <div class='product-container'>";
        while ($rowS = mysqli_fetch_array($resultShoes)) {
            echo "<div class='product-card'>";
            echo "<div class='product-image'>";
            echo "<span class='discount-tag'>50% off</span>";
            echo "<img src='img/" . $rowS['Image'] . "' class='product-thumb' >";
            echo "</div>";
            echo "<div class='product-info'>";
            echo "<h2 class='product-brand'>" . $rowS['title'] . "</h2>";
            echo "<p class='product-short-des'>" . $rowS['Text'] . "</p>";
            echo "<span class='price'>" . $rowS['discount'] . "$</span><span class='actual-price'>" . $rowS['price'] . "$</span>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</section>";
        // while ($row = mysqli_fetch_array($result)) {
        //     if ($row['category'] == 'Women') {




        //         // while ($row = mysqli_fetch_array($result)) {
        //         //     if ($row['category'] == 'Man'){
        //         echo "<div class='product-card'>";
        //         echo "<div class='product-image'>";
        //         echo "<span class='discount-tag'>50% off</span>";
        //         echo "<img src='img/" . $row['Image'] . "' class='product-thumb' >";
        //         echo "</div>";
        //         echo "<div class='product-info'>";
        //         echo "<h2 class='product-brand'>" . $row['title'] . "</h2>";
        //         echo "<p class='product-short-des'>" . $row['Text'] . "</p>";
        //         echo "<span class='price'>" . $row['discount'] . "$</span><span class='actual-price'>" . $row['price'] . "$</span>";
        //         echo "</div>";
        //     }
        // }
        // while ($row = mysqli_fetch_array($result)) {
        //     if ($row['category'] == 'Shoes') {




        //         // while ($row = mysqli_fetch_array($result)) {
        //         //     if ($row['category'] == 'Man'){
        //         echo "<div class='product-card'>";
        //         echo "<div class='product-image'>";
        //         echo "<span class='discount-tag'>50% off</span>";
        //         echo "<img src='img/" . $row['Image'] . "' class='product-thumb' >";
        //         echo "</div>";
        //         echo "<div class='product-info'>";
        //         echo "<h2 class='product-brand'>" . $row['title'] . "</h2>";
        //         echo "<p class='product-short-des'>" . $row['Text'] . "</p>";
        //         echo "<span class='price'>" . $row['discount'] . "$</span><span class='actual-price'>" . $row['price'] . "$</span>";
        //         echo "</div>";
        //     }
        // }


        ?>
    </div>



    <!-- card-container -->
    <!-- <section class="product">
                <h2 class="product-category">shoes</h2>
                <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card9.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card10.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card11.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card12.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card9.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card10.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card10.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card11.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card12.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                </div>
            </section> -->

    <!-- card-container -->
    <!-- <section class="product">
                <h2 class="product-category">shirts</h2>
                <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/product image 1.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/product image 2.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/product image 3.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/product image 4.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/product image 1.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/product image 2.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/product image 3.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/product image 4.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/product image 1.png" class="product-thumb" alt="">
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                </div>
            </section> -->

    <?php require './includes/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/Product.js"></script>
</body>

</html>