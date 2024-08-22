<?php $page = 'specialities'; ?>
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
                <h2 class="large_heading font-weight700 fontHeading text-center">Specialities</h2>

            </div>

        </div>

        <section>
         <div class="containerFull">
            <h3 class="heading text-center fontHeading text-white mt-3">Our Specialities</h3>
            <div class="row mt-lg-5 justify-content-center">
               <div class="col-lg-3">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/anxiety.webp" type="image/webp" />
                           <img src="images/anxiety.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="title text_primary fontHeading">Anxiety</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/deperassion.webp" type="image/webp" />
                           <img src="images/deperassion.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="title text_primary fontHeading">Depression</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/trauma.webp" type="image/webp" />
                           <img src="images/trauma.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="title text_primary fontHeading">Trauma & PTSD</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/relationship-issue.webp" type="image/webp" />
                           <img src="images/relationship-issue.png" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="title text_primary fontHeading">Relationship Issues</h4>

                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/stress-management.webp" type="image/webp" />
                           <img src="images/stress-management.png" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="title text_primary fontHeading">Stress Management</h4>

                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/anxiety.webp" type="image/webp" />
                           <img src="images/anxiety.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="title text_primary fontHeading">Other Specialties</h4>

                     </div>
                  </div>
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