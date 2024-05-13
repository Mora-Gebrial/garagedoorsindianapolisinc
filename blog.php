<?php
// Do not modify anything yet
$loca = dirname(__FILE__);
include($loca.'/admin/route.php');
$blog = new BlogData();

// with a slash at the end
$blog->my['siteurl'] = 'https://garagedoorsindianapolisinc.com/';
$blog->my['blogtitle'] = 'Blog - Garage Doors Indianapolis Inc';
$blog->my['blogdescription'] = 'Blog - Our experienced technicians can provide quick and effective water heater repairs with only a phone call.';

// Checker
$blog->checkall();
$blog->sitemap();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<base href="https://garagedoorsindianapolisinc.com/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php
// in head instead of ( Title, description, keywords, canonical )
$blog->head(); ?>

    <meta name="revisit-after" content="1 month"/>
    <meta name="distribution" content="Global"/>
    <meta name="rating" content="Safe For Kids"/>
    <meta name="robots" content="index,all"/>
    <meta name="copyright" content="Garage Door Indianapolis IN" />
    <meta name="classification" content="Garage Door" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.webp">
  
    <link rel="stylesheet" type="text/css" href="print.css" media="print"/>
    <meta property="og:title" content="Garage Doors Indianapolis Inc - Installation & Repair Services" />
    <meta property="og:description" content="Blog - Our experienced technicians can provide quick and effective water heater repairs with only a phone call." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://garagedoorsindianapolisinc.com/" />
    <meta property="og:image" content="https://garagedoorsindianapolisinc.com/images/favicon.webp" />
    <meta property="og:site_name" content="Garage Door Indianapolis IN">
    <meta name="twitter:card" content=summary_large_image>
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="Garage Doors Indianapolis Inc - Installation & Repair Services">
    <meta name="twitter:description" content="Blog - Our experienced technicians can provide quick and effective water heater repairs with only a phone call.">
    <meta name="twitter:image" content="https://garagedoorsindianapolisinc.com/images/favicon.webp"/>
     <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "name": "Garage Door Indianapolis IN",
        "image": "https://garagedoorsindianapolisinc.com/assets/img/logo.webp",
        "url": "https://garagedoorsindianapolisinc.com/",
        "telephone": "317-721-8704",
        "email": "service@garagedoorsindianapolisinc.com",
        "description": "Secure your business with professional commercial door repair and installation services. Trust our experts for reliable solutions and lasting performance.",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "4445 East 10th Street  ",
          "addressLocality": "Indianapolis",
          "addressRegion": "IN",
          "postalCode": "46201",
          "addressCountry": "USA"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.8",
          "reviewCount": "335",
          "bestRating": "5",
          "worstRating": "3"
        },
        "priceRange": "$"
      }
    </script>

    <!-- Favicon -->
    <link href="img/favicon.webp" rel="icon">
    <link href="assets/img/apple-touch-icon.webp" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

  
    <style media="screen">
/*Blog*/
.blogbox{text-align:justify;padding:20px;background-color:#FFF;box-sizing:border-box;clear:both;overflow:hidden;margin-bottom:15px;box-shadow:3px 3px 7px rgba(0,0,0,0.2)}
.blogbox .blogimg img {float: right; width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.blogbox .read-more a{background-color:#ccc;color:#2D2D2D;padding:10px;border-radius:5px;border:1px solid #2D2D2D}
.blogbox .read-more a:hover {background-color:#2D2D2D;color:#FFF;letter-spacing: 2px;padding:10px 15px}
.blogpost {text-align: justify;padding:20px;background-color: #FFF;box-sizing: border-box}
.blogpost h1, .blogbox h1 {margin:0;font-size:28px;color:#222;}
.blogpost h2, .blogbox h2 {margin:0;font-size:24px;color:#222;}
.blogpost .blog_wrapper img {float: right; max-width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.socialbox{overflow:hidden;position:relative;text-align:center;width:100%;}
.social-share-btns{display:inline-block;overflow:hidden}
.social-share-btns .share-btn{float:left;margin:0 5px;padding:8px 16px;border-radius:3px;color:#fff;font-size:14px;line-height:18px;vertical-align:middle;transition:background .2s ease-in-out;display:flex;align-items:center;}
.social-share-btns .share-btn svg {fill:currentColor;height:1rem;width:1rem;margin-right:10px;}
.share-btn{background-color:#95a5a6}
.share-btn:hover{background-color:#798d8f}
.share-btn-twitter{background-color:#00aced}
.share-btn-twitter:hover{background-color:#0087ba}
.share-btn-facebook{background-color:#3b5998}
.share-btn-facebook:hover{background-color:#2d4373}
.share-btn-linkedin{background-color:#007bb6}
.share-btn-linkedin:hover{background-color:#005983}
@media only screen and (max-width:700px){
.blogbox .blogimg img{max-width:90%;width:auto}
}
</style>

</head>

<body>
<div class="container-fluid bg-white p-0">
    


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg  navbar-light py-0 px-4">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
          
            <img src="img/logo.webp" alt="logo" title="garagedoorsindianapolisinc.com"

class="img-fluid logo">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="https://garagedoorsindianapolisinc.com/" class="nav-item nav-link ">Home</a>
                    <a href="repair.html" class="nav-item nav-link">Repair</a>
                    <a href="spring.html" class="nav-item nav-link">Spring</a>
                    <a href="residential.html" class="nav-item nav-link">Residential</a>
                    <a href="commercial.html" class="nav-item nav-link">Commercial</a>
                    <a href="blog/" class="nav-item nav-link active">Blog</a>
    
                    <a href="contact-us.html" class="nav-item nav-link ">Contact</a>
                </div>
                <a href="tel:3177218704" class="btn btn-primary px-3 d-none d-lg-flex">317-721-8704</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4" style="color: #003566;">Garage Door Installation Indianapolis IN</h1>
                <p class="animated fadeIn mb-4 pb-2" style="color: black;">Are you in need of a reliable garage door service company? If you are one of the 840,000 people who live in Indianapolis, you may not be sure who to call. Garage Door Indianapolis IN is a company you can depend on whenever you need service for you garage door. Our team of technicians are experienced in a wide variety of repairs and will provide excellent service each time we are called.</p> 
                <p class="animated fadeIn mb-4 pb-2"  style="color: black;">Garage door opener installation is one of the many services we offer. Nobody likes having to get out to open and close their garage door multiple times a day, which is why openers were invented. We can install this piece of technology for you so you don’t have to worry about opening your door in the rain anymore.</p>
                <a href="" class="btn  py-3 px-5 me-3 animated fadeIn" style="background-color: #003566; color: white; letter-spacing: 3px;"> <i class="bi bi-telephone-fill"></i> 317-721-8704</a>
            </div>
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/garage-door-home1.webp" style="height: 800px;" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/garage-door-home2.webp" alt="" style="height: 800px;" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Search Start -->
    <div class="container-fluid mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px; background-color: #c9c9c9;">
        <div class="container">
   
            <div class="row g-2">
          <div class="col-lg-2 text-center">
            <h2 class="mt-2">Contact Us</h2>
          </div>
          
                <div class="col-lg-10">
                    <form class="form" method="post" action="contact-form-handler.php ">
                    <div class="row g-2">
                        <div class="col-lg-2">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" style="padding: 18px 12px;" required>
                            <input aria-label="name" name="spam" type="text" class="spam" placeholder="spam" style="display: none;">
                        </div>
                        <div class="col-lg-2">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" style="padding: 18px 12px;"required>
                        </div>
                        <div class="col-lg-2">
                            <input type="tele"  class="form-control" name="tele" id="subject" placeholder="Your Phone" style="padding: 18px 12px;" required>
                        </div>
                        <div class="col-lg-4">
                            <textarea class="form-control" name="special_request" rows="2" placeholder="Message" required></textarea>
                        </div>

                            <div class="col-lg-2 text-center">
                                <button type="submit" class=" btn-white w-20 fw-bold rounded send mt-1" style="background-color: #003566; color: white; border: 0; padding: 16px; ">Send Message</button>
                        </div>
                    </div>
                      </form>
                </div>
           
          
            </div>
      
        </div>
    </div>
    <!-- Search End -->

    <div class="container">
  <div class="row"><div class="col-12">
  <?php
// in content box
$blog->content(); ?>
  </div>
</div>
</div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn footer" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">        <img src="img/logo.webp" alt="logo" title="garagedoorsindianapolisinc.com"

class="img-fluid logo"></h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>4445 East 10th St.
                        </p>
                        <p class="mb-2"><i class="bi bi-clock-fill me-3"></i>Mon - Fri : 8AM-8PM <br>
                         &nbsp; &nbsp; &nbsp; &nbsp;  Sat - Sun : 9AM-5PM
                            
                        </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>317-721-8704</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><span id="obfuscatedEmail">Please enable JavaScript to view the email address</span>
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4 text-center">Location</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3066.189597786005!2d-86.09640562359635!3d39.78030029412821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b5027884fd333%3A0x294fd5777d261935!2s4445%20E%2010th%20St%2C%20Indianapolis%2C%20IN%2046201%2C%20USA!5e0!3m2!1sen!2seg!4v1714046050083!5m2!1sen!2seg" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         
                </div>
                <div class="col-lg-3 col-md-6 zip text-center">
                    <h5 class="text-white mb-4 text-center">Zip Codes</h5>
                 
                   
                            <a href="#" class="btn info-btn mb-1 btn-sm ">77001</a>
                  
                            <a href="#" class="btn info-btn mb-1 btn-sm">77002</a>
                
                      
                            <a href="#" class="btn info-btn mb-1 btn-sm">77003</a>
         
          


               
                            <a href="#" class="btn info-btn mb-1 btn-sm">77006</a>
          
                        


       
                            <a href="#" class="btn info-btn mb-1 btn-sm">77007</a>
          
                            <a href="#" class="btn info-btn mb-1 btn-sm">77002</a>
             
            
                            <a href="#" class="btn info-btn mb-1 btn-sm">77003</a>
     
          
                            <a href="#" class="btn info-btn mb-1 btn-sm">77004</a>
     
      
                            <a href="#" class="btn info-btn mb-1 btn-sm">77005</a>
             
              
                            <a href="#" class="btn info-btn mb-1 btn-sm">77006</a>
               



                
          
            
                            <a href="#" class="btn info-btn mb-1 btn-sm">77002</a>
                
                      
                            <a href="#" class="btn info-btn mb-1 btn-sm">77003</a>
                
                  
                            <a href="#" class="btn info-btn mb-1 btn-sm">77004</a>
                
                   
                            <a href="#" class="btn info-btn mb-1 btn-sm">77005</a>
                    
                    
                            <a href="#" class="btn info-btn mb-1 btn-sm">77006</a>
       



         
                            <a href="#" class="btn info-btn mb-1 btn-sm">77007</a>
                   
                  
                            <a href="#" class="btn info-btn mb-1 btn-sm">77002</a>
               

                            <a href="#" class="btn info-btn mb-1 btn-sm">77003</a>
          
               
                            <a href="#" class="btn info-btn mb-1 btn-sm">77004</a>
               
                            <a href="#" class="btn info-btn mb-1 btn-sm">77005</a>
            
            
                            <a href="#" class="btn info-btn mb-1 btn-sm">77006</a>
        


                            <a href="#" class="btn info-btn mb-1 btn-sm">77007</a>
      
  
                   
                 
         
                </div>
                <div class="col-lg-3 col-md-6 text-center location">
                    <h5 class="text-white mb-4">Service Locations</h5>
                    <a href="#" class="btn info-btn m-1 btn-sm">Beech Grove</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Lawrence</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Greenwood</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Plainfield</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Brownsburg</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Zionsville</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Carmel </a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Fishers</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Mooresville</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Westfield</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Franklin</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Greenfield</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Noblesville</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Lebanone</a>
                    <a href="#" class="btn info-btn m-1 btn-sm">Speedway</a>
              
                </div>



            </div>
        </div>
        <div class="container">
            <div class="copyright text-center">
                <p>
                  &copy; 2024 <strong><span>garagedoorsindianapolisinc.com</span></strong> .
                  All Rights Reserved
                </p>
              </div>
          
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>













    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        var user = 'service';
        var domain = 'garagedoorsindianapolisinc.com';
        var element = document.getElementById('obfuscatedEmail');
        element.innerHTML = '<a href="mailto:' + user + '@' + domain + '">' + user + '@' + domain + '</a>';
    </script>
    
</body>
</html>