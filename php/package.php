<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Packages</title>

        <!-- Swiper css link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <!--Font awsome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!--Custom css file link-->
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <style>

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

        .packages .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap: 2rem;
        }

        .packages .box-container .box{
            border:var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);
            display: none;
        }

        .packages .box-container .box:nth-child(1),
        .packages .box-container .box:nth-child(2),
        .packages .box-container .box:nth-child(3),
        .packages .box-container .box:nth-child(4),
        .packages .box-container .box:nth-child(5),
        .packages .box-container .box:nth-child(6),
        .packages .box-container .box:nth-child(7),
        .packages .box-container .box:nth-child(8),
        .packages .box-container .box:nth-child(9),
        .packages .box-container .box:nth-child(10),
        .packages .box-container .box:nth-child(11),
        .packages .box-container .box:nth-child(12){
            display: inline-block;
        }

        .packages .box-container .box:hover .image img{
            transform: scale(1.1);
        }

        .packages .box-container .box .image{
            height: 25rem;
            overflow: hidden;
        }

        .packages .box-container .box .image img{
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: .2s linear;
        }

        .packages .box-container .box .content{
            padding:2rem;
            text-align: center;
        }

        .packages .box-container .box .content h3{
            font-size: 2.5rem;
            color:var(--black);
        }

        .packages .box-container .box .content p{
            font-size: 1.5rem;
            color:var(--light-black);
            line-height: 2;
            padding:1rem 0;
        }

        .packages .load-more{
            text-align: center;
            margin-top: 2rem;
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

        <div class="heading" style="background:url(../images/header-bg-2.png) no-repeat">
            <h1>Packages</h1>
        </div>

        <!-- packages section starts  -->

        <section class="packages">

            <h1 class="heading-title">top destinations</h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="../images/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-7.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-8.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-9.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-10.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-11.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="../images/img-12.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

            </div>

            <div class="load-more"><span class="btn">load more</span></div>

        </section>

        <!-- packages section ends -->



        









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