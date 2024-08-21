<?php $page = 'home'; ?>
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
      <section class="heroSection">
         <div class="containerFull h-100">
            <div class="row h-100 align-items-center mt-lg-5">
               <div class="col-lg-8 offset-lg-2">
                  <div class="text-center">
                     <div class="bannerIcon">
                        <picture>
                           <source srcset="images/slider/banner-bg.webp" type="image/webp" />
                           <img src="images/slider/banner-bg.png" alt="">
                        </picture>
                     </div>
                     <div class="d-flex justify-content-center align-items-center mt-4">
                        <a href="#" class="headerBtn">Book your Appointment</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="circleFull">
            <div class="borderCircle">

            </div>
         </div>
      </section>
      <section>
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-4">
                  <div class="leftBio">
                     <picture>
                        <source srcset="images/logo.webp" type="image/webp" />
                        <img src="images/logo.png" />
                     </picture>
                  </div>
               </div>
               <div class="col-lg-7 offset-lg-1">
                  <div class="rightAbout">
                     <h4 class="title text_primary fontHeading">Hey there! </h4>
                     <h3 class="heading mt-3 fontHeading">Welcome to Beyond the Box with Bhakti,</h3>
                     <h3 class="small_heading mt-3 fontHeading">where we empower your growth through compassionate care. </h3>
                     <div class="inlineBio">
                        <div class="rightBio">
                           <p>We believe in going beyond the box when it comes to your mental health. Here at beyond the box with bhakti, we believe in creating a safe, non judgemental space for you to realise your potential. Embark on a journey to transform yourself, from overcoming and navigating challenges like depression, anxiety, adhd, trauma, etc and achieve lasting growth. With a holistic approach to mental health, we aim to provide therapy that meets you where you are.
                           </p>
                        </div>
                     </div>
                     <div class="row align-items-center mt-lg-5 mt-3">
                        <div class="col-lg-8">
                           <p class="small_heading fontHeading">I cannot teach anybody anything. I can only make them think.</p>
                        </div>
                        <div class="col-lg-4">
                           <a href="#" class="btnTheme w-100 text-center">Know More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bgSection">
         <div class="containerFull">
            <h3 class="heading text-center fontHeading text_primary mt-3">Featured Services</h3>
            <div class="row mt-lg-5 row-cols-6 row-cols-lg-5">
               <div class="col">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/therapy.webp" type="image/webp" />
                           <img src="images/icons/therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-3">Individual Therapy</h4>
                  </div>
               </div>
               <div class="col">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/couple-therapy.webp" type="image/webp" />
                           <img src="images/icons/couple-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4">Couples Therapy</h4>
                  </div>
               </div>
               <div class="col">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/group-therapy.webp" type="image/webp" />
                           <img src="images/icons/group-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4">Group Therapy</h4>
                  </div>
               </div>
               <div class="col">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/online-therapy.webp" type="image/webp" />
                           <img src="images/icons/online-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4">Online Therapy</h4>
                  </div>
               </div>
               <div class="col">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/family-therapy.webp" type="image/webp" />
                           <img src="images/icons/family-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4">Family Therapy</h4>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg_primary">
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
      <section class="bgAction">
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-9">
                  <h4 class="sub_heading text_primary fontHeading">Let’s open your heart story to us, We’ll listen to you</h4>
               </div>
               <div class="col-lg-3">
                  <a href="#" class="btnTheme w-100 text-center">Book your Slot Now</a>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="containerFull">
            <p class="textSub text-center">From The Blog</p>
            <h3 class="heading text-center text_primary fontHeading">Latest Blogs & News</h3>
            <div class="blogSlider iconSlider">
               <div class="itemBlog">
                  <div class="innerBlog">
                     <div class="imgBlog">
                        <picture>
                           <source srcset="images/blog/blog.webp" type="image/webp" />
                           <img src="images/blog/blog.png" />
                        </picture>
                     </div>
                     <div class="blogDesHome">
                        <div class="innerDes">
                           <div class="descriptionHome">
                              <div class="userIcon">
                                 <i class="fa fa-user"></i>
                              </div>
                              <p>by webdesk</p>
                              <h4 class="small_heading fontHeading mt-3">5 Essential Tips for Managing Over whelming Situations </h4>
                           </div>
                        </div>
                        <div class="bottomBtn">
                           <p><i class="far fa-calendar"></i> 26-06-2024</p>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="itemBlog">
                  <div class="innerBlog">
                     <div class="imgBlog">
                        <picture>
                           <source srcset="images/blog/blog.webp" type="image/webp" />
                           <img src="images/blog/blog.png" />
                        </picture>
                     </div>
                     <div class="blogDesHome">
                        <div class="innerDes">
                           <div class="descriptionHome">
                              <div class="userIcon">
                                 <i class="fa fa-user"></i>
                              </div>
                              <p>by webdesk</p>
                              <h4 class="small_heading fontHeading mt-3">5 Essential Tips for Managing Over whelming Situations </h4>
                           </div>
                        </div>
                        <div class="bottomBtn">
                           <p><i class="far fa-calendar"></i> 26-06-2024</p>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="itemBlog">
                  <div class="innerBlog">
                     <div class="imgBlog">
                        <picture>
                           <source srcset="images/blog/blog.webp" type="image/webp" />
                           <img src="images/blog/blog.png" />
                        </picture>
                     </div>
                     <div class="blogDesHome">
                        <div class="innerDes">
                           <div class="descriptionHome">
                              <div class="userIcon">
                                 <i class="fa fa-user"></i>
                              </div>
                              <p>by webdesk</p>
                              <h4 class="small_heading fontHeading mt-3">5 Essential Tips for Managing Over whelming Situations </h4>
                           </div>
                        </div>
                        <div class="bottomBtn">
                           <p><i class="far fa-calendar"></i> 26-06-2024</p>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="itemBlog">
                  <div class="innerBlog">
                     <div class="imgBlog">
                        <picture>
                           <source srcset="images/blog/blog.webp" type="image/webp" />
                           <img src="images/blog/blog.png" />
                        </picture>
                     </div>
                     <div class="blogDesHome">
                        <div class="innerDes">
                           <div class="descriptionHome">
                              <div class="userIcon">
                                 <i class="fa fa-user"></i>
                              </div>
                              <p>by webdesk</p>
                              <h4 class="small_heading fontHeading mt-3">5 Essential Tips for Managing Over whelming Situations </h4>
                           </div>
                        </div>
                        <div class="bottomBtn">
                           <p><i class="far fa-calendar"></i> 26-06-2024</p>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bgPrimary">
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-6 ps-lg-0">
                  <div class="leftCotnact">
                     <picture>
                        <source srcset="images/contact-img.webp" type="image/webp" />
                        <img src="images/contact-img.png" />
                     </picture>
                  </div>
               </div>
               <div class="col-lg-5 offset-lg-1">
                  <div class="rightContact">
                     <p class="textLine text-white">Contact with us</p>
                     <h3 class="heading text-white fontHeading text_primary mt-3">Book a Session </h3>
                     <div class="mainForm">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="formItemRepeat">
                                 <div class="form-floating mb-2">
                                    <input type="text" required="" class="form-control" id="name" name="name" placeholder="name">
                                    <label for="name">Full Name</label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="formItemRepeat">
                                 <div class="form-floating mb-2">
                                    <input type="tel" required="" class="form-control" id="phone" name="phone" placeholder="name">
                                    <label for="phone">Phone</label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="formItemRepeat">
                                 <div class="form-floating mb-2">
                                    <input type="email" required="" class="form-control" id="email" name="email" placeholder="name">
                                    <label for="email">Email</label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="formItemRepeat">
                                 <div class="form-floating mb-2">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                       <option selected value="Individual Therapy">Individual Therapy</option>
                                       <option value="Coupple Therapy">Couples Therapy</option>
                                       <option value="Group Therapy">Group Therapy</option>
                                       <option value="Online Therapy">Online Therapy</option>
                                       <option value="Family Therapy">Family Therapy</option>
                                    </select>
                                    <label for="floatingSelect">Select Programs</label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="formItemRepeat">
                                 <div class="form-floating">
                                    <textarea class="form-control textHeight" required="" name="message" placeholder="Leave a comment here" id="floatingTextarea" spellcheck="false"></textarea>
                                    <label for="floatingTextarea">Write Message</label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="formItemRepeat">
                                 <button class="btnWhite mt-3">Send Request</button>
                              </div>
                           </div>
                        </div>
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