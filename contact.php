<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beyond the Box</title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>

        <div class="shortBanner">

            <div class="short_heading">
                <h2 class="large_heading font-weight700 fontHeading text-center">Contact us</h2>

            </div>

        </div>


        <section>

            <div class="containerFull">

            <div class="row py-3 ">
                <div class="col-lg-10 offset-lg-1">
                    <div class="detail-container">
                        <div class="detail-box">
                            <div class="detail-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div class="detail-content">
                                <h5 class="title fontWeight">Email : </h5>
                                <p class="mt-1 text ">beyondthebox@info.in</p>

                            </div>
                        </div>

                        <div class="detail-box">
                            <div class="detail-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="detail-content">
                                <h5 class="title fontWeight">Phone : </h5>
                                <p class="mt-1 text ">+1-234-567-8901</p>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="detail-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="detail-content">
                                <h5 class="title fontWeight">Address : </h5>
                                <p class="mt-1 text ">Mumbai, Maharashtra India</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>




            <div class="mt-5 contact-container">


                <div class="contact-formBox">

                    <h3 class="sub_heading text-white fontWeight700 fontHeading mb-2">Contact us</h3>

                    <div class="formBox">
                        <form action="#">
                            <div class="input-box"><input type="text" placeholder="Name"></div>
                            <div class="input-box"><input type="number" placeholder="Phone Number"></div>
                            <div class="input-box"><input type="mail" placeholder="Email"></div>
                            <div class="input-box"><textarea name="massage" placeholder="Write a massage" id=""></textarea></div>
                            <button type="submit" class="btnTheme mt-2">Submit</button>
                        </form>
                    </div>


                </div>
                
                <div class="mapBox">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482633.0404994257!2d72.5515037917913!3d19.082606792908297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1724409554059!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div></div>

        </section>



        <?php include 'include/footer.php';
        ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>