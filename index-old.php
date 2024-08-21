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
      <div class="heroSlider">
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <picture>
                     <source srcset="images/slider/hero.webp" type="image/webp" />
                     <img src="images/slider/hero.jpg" alt="slider" />
                  </picture>
                  <div class="carousel-caption d-none d-md-block">
                     <p class="textLine">psychotherapy</p>
                     <h1 class="large_heading fontHeading text_primary">Learn coping skills to help you with difficult times </h1>
                     <p>Lorem ipsum dolor sit amet, con adipiscing elit tiam convallis elit id impedie. Quisq commodo simply free ornare tortor. If you are going to use a passage.</p>
                     <div class="d-flex align-items-center mt-4">
                        <a href="#" class="btnTheme">Appointment</a>
                        <a href="#" class="btnSecondary ms-lg-3">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <picture>
                     <source srcset="images/slider/hero2.webp" type="image/webp" />
                     <img src="images/slider/hero2.jpg" alt="slider" />
                  </picture>
                  <div class="carousel-caption d-none d-md-block">
                     <p class="textLine">psychotherapy</p>
                     <h1 class="large_heading fontHeading text_primary">Connect with all parts of yourself & start new life</h1>
                     <p>Lorem ipsum dolor sit amet, con adipiscing elit tiam convallis elit id impedie. Quisq commodo simply free ornare tortor. If you are going to use a passage.</p>
                     <div class="d-flex align-items-center mt-4">
                        <a href="#" class="btnTheme">Appointment</a>
                        <a href="#" class="btnSecondary ms-lg-3">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <picture>
                     <source srcset="images/slider/hero.webp" type="image/webp" />
                     <img src="images/slider/hero.jpg" alt="slider" />
                  </picture>
                  <div class="carousel-caption d-none d-md-block">
                     <p class="textLine">psychotherapy</p>
                     <h2 class="large_heading fontHeading text_primary">Learn coping skills to help you with difficult times </h2>
                     <p>Lorem ipsum dolor sit amet, con adipiscing elit tiam convallis elit id impedie. Quisq commodo simply free ornare tortor. If you are going to use a passage.</p>
                     <div class="d-flex align-items-center mt-4">
                        <a href="#" class="btnTheme">Appointment</a>
                        <a href="#" class="btnSecondary ms-lg-3">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
      </div>
      <section>
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-4">
                  <div class="leftBio">
                     <picture>
                        <source srcset="images/about-left.webp" type="image/webp" />
                        <img src="images/about-left.jpg" />
                     </picture>
                     <div class="circleText">
                        <picture>
                           <source srcset="images/icons/circletext.webp" type="image/webp" />
                           <img src="images/icons/circletext.jpg" />
                        </picture>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7 offset-lg-1">
                  <div class="rightAbout">
                     <h4 class="title text_primary fontHeading">WELCOME TO BEYOND THE BOX</h4>
                     <h3 class="heading mt-3 fontHeading">I’m Dr. Bhakti Expert Psychologist from India</h3>
                     <div class="inlineBio">
                        <div class="cardBio">
                           <i class="fa-regular fa-star"></i>
                           <h4 class="heading fontWeight600 text_primary">20</h4>
                           <p>Years of
                              Experience</p>
                        </div>
                        <div class="rightBio">
                           <p>Lorem ipsum dolor sit amet, con adipiscing elit tiam convallis elit id impedie. Quisq commodo simply free ornare tortor. If you are going to use a passage.</p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ducimus vero? Cum sequi officiis doloremque cumque quisquam sunt aliquam nisi, sapiente nobis porro deserunt quos ad nihil a nesciunt fugit.</p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, ducimus vero? Cum sequi</p>
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
      <section class="bgPrimary">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-4">
                  <div class="leftServices">
                     <p class="textLingWhite">Services & Offer</p>
                     <h4 class="heading fontHeading text-white mt-3">New texts about everyday issues of a modern man</h4>
                     <p class="text-white mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                     <a href="#" class="btnWhite mt-4">Read more</a>
                  </div>
               </div>
               <div class="col-lg-8 pe-lg-0">
                  <div class="rightSerices">
                     <div class="servicesItems">
                        <div class="innerItem">
                           <div class="imgService">
                              <picture>
                                 <source srcset="images/individual-therapy.webp" type="image/webp" />
                                 <img src="images/individual-therapy.jpg" alt="Individual Therapy" />
                              </picture>
                           </div>
                           <h4 class="small_heading text-white fontHeading">Individual Therapy</h4>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="servicesItems">
                        <div class="innerItem">
                           <div class="imgService">
                              <picture>
                                 <source srcset="images/couple-therapy.webp" type="image/webp" />
                                 <img src="images/couple-therapy.jpg" alt="Individual Therapy" />
                              </picture>
                           </div>
                           <h4 class="small_heading text-white fontHeading">Couples Therapy</h4>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="servicesItems">
                        <div class="innerItem">
                           <div class="imgService">
                              <picture>
                                 <source srcset="images/family-therapy.webp" type="image/webp" />
                                 <img src="images/family-therapy.jpg" alt="Individual Therapy" />
                              </picture>
                           </div>
                           <h4 class="small_heading text-white fontHeading">Family Therapy</h4>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="containerFull">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="specialtiesLest">
                     <p class="textLine">Our Specialities</p>
                     <h3 class="heading fontHeading text_primary mt-3">Magical Therapy for the
                        People Need Help</h3>
                  </div>
               </div>
               <div class="col-lg-5 offset-lg-1">
                  <div class="specialitiesRight">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, officia illum hic ducimus quis numquam voluptatem provident quasi cupiditate tempora minima! Laboriosam animi sequi maxime, aliquam ipsam autem praesentium voluptatem.</p>
                  </div>
               </div>
            </div>
            <div class="specialSlider iconSlider mt-lg-5">
               <div class="itemBlock">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/anxiety.webp" type="image/webp" />
                           <img src="images/anxiety.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="small_heading text_primary fontHeading">Anxiety</h4>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr>
                        <a href="#" class="btnLink">Read More <i class="fa fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="itemBlock">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/deperassion.webp" type="image/webp" />
                           <img src="images/deperassion.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="small_heading text_primary fontHeading">Depression</h4>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr>
                        <a href="#" class="btnLink">Read More <i class="fa fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="itemBlock">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/trauma.webp" type="image/webp" />
                           <img src="images/trauma.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="small_heading text_primary fontHeading">Trauma & PTSD</h4>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr>
                        <a href="#" class="btnLink">Read More <i class="fa fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="itemBlock">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/relationship-issue.webp" type="image/webp" />
                           <img src="images/relationship-issue.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="small_heading text_primary fontHeading">Relationship Issues</h4>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr>
                        <a href="#" class="btnLink">Read More <i class="fa fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="itemBlock">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/stress-management.webp" type="image/webp" />
                           <img src="images/stress-management.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="small_heading text_primary fontHeading">Stress Management</h4>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr>
                        <a href="#" class="btnLink">Read More <i class="fa fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="itemBlock">
                  <div class="itemSpecial">
                     <div class="specialImg">
                        <picture>
                           <source srcset="images/anxiety.webp" type="image/webp" />
                           <img src="images/anxiety.jpg" />
                        </picture>
                     </div>
                     <div class="description">
                        <h4 class="small_heading text_primary fontHeading">Other Specialties</h4>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr>
                        <a href="#" class="btnLink">Read More <i class="fa fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="benefitBg">
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-3">
                  <div class="leftBenefits">
                     <p class="textLine">Our Benefits</p>
                     <h3 class="heading fontHeading text_primary mt-3">Lorem dolor sit, amet consectetur</h3>
                  </div>
               </div>
               <div class="col-lg-9 ps-lg-5">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="itemBenefits">
                           <div class="iconBenefits">
                              <picture>
                                 <source srcset="images/icons/health.webp" type="image/webp" />
                                 <img src="images/icons/health.png" />
                              </picture>
                           </div>
                           <h4 class="small_heading fontHeading">Professional Psychologists</h4>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="itemBenefits">
                           <div class="iconBenefits">
                              <picture>
                                 <source srcset="images/icons/online-support.webp" type="image/webp" />
                                 <img src="images/icons/online-support.png" />
                              </picture>
                           </div>
                           <h4 class="small_heading fontHeading">Online Counseling</h4>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="itemBenefits">
                           <div class="iconBenefits">
                              <picture>
                                 <source srcset="images/icons/review.webp" type="image/webp" />
                                 <img src="images/icons/review.png" />
                              </picture>
                           </div>
                           <h4 class="small_heading fontHeading">Happy<br /> Customers</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-10 offset-lg-1">
                  <div class="row align-items-center">
                     <div class="col-lg-4">
                        <div class="itemAchive">
                           <p>2012</p>
                           <h4 class="small_heading fontHeading my-3 text_primary">Best Counseling </h4>
                           <p>Quisqu tell us risus sid adpis viera bibe um urna.</p>
                        </div>
                        <div class="itemAchive mt-lg-5 mt-4">
                           <p>2015</p>
                           <h4 class="small_heading fontHeading my-3 text_primary">Quality Therapies</h4>
                           <p>Quisqu tell us risus sid adpis viera bibe um urna.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 px-lg-5">
                        <picture>
                           <source srcset="images/awards.webp" type="image/webp" />
                           <img src="images/awards.png" class="w-100" />
                        </picture>
                     </div>
                     <div class="col-lg-4">
                        <div class="itemAchive">
                           <p>2012</p>
                           <h4 class="small_heading fontHeading my-3 text_primary">Best Counseling </h4>
                           <p>Quisqu tell us risus sid adpis viera bibe um urna.</p>
                        </div>
                        <div class="itemAchive mt-lg-5 mt-4">
                           <p>2015</p>
                           <h4 class="small_heading fontHeading my-3 text_primary">Quality Therapies</h4>
                           <p>Quisqu tell us risus sid adpis viera bibe um urna.</p>
                        </div>
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
                  <h4 class="sub_heading text-white fontHeading">Let’s open your heart story to us, We’ll listen to you</h4>
               </div>
               <div class="col-lg-3">
                  <a href="#" class="btnWhite w-100 text-center">Book your Slot Now</a>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="containerFull">
            <div class="row align-items-center">
               <div class="col-lg-4">
                  <div class="lefttestimonial">
                     <div class="leftBenefits">
                        <p class="textLine">Our Testimonials</p>
                        <h3 class="heading fontHeading text_primary mt-3">What Customers are Talking </h3>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis non harum repellendus numquam dignissimos blanditiis</p>
                        <h4 class="title fontHeading text_primary mt-4">4.9/5 Rating</h4>
                        <ul>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 ps-lg-4">
                  <div class="testimonialSlider">
                     <div class="testimonialItem">
                        <div class="innerTestimonial">
                           <div class="testimonailHeader">
                              <div class="iconTesti">
                                 <picture>
                                    <source srcset="images/testimonial/testimonial.webp" type="image/webp" />
                                    <img src="images/testimonial/testimonial.jpg" />
                                 </picture>
                              </div>
                              <div class="rightTestiIcon">
                                 <p>Customer</p>
                                 <h4 class="title text_primary fontHeading">Alexa Novam</h4>
                              </div>
                           </div>
                           <hr class="mt-lg-4" />
                           <div class="testiContent">
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi rerum exercitationem velit incidunt! Id non suscipit dolore est placeat doloremque nesciunt debitis deleniti soluta aut, hic mollitia ullam illum explicabo!</p>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptate aut inventore veniam non! Amet, sunt.</p>
                           </div>
                           <div class="qoute">
                              <picture>
                                 <source srcset="images/icons/icon-quote.webp" type="image/webp" />
                                 <img src="images/icons/icon-quote.png" />
                              </picture>
                           </div>
                        </div>
                     </div>
                     <div class="testimonialItem">
                        <div class="innerTestimonial">
                           <div class="testimonailHeader">
                              <div class="iconTesti">
                                 <picture>
                                    <source srcset="images/testimonial/testimonial.webp" type="image/webp" />
                                    <img src="images/testimonial/testimonial.jpg" />
                                 </picture>
                              </div>
                              <div class="rightTestiIcon">
                                 <p>Customer</p>
                                 <h4 class="title text_primary fontHeading">Alexa Novam</h4>
                              </div>
                           </div>
                           <hr class="mt-lg-4" />
                           <div class="testiContent">
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi rerum exercitationem velit incidunt! Id non suscipit dolore est placeat doloremque nesciunt debitis deleniti soluta aut, hic mollitia ullam illum explicabo!</p>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptate aut inventore veniam non! Amet, sunt.</p>
                           </div>
                           <div class="qoute">
                              <picture>
                                 <source srcset="images/icons/icon-quote.webp" type="image/webp" />
                                 <img src="images/icons/icon-quote.png" />
                              </picture>
                           </div>
                        </div>
                     </div>
                     <div class="testimonialItem">
                        <div class="innerTestimonial">
                           <div class="testimonailHeader">
                              <div class="iconTesti">
                                 <picture>
                                    <source srcset="images/testimonial/testimonial.webp" type="image/webp" />
                                    <img src="images/testimonial/testimonial.jpg" />
                                 </picture>
                              </div>
                              <div class="rightTestiIcon">
                                 <p>Customer</p>
                                 <h4 class="title text_primary fontHeading">Alexa Novam</h4>
                              </div>
                           </div>
                           <hr class="mt-lg-4" />
                           <div class="testiContent">
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi rerum exercitationem velit incidunt! Id non suscipit dolore est placeat doloremque nesciunt debitis deleniti soluta aut, hic mollitia ullam illum explicabo!</p>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptate aut inventore veniam non! Amet, sunt.</p>
                           </div>
                           <div class="qoute">
                              <picture>
                                 <source srcset="images/icons/icon-quote.webp" type="image/webp" />
                                 <img src="images/icons/icon-quote.png" />
                              </picture>
                           </div>
                        </div>
                     </div>
                     <div class="testimonialItem">
                        <div class="innerTestimonial">
                           <div class="testimonailHeader">
                              <div class="iconTesti">
                                 <picture>
                                    <source srcset="images/testimonial/testimonial.webp" type="image/webp" />
                                    <img src="images/testimonial/testimonial.jpg" />
                                 </picture>
                              </div>
                              <div class="rightTestiIcon">
                                 <p>Customer</p>
                                 <h4 class="title text_primary fontHeading">Alexa Novam</h4>
                              </div>
                           </div>
                           <hr class="mt-lg-4" />
                           <div class="testiContent">
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi rerum exercitationem velit incidunt! Id non suscipit dolore est placeat doloremque nesciunt debitis deleniti soluta aut, hic mollitia ullam illum explicabo!</p>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptate aut inventore veniam non! Amet, sunt.</p>
                           </div>
                           <div class="qoute">
                              <picture>
                                 <source srcset="images/icons/icon-quote.webp" type="image/webp" />
                                 <img src="images/icons/icon-quote.png" />
                              </picture>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bgGrey">
         <div class="containerFull">
            <p class="textSub text-center">From The Blog</p>
            <h3 class="heading text-center text_primary fontHeading">Latest News &<br /> Articles From the Blog</h3>
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
      <section class="bgContact py-0 overflow-hidden">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6 ps-lg-0">
                  <div class="leftCotnact">
                     <div class="leftContactImg">
                        <picture>
                           <source srcset="images/contact-one-img-1.webp" type="image/webp" />
                           <img src="images/contact-one-img-1.png" />
                        </picture>
                     </div>
                     <div class="row justify-content-end">
                        <div class="col-lg-7">
                           <div class="cardContact">
                              <div class="iconPhone">
                                 <i class="fa-solid fa-phone-volume"></i>
                              </div>
                              <p>CALL NOW</p>
                              <h4 class="sub_heading fontHeading mt-3">10 Minutes Free for First Session</h4>
                              <p class="phoneText"><a href="tel:+91-12345 67890">+91-12345 67890</a></p>
                              <p class="phoneText mt-3"><a class="mt-1" href="mailto: info@beyondthebox.com"> info@beyondthebox.com</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="rightContact">
                     <p class="textLine">Contact with us</p>
                     <h3 class="heading fontHeading text_primary mt-3">Fill the Form, Book Online Consultations</h3>
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
                           <div class="col-lg-12">
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
                                       <option selected>Individual Therapy</option>
                                       <option value="Coupple Therapy">Coupple Therapy</option>
                                       <option value="Family Theraphy">Family Theraphy</option>
                                    </select>
                                    <label for="floatingSelect">Select Programs</label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="formItemRepeat">
                                 <div class="form-floating mb-2">
                                    <input type="date" required="" class="form-control" id="date" name="date" placeholder="name">
                                    <label for="date">Date</label>
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
                                 <button class="btnTheme mt-3">Send Request</button>
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