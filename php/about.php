<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>About</title>

        <!-- Swiper css link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <!--Font awsome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!--Custom css file link-->
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <style>

        .reviews{
            background: var(--light-bg);
        }

        .reviews .slide{
            padding:2rem;
            border:var(--border);
            background: var(--white);
            text-align: center;
            box-shadow: var(--box-shadow);
            user-select: none;
        }

        .reviews .slide .stars{
            padding-bottom: .5rem;
        }

        .reviews .slide .stars i{
            font-size: 1.7rem;
            color:var(--main-color);
        }

        .reviews .slide p{
            font-size: 1.5rem;
            color:var(--light-black);
            line-height: 2;
            padding:1rem 0;
        }

        .reviews .slide h3{
            font-size: 2rem;
            color:var(--black);
        }

        .reviews .slide span{
            font-size: 1.5rem;
            color:var(--main-color);
            display: block;
        }

        .reviews .slide img{
            height: 7rem;
            width: 7rem;
            border-radius: 50%;
            margin-top: 1rem;
        }

        .heading{
            background-size: cover !important;
            background-position: center !important;
            padding-top: 10rem;
            padding-bottom:15rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .heading h1{
            font-size: 10rem;
            text-transform: uppercase;
            color:var(--white);
            text-shadow: var(--text-shadow);
        }

        .about{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap:3rem;
        }

        .about .image{
            flex:1 1 41rem;
        }

        .about .image img{
            width: 100%;
        }

        .about .content{
            flex:1 1 41rem;
            text-align: center;
        }

        .about .content h3{
            font-size: 3rem;
            color:var(--black);
        }

        .about .content p{
            font-size: 1.5rem;
            color:var(--light-black);
            line-height: 2;
            padding:1rem 0;
        }

        .about .content .icons-container{
            margin-top: 2rem;
            display: flex;
            flex-wrap: wrap;
            gap:1.5rem;
            align-items: flex-end;
        }

        .about .content .icons-container .icons{
            background: var(--light-bg);
            padding:2rem;
            flex:1 1 16rem;
        }

        .about .content .icons-container .icons i{
            font-size: 4rem;
            margin-bottom: 2rem;
            color:var(--main-color);
        }

        .about .content .icons-container .icons span{
            font-size: 1.5rem;
            color:var(--light-black);
            display:block;
        }

    </style>

    <body>
        
        <!-- header sections starts -->

        <section class="header">
            <a href="home.php" class="logo">travel.</a>

            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="package.php">Package</a>
                <a href="book.php">Book</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </section>

        <!-- header sections ends -->

        <div class="heading" style="background:url(../images/header-bg-1.png) no-repeat">
            <h1>about us</h1>
        </div>

        <!-- about section starts  -->

            <section class="about">

                <div class="image">
                    <img src="../images/about-img.jpg" alt="">
                </div>

                <div class="content">
                    <h3>why choose us?</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.</p>
                    <div class="icons-container">
                        <div class="icons">
                            <i class="fas fa-map"></i>
                            <span>top destinations</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-hand-holding-usd"></i>
                            <span>affordable price</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-headset"></i>
                            <span>24/7 guide service</span>
                        </div>
                    </div>
                </div>

            </section>

        <!-- about section ends -->

        <!-- reviews section starts  -->

        <section class="reviews">

            <h1 class="heading-title"> clients reviews </h1>

            <div class="reviews-slider">

                <div class="wrapper">

                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="../images/pic-1.png" alt="">
                    </div>

                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio similique totam aut laborum ullam sequi! In!</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="../images/pic-2.png" alt="">
                    </div>

                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste odio placeat doloribus eum dolores tempore obcaecati, dolore esse aperiam. Excepturi ad quo distinctio, dignissimos voluptate, dolores, saepe animi eum atque sint esse ab exercitationem!</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="../images/pic-3.png" alt="">
                    </div>

                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dignissimos nemo?</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="../images/pic-4.png" alt="">
                    </div>

                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="../images/pic-5.png" alt="">
                    </div>

                    <div class="slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                        <h3>john deo</h3>
                        <span>traveler</span>
                        <img src="../images/pic-6.png" alt="">
                    </div>

                </div>

            </div>

        </section>

        <!-- reviews section ends -->


        









        <!-- footer section starts -->

        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>Quick links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
                </div>

                <div class="box">
                    <h3>Extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i> Ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i> About us</a>
                    <a href="#"><i class="fas fa-angle-right"></i> Privacy policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                    <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                    <a href="#"><i class="fas fa-envelope"></i> travel@gmail.com </a>
                    <a href="#"><i class="fas fa-map"></i> Athens, Greece - 12345 </a>
                </div>

                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i> Tacebook </a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter </a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram </a>
                    <a href="#"><i class="fab fa-linkedin"></i> Linkedin </a>
                </div>

            </div>

            <div class="credit"> created by <span>Nikos Dapergolas</span> | all rights reserved! </div>

        </section>

        <!-- footer section ends -->

        <!-- Swiper js link -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <!--Custom js file link-->
        <script src="../js/script.js"></script>

    </body>
</html>