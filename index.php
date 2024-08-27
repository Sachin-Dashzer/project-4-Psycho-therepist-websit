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
                           <source srcset="images/banner-logo.webp" type="image/webp" />
                           <img src="images/banner-logo.png" alt="">
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

            <div class="row col-lg-10 offset-lg-1">


            <h3 class="heading text-center fontHeading text_primary mt-3">Featured Services</h3>
            <h5 class="text new_subHeading mt-3 text-center">Together we Thrive: Featured services at BTBWB </br>
               Here at Beyond the Box with Bhakti, we offer a comprehensive range of evidence-based therapeutic services that help you, help yourself. Explore the various kinds of support we provide:
            </h5>               
            </div>
            <div class="serviceSlider mt-4">
               <div class="serviceItem">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/therapy.webp" type="image/webp" />
                           <img src="images/icons/therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4 mb-3">Individual Therapy</h4>
                     <p>Take the deep dive into exploring yourself and learn to navigate life stressors and challenges like ADHD, trauma, Autism, Depression, Anxiety etc. Build healthy coping skills and learn to regulate your emotions to empower yourself to grow as an individual.</p>
                     <a href="#" class="text-center text mt-2 d-inline-block">Read More &nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>

                  </div>
               </div>
               <div class="serviceItem">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/couple-therapy.webp" type="image/webp" />
                           <img src="images/icons/couple-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4 mb-3">Couples Counselling</h4>
                     <p>Reignite the spark and build conflict resolution skills to steer your relationship towards a better tomorrow. Give your relationship another chance and through the therapeutic process, work on it to make it work. </p>
                     <a href="#" class="text-center text mt-2 d-inline-block">Read More &nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                  </div>
               </div>
               <div class="serviceItem">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/group-therapy.webp" type="image/webp" />
                           <img src="images/icons/group-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4 mb-3">Adolescent or teenage therapy</h4>
                     <p>Neither quite an adult, nor quite a kid. Adolescents or teens and tweens come with a number of adjustment issues including but not limited to navigating puberty, sexuality, adapting to the changes in life, behavioural issues, social anxiety and career choices. Put in the effort to enhance your life ahead.</p>
                     <a href="#" class="text-center text mt-2 d-inline-block">Read More &nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                  </div>
               </div>
               <div class="serviceItem">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/online-therapy.webp" type="image/webp" />
                           <img src="images/icons/online-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4 mb-3">Online Therapy</h4>
                     <p>If travelling to the clinic is a challenge for you due to geographical or time restraints, this option is for you. Remote therapy sessions from the comfort of your safe space-work on yourself anywhere, anytime!</p>
                     <a href="#" class="text-center text mt-2 d-inline-block">Read More &nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                  </div>
               </div>
               <div class="serviceItem">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/family-therapy.webp" type="image/webp" />
                           <img src="images/icons/family-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4 mb-3">Family Therapy</h4>
                     <p>From a therapist that comes from the South Asian background, your unique challenges that come from being in the collectivistic culture we live in can be addressed and worked upon as a family. Cultivate a nurturing, healthy family environment so that all of you can thrive and grow in the best possible manner, together. </p>
                     <a href="#" class="text-center text mt-2 d-inline-block">Read More &nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                  </div>
               </div>
               <div class="serviceItem">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/family-therapy.webp" type="image/webp" />
                           <img src="images/icons/family-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4 mb-3">Crisis intervention or mental health first aid</h4>
                     <p>In the time of a mental health crisis-be it a panic attack, suicidal thoughts, feeling severe emotional or mental distress, hearing voices or seeing things, going through a natural disaster-our therapist, trained in mental health first aid and crisis intervention will help you navigate the emergency. </p>
                     <a href="#" class="text-center text mt-2 d-inline-block">Read More &nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                  </div>
               </div>
               <div class="serviceItem">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/family-therapy.webp" type="image/webp" />
                           <img src="images/icons/family-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4 mb-3">LGBTQ++ therapy</h4>
                     <p>Being queer comes with it’s unique set of experiences and challenges- be it coming out, abuse, bullying, being unsure of your identity, anxiety, depression, etc. No matter who you are, or what you like, I would love to support you to live your best life. </p>
                     <a href="#" class="text-center text mt-2 d-inline-block">Read More &nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                  </div>
               </div>
               <div class="serviceItem">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/family-therapy.webp" type="image/webp" />
                           <img src="images/icons/family-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4 mb-3">Stress management</h4>
                     <p>In the high paced and advanced age of technology, stress is uquibitous. When it is chronic, and severe, it can cause not just mental health but a number of other problems as well. Reach out and manage the stress before the stress gets to you. With a number of strategies and mindful living, deal with the stress in a healthy manner. </p>
                     <a href="#" class="text-center text mt-2 d-inline-block">Read More &nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                  </div>
               </div>
               <div class="serviceItem">
                  <div class="overcomeItem">
                     <div class="iconOvercome">
                        <picture>
                           <source srcset="images/icons/family-therapy.webp" type="image/webp" />
                           <img src="images/icons/family-therapy.png" />
                        </picture>
                     </div>
                     <h4 class="title fontHeading text_primary text-center mt-4 mb-3">Corporate counselling and workshops</h4>
                     <p>Each workplace has it’s own set of challenges and when they get out of hand is when it starts affecting work and productivity of an individual. Be it personal issues or workplace issues- layoffs, or team disputes- Beyond the box with Bhakti provides corporate counselling in both individual and group settings to ensure optimum productivity as well as wellbeing. Also, workshops like team building workshops, or motivation seminars, art expression therapy workshops can be conducted, work on self so you can work for the company! A company that cares, hires a corporate counsellor!</p>
                     <a href="#" class="text-center text mt-2 d-inline-block">Read More &nbsp;<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
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






      <section>
         <div class="container">
            <div class="testimonialContainer">
               <h2 class="heading fontHeading text-center mb-4">Our Testimonial</h2>
               <div class="testimonialSlider">
                  <div class="testimonialBox">
                     <div class="userImg">
                        <picture>
                           <source srcset="images/dummy.webp" type="image/webp" />
                           <img src="images/dummy.jpg" />
                        </picture>
                     </div>
                     <h3 class="sub_heading mt-1 fontWeight700 fontHeading">H.S</h3>
                     <h5 class="text-primary">Client one</h5>
                     <div class="usertestimonial">
                        <i class="fa-solid fa-quote-left iconfirst"></i>
                        <i class="fa-solid fa-quote-right iconSecond"></i>
                        <p class="mt-4">Therapy with Bhakti has been nothing short of life-changing. It was very easy to connect with her. The process made me realise that I was holding on to what I knew was not the right path. She has shown me keeping your mind open is what brings the change you desire.</p>
                     </div>
                  </div>
                  <div class="testimonialBox">
                     <div class="userImg">
                        <picture>
                           <source srcset="images/dummy.webp" type="image/webp" />
                           <img src="images/dummy.jpg" />
                        </picture>
                     </div>
                     <h3 class="sub_heading mt-1 fontWeight700 fontHeading">D.K</h3>
                     <h5 class="text-primary">Client two</h5>
                     <div class="usertestimonial">
                        <i class="fa-solid fa-quote-left iconfirst"></i>
                        <i class="fa-solid fa-quote-right iconSecond"></i>
                        <p class="mt-4">I had the pleasure of taking healing therapy from Bhakti and my experience has been transformative. Through her guidance, I learned powerful techniques like reframing negative thoughts, which has helped me see challenges from a new perspective. She also introduced me to breathing exercises that have become an essential tool for managing stress and anxiety. Bhakti created a safe, supportive environment where I felt heard and understood. Her expertise and compassionate approach have made a significant positive impact on my life. Thank you so much!</p>
                     </div>
                  </div>
                  <div class="testimonialBox">
                     <div class="userImg">
                        <picture>
                           <source srcset="images/dummy.webp" type="image/webp" />
                           <img src="images/dummy.jpg" />
                        </picture>
                     </div>
                     <h3 class="sub_heading mt-1 fontWeight700 fontHeading">R.H</h3>
                     <h5 class="text-primary">Supervisor</h5>
                     <div class="usertestimonial">
                        <i class="fa-solid fa-quote-left iconfirst"></i>
                        <i class="fa-solid fa-quote-right iconSecond"></i>
                        <p class="mt-4">Bhakti is a skilled Psychologist who demonstrates passion and dedication to both personal and professional growth. Her ability to quickly grasp and conceptualize ideas, coupled with her persistent pursuit of mastery are her key strengths. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>










      <section class="bgAction">
         <div class="containerFull">
            <div class="row align-items-center">
               <div class="col-lg-9">
                  <h4 class="sub_heading text_primary fontHeading">Ready to make a change? </h4>
                  <h4 class="title text_primary fontHeading mt-3">Book your first session today and take the first step towards a more fulfilling life. Because your well being, is worth it. </h4>
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
                              <h4 class="small_heading fontHeading mt-3">What is therapy? <br /> &nbsp; </h4>
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
                              <h4 class="small_heading fontHeading mt-3">Mental health and physical health</h4>
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
                              <h4 class="small_heading fontHeading mt-3">How to know if the therapist is a right fit</h4>
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
                              <h4 class="small_heading fontHeading mt-3">Mental health and physical health</h4>
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