<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        a {
            text-decoration: none;
            outline: none !important;
            color: #fff;
        }

        .border-shape {
            background: #25AAE1;
            color: #fff;
            display: block;
            height: 3px;
            left: 0;
            margin: 20px auto;
            position: relative;
            right: 0;
            text-align: center;
            top: 0;
            width: 80px;
        }

        .border-shape::before {
            background: #25aae1;
            bottom: 0;
            content: "";
            height: 1px;
            left: 80px;
            margin: 0 auto;
            position: absolute;
            text-align: center;
            top: 1px;
            width: 100px;
        }

        .border-shape::after {
            background: #25AAE1;
            bottom: 0;
            content: "";
            height: 1px;
            margin: 0 auto;
            position: absolute;
            right: 80px;
            text-align: center;
            top: 1px;
            width: 100px;
        }

        /*FOOTER*/
        footer {
            width: 100%;
            background-color: #121619;
            color: #fff;
        }

        .top_header {
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .top_header section {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .top_header span {
            padding: 0 1rem;
        }

        .top_header .fa {
            color: #25aae1;
            font-size: 35px;
        }

        footer .border-shape {
            width: 40%;
        }

        footer .border-shape::before {
            width: 100%;
            left: 120px;
        }

        footer .border-shape::after {
            width: 100%;
            right: 120px;
        }

        footer .bottom_content section {
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: Center;
        }

        .bottom_content a {
            margin: 0 20px;
            color: rgba(255, 255, 255, 0.7);
            transition: 0.5s;
        }

        .bottom_content a:hover {
            color: #25AAE1;
        }


        .copyright {
            padding: 0.8em 0;
            background-color: #1e1e1e;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
        }



        @media (max-width:820px) {
            .top_header {
                padding: 1rem;
                display: block;
            }

            .top_header section {
                margin: 40px 0;
                align-items: left;
                justify-content: left;
            }

            footer .bottom_content section {
                padding: 1rem;
                display: block;
            }

            footer .bottom_content section a {
                padding: 1rem;
                font-size: 12px;
                margin: 0 5px;
                display: inline-block;
            }
        }
        .p-brand1 .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap; /* Ensures responsiveness */
}

#p-content1 {
    margin: 0; /* Removes default margin */
    padding-right: 20px; /* Adds spacing */
    max-width: 50%; /* Adjust width to balance layout */
}

.p-brand1 img {
    margin: 5px; /* Adds spacing between images */
}

    </style>
</head>

<body>
    <!--FONT AWESOME-->


    <!--FOOTER-->
    <footer>
        <div class="top_header">
            <section>
                <span style="color: #25AAE1;">CEO OF IGO GROUP OF COMPANIES  </span><br>
            </section>
            <section>
                <span><i class="fa fa-phone"></i></span>
                <span>7397386189</span>
            </section>

            <section>
                <span><i class="fa fa-envelope"></i></span>
                <span>ceojohnyesudas@gmail.com</span>
            </section>
        </div>
        </div>
        </div>
        <div class="p-brand1">
    <div class="container">
        <p id="p-content1">
            Thank you for visiting our website! Dr. John Yesudhas,<br>
            CEO of IGO Group, is committed to driving innovation and excellence across industries.<br>
            We appreciate your support and look forward to serving you.
        </p>
        <div class="brands" id="brand-logo">
            <h3 id="brands-img">Our Brands</h3>
            <img src="img/brand-1.jpg" alt="" width="60px" height="60px">
            <img src="img/brand-2.jpg" alt="" width="60px" height="60px">
            <img src="img/brand-3.jpg" alt="" width="60px" height="60px">
            <img src="img/brand-4.jpg" alt="" width="60px" height="60px">
            <img src="img/brand-5.jpg" alt="" width="60px" height="60px">
            <img src="img/brand-6.jpg" alt="" width="60px" height="60px">
        </div>
    </div>
</div>


        <span class="border-shape"></span>
        <div class="bottom_content">
            <section>
                <a href="https://www.facebook.com/johnyesudhass/"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/johnyesudhas_jy/"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-telegram"></i></a>
            </section>
            <section>
                <a href="index.php">Home</a>
                <a href="#about">About</a>
                <a href="#awards">Awards</a>
                <a href="index.php">Profile</a>
                <a href="#services">Service</a>
                <a href="blog.php">Blog</a>
            </section>
        </div>
        <div class="copyright">
            Copyright © 2025 Dr.John Yesudhas CEO-Profile - All rights reserved
        </div>
    </footer>
</body>

</html>