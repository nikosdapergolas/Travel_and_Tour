<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Book</title>

        <!-- Swiper css link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <!--Font awsome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!--Custom css file link-->
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <style>

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

        .booking .book-form{
            padding:2rem;
            background: var(--light-bg);
        }

        .booking .book-form .flex{
            display: flex;
            flex-wrap: wrap;
            gap:2rem;
        }

        .booking .book-form .flex .inputBox{
            flex:1 1 41rem;
        }

        .booking .book-form .flex .inputBox input{
            width: 100%;
            padding:1.2rem 1.4rem;
            font-size: 1.6rem;
            color:var(--light-black);
            text-transform: none;
            margin-top: 1.5rem;
            border:var(--border);
        }

        .booking .book-form .flex .inputBox input:focus{
            background: var(--black);
            color:var(--white);
        }

        .booking .book-form .flex .inputBox input:focus::placeholder{
            color:var(--light-white);
        }

        .booking .book-form .flex .inputBox span{
            font-size: 1.5rem;
            color:var(--light-black);
        }

        .booking .book-form .btn{
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

        <div class="heading" style="background:url(../images/header-bg-3.png) no-repeat">
            <h1>Book now</h1>
        </div>

        <!-- booking section starts  -->

        <section class="booking">

            <h1 class="heading-title">book your trip!</h1>

            <form action="book_form.php" method="post" class="book-form">

                <div class="flex">
                    <div class="inputBox">
                        <span>name :</span>
                        <input type="text" placeholder="enter your name" name="name">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="enter your email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>phone :</span>
                        <input type="number" placeholder="enter your number" name="phone">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="enter your address" name="address">
                    </div>
                    <div class="inputBox">
                        <span>where to :</span>
                        <input type="text" placeholder="place you want to visit" name="location">
                    </div>
                    <div class="inputBox">
                        <span>how many :</span>
                        <input type="number" placeholder="number of guests" name="guests">
                    </div>
                    <div class="inputBox">
                        <span>arrivals :</span>
                        <input type="date" name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>leaving :</span>
                        <input type="date" name="leaving">
                    </div>
                </div>

                <input type="submit" value="submit" class="btn" name="send">

            </form>

        </section>

        <!-- booking section ends -->
        









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