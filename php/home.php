<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home</title>

        <!-- Swiper css link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <!--Font awsome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!--Custom css file link-->
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <style>

        .home-offer{
            text-align: center;
        }

        .home-offer .content{
            max-width:70rem;
            margin:0 auto;
        }

        .home-offer .content h3{
            font-size: 3.5rem;
            text-transform: uppercase;
            color:var(--black);
        }

        .home-offer .content p{
            font-size: 1.5rem;
            color:var(--light-black);
            line-height: 2;
            padding:1rem 0;
        }

        .home-packages{
            background: var(--light-bg);
        }

        .home-packages .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap: 2rem;
        }

        .home-packages .box-container .box{
            border:var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);
        }

        .home-packages .box-container .box:hover .image img{
            transform: scale(1.1);
        }

        .home-packages .box-container .box .image{
            height: 25rem;
            overflow: hidden;
        }

        .home-packages .box-container .box .image img{
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: .2s linear;
        }

        .home-packages .box-container .box .content{
            padding:2rem;
            text-align: center;
        }

        .home-packages .box-container .box .content h3{
            font-size: 2.5rem;
            color:var(--black);
        }

        .home-packages .box-container .box .content p{
            font-size: 1.5rem;
            color:var(--light-black);
            line-height: 2;
            padding:1rem 0;
        }

        .home-packages .load-more{
            text-align: center;
            margin-top: 2rem;
        }

        .home-about{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .home-about .image{
            flex:1 1 41rem;
        }

        .home-about .image img{
            width: 100%;
        }

        .home-about .content{
            flex:1 1 41rem;
            padding:3rem;
            background: var(--light-bg);
        }

        .home-about .content h3{
            font-size: 3rem;
            color:var(--black);
        }

        .home-about .content p{
            font-size: 1.5rem;
            padding:1rem 0;
            line-height: 2;
            color:var(--black);
        }

        .btn{
            display: inline-block;
            background: var(--black);
            margin-top: 1rem;
            color:var(--white);
            font-size: 1.7rem;
            padding:1rem 3rem;
            cursor: pointer;
        }

        .btn:hover{
            background: var(--main-color);
        }

        .home{
            padding:0;
        }

        .home .slide{
            text-align: center;
            padding:2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover !important;
            background-position: center !important;
            min-height: 60rem;
        }

        .home .slide .content{
            width: 85rem;
        }

        .home .slide-active .content{
            display: inline-block;
        }

        .home .slide .content span{
            display: block;
            font-size: 2.2rem;
            color: var(--light-white);
            padding-bottom: 1rem;
            animation:fadeIn .2s linear backwards .2s;
        }

        .home .slide .content h3{
            font-size: 6vw;
            color:var(--white);
            text-transform: uppercase;
            line-height: 1;
            text-shadow: var(--text-shadow);
            padding:1rem 0;
            animation:fadeIn .2s linear backwards .4s;
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

        <!-- home section starts  -->

        <section class="home">

            <div class="home-slider">

                <div class="wrapper">

                    <div class="slide" style="background:url(../images/home-slide-1.jpg) no-repeat">

                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>travel around the world</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>                
                
                    </div>

                    <div class="slide" style="background:url(../images/home-slide-2.jpg) no-repeat">

                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>discover the new places</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>               
                
                    </div>

                    <div class="slide" style="background:url(../images/home-slide-3.jpg) no-repeat">

                        <div class="content">
                            <span>explore, discover, travel</span>
                            <h3>make your tour worthwhile</h3>
                            <a href="package.php" class="btn">discover more</a>
                        </div>               
                
                    </div>

                </div>

            </div>
            
        </section>

        

        <!-- home section ends -->

        <!-- services section starts  -->

        <section class="services">

            <h1 class="heading-title"> our services </h1>

            <div class="box-container">

                <div class="box">
                    <img src="../images/icon-1.png" alt="">
                    <h3>adventure</h3>
                </div>

                <div class="box">
                    <img src="../images/icon-2.png" alt="">
                    <h3>tour guide</h3>
                </div>

                <div class="box">
                    <img src="../images/icon-3.png" alt="">
                    <h3>trekking</h3>
                </div>

                <div class="box">
                    <img src="../images/icon-4.png" alt="">
                    <h3>camp fire</h3>
                </div>

                <div class="box">
                    <img src="../images/icon-5.png" alt="">
                    <h3>off road</h3>
                </div>

                <div class="box">
                    <img src="../images/icon-6.png" alt="">
                    <h3>camping</h3>
                </div>

            </div>

        </section>

        <!-- services section ends -->

        <!-- home about section starts  -->

        <section class="home-about">

            <div class="image">
                <img src="../images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>about us</h3>
                <p>We are a team that have gathered together an made This site to work on our cyber security skills</p>
                <a href="about.php" class="btn">read more</a>
            </div>

        </section>

        <!-- home about section ends -->

        <!-- home packages section starts  -->

        <section class="home-packages">

            <h1 class="heading-title"> our packages </h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="../images/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>
                
                <div class="box">
                    <div class="image">
                        <img src="../images/img-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

            </div>

            <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

        </section>

        <!-- home packages section ends -->


        <section class="home-offer">
            <div class="content">
                <h3>upto 50% off</h3>
                <p>This offer will soon expire! Get it now before it ends!!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </section>

        <!-- home offer section ends -->
        









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