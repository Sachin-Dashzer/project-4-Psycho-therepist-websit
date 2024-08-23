<?php $page = 'appointment'; ?>
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
                <h2 class="large_heading font-weight700 fontHeading text-center">Appointment</h2>

            </div>

        </div>




        <section>
            <div class="containerFUll overflow-hidden">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">

                        <h2 class="sub_heading text-center fontHeading">Online Booking System</h2>


                        <h4 class="small_heading mt-5 text-center text-decoration-underline">Available Slots</h4>



                        <!-- Calendly inline widget begin -->
                        <div class="calendly-inline-widget" data-url="https://calendly.com/carlo-sanchez/booking-schedule-beyond-the-box" style="min-width:320px;height:700px;"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                        <!-- Calendly inline widget end -->

                        <h4 class="small_heading mt-4 text-decoration-underline">Types of Sessions</h4>

                        <form class="mt-3 ps-5 selectionBox">
                            <label class="mt-2">
                                <input type="radio" name="session" value="free-consultation">
                                15-minute Free Consultation Call
                            </label><br>

                            <label class="mt-2">
                                <input type="radio" name="session" value="paid-session">
                                50-minute Paid Session
                            </label><br>

                            <label class="mt-2">
                                <input type="radio" name="session" value="online-session">
                                Online Session
                            </label><br>

                            <label class="mt-2">
                                <input type="radio" name="session" value="offline-session">
                                Offline Session
                            </label>
                        </form>

                        <h4 class="small_heading mt-4 text-decoration-underline">Contact Us</h4>

                        <form action="#" class="mt-4">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">


                                    <div class="contact-form">
                                        <div>
                                            <input type="text" name="name" id="name" placeholder="Name">
                                            <input type="number" name="ph-number" id="ph-number" placeholder="Phone Number">
                                            <input type="email" name="email" id="email" placeholder="Email">
                                        </div>

                                        <div>

                                            <textarea name="massage" id="massage" placeholder="What would you like to share with us today?"></textarea>
                                        </div>
                                    </div>


                                    <h5 class="title mt-4">How would you like me to contact/ respond to you? </h5>
                                    <div class="small-checkbox">
                                        <label class="mt-3">
                                            <input type="radio" name="contact-way" value="phone">
                                            Phone
                                        </label><br>

                                        <label class="mt-2">
                                            <input type="radio" name="contact-way" value="whatsapp">
                                            Whatsapp
                                        </label><br>

                                        <label class="mt-2">
                                            <input type="radio" name="contact-way" value="email">
                                            E-mail
                                        </label><br>
                                    </div>

                                    <h5 class="title mt-4">How would you like me to contact/ respond to you? </h5>

                                    <div class="small-checkbox">

                                        <label class="mt-3">
                                            <input type="radio" name="choice-box" value="yes">
                                            Yes
                                        </label><br>

                                        <label class="mt-2">
                                            <input type="radio" name="choice-box" value="no">
                                            No
                                        </label><br>
                                    </div>

                                    <button type="submit" class="btnTheme text-center mt-4 ">Submit Now</button>
                                </div>
                            </div>



                        </form>



                    </div>
                </div>
            </div>
        </section>


        <?php include 'include/footer.php';
        ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>