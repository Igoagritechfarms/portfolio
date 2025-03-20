
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.John Yesudhas CEO-Profile</title>
    <style>

#brand-slider {
    display: grid;
    place-items: center;
    background-color: skyblue;
}

#text-brand {
    font-size: 3rem;
    padding: 20px;
    margin: 20px 0px;
}

.slider6 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100vw; /* Full viewport width */
    height: 150px; /* Fixed height */
    overflow: hidden; /* Prevent extra scrollbars */
    background: rgb(255, 255, 255);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(7.4px);
    -webkit-backdrop-filter: blur(7.4px);
    border: 1px solid rgba(255, 255, 255, 0.4);
    position: relative;
}


.slider6-items {
    display: flex;
    align-items: center;
    gap: 20px;
    width: max-content; /* Prevent breaking into multiple lines */
    animation: scrollImages 20s linear infinite;
}


@keyframes scrollImages {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(-100%);
    }
}


.slider6-items img {
    width: 120px; /* Adjust as needed */
    height: auto;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
}

    </style>
</head>

<body>
<h1 id="text-brand">Our Brands</h1>

    <section id="brand-slider" style="margin-left: 400px;">
        <div class="slider6">
            <div class="slider6-items">
                <img src="img/brand-1.jpg"
                    alt="">
                <img src="img/brand-2.jpg"
                    alt="">
                <img src="img/brand-3.jpg"
                    alt="">
                <img src="img/brand-4.jpg"
                    alt="">
                <img src="img/brand-5.jpg"
                    alt="">
                <img src="img/brand-6.jpg" alt="">
                

            </div>
        </div>

    </section>
</body>

</html>