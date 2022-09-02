<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nintendo Store</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/e91a61ea13.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- HEADER -->
    <header class="header">

        <a href="./index.html" class="logo"><img src="./image/icons/palanca-de-mando.png"> Nintendo<span>®</span></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#products">products</a>
            <a href="#categories">categories</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <a class="fas fa-user" id="login-btn" href="http://localhost/iniciosesion.php"></a>
            <div class="fas fa-shopping-cart" id="cart-btn" onclick="pay()"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        
        <!-- <form name="form1" method="POST" action="" class="login-form">
            <h3>login now</h3>
            <input name="email" id="email" type="email" placeholder="your email" class="box">
            <input name="password" id="password" type="password" placeholder="your password" class="box">
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <input type="submit" value="login now" class="btn" onclick="formularioLogin()">
        </form>  
        -->

    </header>


    <!-- HOME  -->
    <section class="home" id="home">

        <div class="content">
            <h3>Top <span>Videojuegos</span> for you!</h3>
            <p>Shop games, exclusive Nintendo merchandise, and more! </p>
            <a href="#products" class="btn">shop now</a>
        </div>

    </section>


    <!-- FEATURES  -->
    <section class="features" id="features">

        <h1 class="heading"> our <span>features</span> </h1>

        <div class="box-container">


            <div class="box">
                <img src="image/feature-img-2.png" alt="">
                <h3>free delivery</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                <a href="#products" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="image/consola-de-juego.png" alt="">
                <h3>Innovation</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                <a href="#products" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="image/feature-img-3.png" alt="">
                <h3>easy payments</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                <a href="#products" class="btn">read more</a>
            </div>

        </div>

    </section>


    <!-- PRODUCTOS SECCION -->
    <section class="products" id="products">

        <h1 class="heading"> our <span>products</span> </h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/Juegos/CRASH2.jpg" alt="">
                
                    <?php
                    require './php/conexion.php';
                     
                    $objVideojuego = buscarVideojuego( $conexion, 1 );

                    echo "<h3>".$objVideojuego->nombre."</h3>";
                    echo "<div class='price'> $ ".$objVideojuego->precio." </div>";
                    ?> 

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <button class="btn" onclick="add('CRASH CARS', 20)">add to cart</button>
                </div>

                <div class="swiper-slide box">
                    <img src="image/Juegos/MARIO-PARTY.4.jpg" alt="">
                    <h3>MARIO PARTY</h3>
                    <div class="price"> $20 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <button class="btn" onclick="add('MARIO PARTY', 20)">add to cart</button>
                </div>

                <div class="swiper-slide box">
                    <img src="image/Juegos/ARMS1.webp" alt="">
                    <h3>ARMS</h3>
                    <div class="price"> $20 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <button class="btn" onclick="add('ARMS', 20)">add to cart</button>
                </div>

                <div class="swiper-slide box">
                    <img src="image/Juegos/MANSION-LUIGI3.jpg" alt="">
                    <h3>MANSION LUIGI</h3>
                    <div class="price"> $20 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <button class="btn" onclick="add('MANSION LUIGI', 20)">add to cart</button>
                </div>

            </div>

        </div>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/Juegos/MARIO-KART5.webp" alt="">
                    <h3>MARIO KARTS</h3>
                    <div class="price">$20 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <button class="btn" onclick="add('MARIO KARTS', 20)">add to cart</button>
                </div>

                <div class="swiper-slide box">
                    <img src="image/Juegos/SPLATOON6.jpg" alt="">
                    <h3>SPLATOON</h3>
                    <div class="price"> $20 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <button class="btn" onclick="add('SPLATOON', 20)">add to cart</button>
                </div>

                <div class="swiper-slide box">
                    <img src="image/Juegos/YOSHI7.webp" alt="">
                    <h3>YOSHI</h3>
                    <div class="price"> $20 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <button class="btn" onclick="add('YOSHI', 20)">add to cart</button>
                </div>

                <div class="swiper-slide box">
                    <img src="image/Juegos/ZELDA8.jpg" alt="">
                    <h3>ZELDA</h3>
                    <div class="price"> $20 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <button class="btn" onclick="add('ZELDA', 20)">add to cart</button>
                </div>

            </div>

        </div>


    </section>


    <!-- CATEGORIAS -->
    <section class="categories" id="categories">

        <h1 class="heading"> product <span>categories</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/ACCION.png" alt="">
                <h3>ACTION</h3>
                <p>upto 45% off</p>
                <a href="#products" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="image/ESTRATEGIA.png" alt="">
                <h3>STRATEGY</h3>
                <p>upto 45% off</p>
                <a href="#products" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="image/AVENTURA.png" alt="">
                <h3>ADVENTURE</h3>
                <p>upto 45% off</p>
                <a href="#products" class="btn">shop now</a>
            </div>

            <div class="box">
                <img src="image/SIMULACION2.png" alt="">
                <h3>SIMULACION</h3>
                <p>upto 45% off</p>
                <a href="#products" class="btn">shop now</a>
            </div>

        </div>

    </section>


    <!-- REVIEW  -->
    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>John Deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Gwen Smith</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Patrick Muller</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-4.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Sabrina Stone</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- BLOGS  -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/blog1.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 16 jun, 2022 </a>
                    </div>
                    <h3>Nintendo Switch Pro</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="https://www.nintendo.com/switch/" class="btn" target="_blank">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="image/blog2.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 18 may, 2022 </a>
                    </div>
                    <h3>ONLINE + PACK</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="https://www.nintendo.com/switch/online-service/" class="btn" target="_blank">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="image/blog3.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1 may, 2022 </a>
                    </div>
                    <h3>Pokemon Go Event </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p> 
                    <a href="https://www.nintendo.com/whatsnew/nintendo-switch-online-expansion-pack-pokemon-snap-is-now-available/" class="btn" target="_blank">read more</a>
                </div>
            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <section class="footer" id="contact">

        <div class="box-container">

            <div class="box">
                <a href="#" class="logo"><img src="./image/icons/palanca-de-mando.png"> Nintendo® </a>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> nintendos@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> California, USA - 400104 </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
                <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
                <a href="#categories" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
                <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <input type="email" placeholder="your email" class="email">
                <input type="submit" value="subscribe" class="btn" onclick="suscripcion()">
                <img src="image/payment.png" class="payment-img" alt="">
            </div>

        </div>

        <div class="credit"> created by <span> Simansky Technology </span> | all rights reserved </div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>