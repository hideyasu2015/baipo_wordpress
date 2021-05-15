<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baipo</title>
  <link rel="stylesheet" href="destyle.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/media.css">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/01_images/favicon.ico">
</head>

<body>
  <div id="wrap">
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container">
          <a class="navbar-brand" href="<?php echo home_url();?>"><img class="logo"
              src="<?php echo get_template_directory_uri(); ?>/01_images/icon/flower_top.png">BAI PO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="Navbar">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item px-3">
                <a class="nav-link enabled" href="<?php echo home_url();?>" tabindex="-1" aria-disabled="true">Top</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link enabled" href="#pricing-table" tabindex="-1" aria-disabled="true">Menu</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link enabled" href="#costumers-voice" tabindex="-1" aria-disabled="true">Customer's
                  Voice</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link enabled" href="#accsess-map" tabindex="-1" aria-disabled="true">Access</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link enabled" href="blog.html" tabindex="-1" aria-disabled="true">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- カルーセル -->
    <section id="main">
      <h1 class="welcome1 text-center">BAI PO</h1>
      <h2 class="welcome2 text-center">Thai Massage</h2>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
          </ol>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active top-image1"></div>
          <div class="carousel-item top-image2"></div>
          <div class="carousel-item top-image3"></div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </button>
        </div>
      </div>
    </section>


    <section id="costumers-voice">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mt-5 mb-3">
            <h2 class="content-title text-center">Happy Customer</h2>
          </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="voice-read col-lg-7 col-md-11 col-md-offset-2 p-4">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="voice-img" src="<?php echo get_template_directory_uri(); ?>/01_images/customer_1.jpg"
                        alt="">
                    </div>
                    <div class="col-md-9">
                      <p>Atjima Kapkaew(Ying Ajm)</p>
                      <p>ยินดีโตยจ้าว</p>
                      <div class="read-more voice-read-more"><a href="#">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="voice-read col-lg-7 col-md-11 col-md-offset-2 p-4">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="voice-img" src="<?php echo get_template_directory_uri(); ?>/01_images/customer_2.jpg"
                        alt="">
                    </div>
                    <div class="col-md-9">
                      <p>MrKocoman Pitakwong</p>
                      <p>เพิ่มรุปประตูหน้าร้านด้วยดิครับ
                        ผ่านการรับรอง
                        มีมาตรการควบคุม...
                        จัดไปเฮงๆๆๆ</p>
                      <div class="read-more voice-read-more"><a href="#">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
    </section>



    <section id="what-we-do">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-5">
            <h1>What we do</h1>
            <!-- <p>LOREM IPSUM DOLOR.</p> -->
            <img class="do-img img-fluid mb-2"
              src="<?php echo get_template_directory_uri(); ?>/01_images/baipo_image_1.jpg" alt="">
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-lg-3 col-md-6 text-center" data-aos="fade-left" data-aos-delay="100">
                <img class="do-icon mb-2"
                  src="<?php echo get_template_directory_uri(); ?>/01_images/price_1_thaimassage_600.jpg" alt="">
                <p>Thai Massage</p>
              </div>
              <div class="col-lg-3 col-md-6 text-center" data-aos="fade-left" data-aos-delay="200">
                <img class="do-icon mb-2"
                  src="<?php echo get_template_directory_uri(); ?>/01_images/price_4_aromaoilmassage_600.jpg" alt="">
                <p>Aromaoil Massage</p>
              </div>
              <div class="col-lg-3 col-md-6 text-center" data-aos="fade-left" data-aos-delay="300">
                <img class="do-icon mb-2"
                  src="<?php echo get_template_directory_uri(); ?>/01_images/price_5_hotoilmassage_600.jpg" alt="">
                <p>Hot Sauna</p>
              </div>
              <div class="col-lg-3 col-md-6  text-center" data-aos="fade-left" data-aos-delay="400">
                <img class="do-icon mb-2"
                  src="<?php echo get_template_directory_uri(); ?>/01_images/price_2_footmassage.jpg" alt="">
                <p>Foot Massage</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h2 class="our-service">Our Service</h2>
                <p>We are a massage shop south of Chiang Mai.
                  Try a clean, easy to talk atmosphere and technical.
                  Reasonable prices are also popular.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!--================ pricing-table============= -->
    <section id="pricing-table">
      <div class="container mt-5 back-color">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center mt-5 mb-4">Pricing Table</h2>
          </div>
        </div>
        <!-- <div class="row">
                   <div class="col-md-7 col-md-offset-2 m-auto">
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab animi illum,
                            culpa delectus, libero exercitationem eaque dignissimos laudantium,
                            modi nostrum reprehenderit quod? Quas molestias, distinctio voluptas saepe cum blanditiis!</p>                    
                    </div>
                </div> -->
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="spa-icon"><i class="fas fa-spa"></i></div>
          </div>
        </div>
      </div>
      <div class="container back-color">
        <div class="row">
          <div class="relative col-md-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- <div class="purchase p-blue"><h3>Thai Massage</h3></div> -->
            <!-- <h3 class="pricing-silver p-blue">Thai Massage</h3> -->
            <img class="img-price img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/01_images/price_1_thaimassage_600.jpg" alt="">
            <div class="price-back text-center">
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>1hour</span><span>200B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5">
                <span>1.5hour</span><span>300B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour  d-flex justify-content-between mt-2 ms-5 me-5"><span>2hour</span><span>400B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
            </div>
            <div class="purchase p-blue">
              <h3>Thai Massage</h3>
            </div>
          </div>
          <div class="relative col-md-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- <div class="purchase p-pink"><h3>Foot Massage</h3></div> -->
            <!-- <h3 class="pricing-silver p-pink">Foot Massage</h3> -->
            <img class="img-price img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/01_images/price_2_footmassage_600.jpg" alt="">
            <div class="price-back text-center">
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>1hour</span><span>200B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5">
                <span>1.5hour</span><span>300B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>2hour</span><span>400B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
            </div>
            <div class="purchase p-pink">
              <h3>Foot Massage</h3>
            </div>
            <!-- <div class="purchase p-pink"><p>Purchase</p></div> -->
          </div>
          <div class="relative col-md-4  mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- <h3 class="pricing-silver p-yellow">Therapy Massage</h3>  -->

            <img class="img-price img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/01_images/price_3_therapymassage_640.jpg" alt="">
            <div class="price-back text-center">
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>1hour</span><span>300B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5">
                <span>1.5hour</span><span>450B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>2hour</span><span>600B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
            </div>
            <div class="purchase p-yellow">
              <h3>Therapy Massage </h3>
            </div>
            <!-- <div class="purchase p-yellow"><p>Purchase</p></div> -->

          </div>
        </div>
        <div class="row">
          <div class="relative col-md-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- <h3 class="pricing-silver p-blue">Aroma Oil Massage</h3> -->
            <img class="img-price img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/01_images/price_4_aromaoilmassage_600.jpg" alt="">
            <div class="price-back text-center">
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>1hour</span><span>300B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5">
                <span>1.5hour</span><span>450B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>2hour</span><span>600B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
            </div>
            <div class="purchase p-blue">
              <h3>Aroma Oil Massage</h3>
            </div>
            <!-- <div class="purchase p-blue"><p>Purchase</p></div> -->
          </div>
          <div class="relative col-md-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- <h3 class="pricing-silver p-pink">Hot Oil Massage</h3> -->
            <img class="img-price img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/01_images/price_5_hotoilmassage_600.jpg" alt="">
            <div class="price-back text-center">
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>1hour</span><span>350B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5">
                <span>1.5hour</span><span>530B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>2hour</span><span>700B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
            </div>
            <div class="purchase p-pink">
              <h3>Hot Oil Massage</h3>
            </div>
            <!-- <div class="purchase p-pink"><p>Purchase</p></div> -->
          </div>
          <div class="relative col-md-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- <h3 class="pricing-silver p-yellow">Herbal Compressing</h3> -->
            <img class="img-price img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/01_images/price_6_herbalcompressing_600.jpg" alt="">
            <div class="price-back text-center">
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>1hour</span><span>300B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5">
                <span>1.5hour</span><span>450B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
              <div class="price-hour d-flex justify-content-between mt-2 ms-5 me-5"><span>2hour</span><span>600B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
            </div>
            <div class="purchase p-yellow">
              <h3>Herbal Compressing</h3>
            </div>
            <!-- <div class="purchase p-yellow"><p>Purchase</p></div> -->
          </div>
        </div>
        <div class="row">
          <div class="relative col-md-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- <h3 class="pricing-silver p-blue">Body Scrub</h3> -->
            <img class="img-price img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/01_images/price_7_bodyscrub_600.jpg" alt="">
            <div class="price-back text-center">
              <div class="price-hour d-flex justify-content-between mt-5 ms-5 me-5"><span>1hour</span><span>490B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
            </div>
            <div class="purchase p-blue">
              <h3>Body Scrub</h3>
            </div>
            <!-- <div class="purchase p-blue"><p>Purchase</p></div> -->
          </div>
          <div class="relative col-md-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- <h3 class="pricing-silver p-pink">Face Massage</h3> -->
            <img class="img-price img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/01_images/price_8_facemassage_640.jpg" alt="">
            <div class="price-back text-center">
              <div class="price-hour d-flex justify-content-between mt-5 ms-5 me-5"><span>1hour</span><span>350B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
            </div>
            <div class="purchase p-pink">
              <h3>Face Massage</h3>
            </div>
            <!-- <div class="purchase p-pink"><p>Purchase</p></div> -->
          </div>
          <div class="relative col-md-4  mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- <h3 class="pricing-silver p-yellow">Hand Spa</h3> -->
            <img class="img-price img-fluid"
              src="<?php echo get_template_directory_uri(); ?>/01_images/price_9_handspa_600.jpg" alt="">
            <div class="price-back text-center">
              <div class="price-hour d-flex justify-content-between mt-5 ms-5 me-5"><span>1hour</span><span>250B</span>
              </div>
              <div class="price-line  border-bottom border-secondary mt-2"></div>
            </div>
            <div class="purchase p-yellow">
              <h3>Face Massage</h3>
            </div>
            <!-- <div class="purchase p-yellow"><p>Purchase</p></div> -->
          </div>
        </div>
      </div>
    </section>

    <!-- Amazing Service -->
    <section id="amazing-service">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center mb-4">Amazing Service</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12  text-center">
            <div class="spa-icon"><i class="fas fa-spa"></i></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 relative">
            <img class="img-amazing" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_1_640.jpg"
              alt="">
            <div class="amazing-color-text amazing-color-blue">
              <div class="row">
                <div class="col-md-12 relative">
                  <img class="amazing-icon"
                    src="<?php echo get_template_directory_uri(); ?>/01_images/icon/towels_1.png" alt="">
                  <div class="amazing-text-group">
                    <p class="natus text-center">AMET MINUS NATUS</p>
                    <p class="quasi text-center">QUASI BEATAE QUIDEM</p>
                    <p class="amet-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab
                      animi illum,
                      culpa delectus, libero exercitationem eaque dignissimos laudantium,
                    </p>
                    <div class="read-more amazing-read-more"><a href="#">Read More</a></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4 relative">
            <img class="img-amazing" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_2_640.jpg"
              alt="">
            <div class="amazing-color-text amazing-color-pink">
              <div class="row">
                <div class="col-md-12">
                  <img class="amazing-icon" src="<?php echo get_template_directory_uri(); ?>/01_images/icon/spa_2.png"
                    alt="">
                  <div class="amazing-text-group">
                    <p class="natus text-center">AMET MINUS NATUS</p>
                    <p class="quasi text-center">QUASI BEATAE QUIDEM</p>
                    <p class="amet-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab
                      animi illum,
                      culpa delectus, libero exercitationem eaque dignissimos laudantium,
                    </p>
                    <div class="read-more amazing-read-more"><a href="#">Read More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 relative">
            <img class="img-amazing" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_3_640.jpg"
              alt="">
            <div class="amazing-color-text amazing-color-yellow">
              <div class="row">
                <div class="col-md-12">
                  <img class="amazing-icon" src="<?php echo get_template_directory_uri(); ?>/01_images/icon/foot_3.png"
                    alt="">
                  <div class="amazing-text-group">
                    <p class="natus text-center">AMET MINUS NATUS</p>
                    <p class="quasi text-center">QUASI BEATAE QUIDEM</p>
                    <p class="amet-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab
                      animi illum,
                      culpa delectus, libero exercitationem eaque dignissimos laudantium,
                    </p>
                    <div class="read-more amazing-read-more"><a href="#">Read More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 relative">
            <img class="img-amazing" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_4_640.jpg"
              alt="">
            <div class="amazing-color-pink">
              <div class="col-md-12">
                <img class="amazing-icon"
                  src="<?php echo get_template_directory_uri(); ?>/01_images/icon/essential-oil_5.png" alt="">
                <div class="amazing-text-group">
                  <p class="natus text-center">AMET MINUS NATUS</p>
                  <p class="quasi text-center">QUASI BEATAE QUIDEM</p>
                  <p class="amet-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab animi
                    illum,
                    culpa delectus, libero exercitationem eaque dignissimos laudantium,
                  </p>
                  <div class="read-more amazing-read-more"><a href="#">Read More</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 relative">
            <img class="img-amazing" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_5_640.jpg"
              alt="">
            <div class="amazing-color-yellow">
              <div class="col-md-12">
                <img class="amazing-icon"
                  src="<?php echo get_template_directory_uri(); ?>/01_images/icon/hand-cream_6.png" alt="">
                <div class="amazing-text-group">
                  <p class="natus text-center">AMET MINUS NATUS</p>
                  <p class="quasi text-center">QUASI BEATAE QUIDEM</p>
                  <p class="amet-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab animi
                    illum,
                    culpa delectus, libero exercitationem eaque dignissimos laudantium,
                  </p>
                  <div class="read-more amazing-read-more"><a href="#">Read More</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 relative">
            <img class="img-amazing" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_6_640.jpg"
              alt="">
            <div class="amazing-color-blue">
              <div class="col-md-12">
                <img class="amazing-icon" src="<?php echo get_template_directory_uri(); ?>/01_images/icon/lotion_6.png"
                  alt="">
                <div class="amazing-text-group">
                  <p class="natus text-center">AMET MINUS NATUS</p>
                  <p class="quasi text-center">QUASI BEATAE QUIDEM</p>
                  <p class="amet-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab animi
                    illum,
                    culpa delectus, libero exercitationem eaque dignissimos laudantium,
                  </p>
                  <div class="read-more amazing-read-more"><a href="#">Read More</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Amazing Opning hours -->
    <section id="hours">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center mb-4">Opening hours</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12  text-center">
            <div class="spa-icon"><i class="fas fa-spa"></i></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="relative">
              <div class="img-hours">
                <div class="row">
                  <div class="col-md-6">
                    <div class="hours-color-blue">
                      <div class="row m-4">
                        <div class="col-md-12">
                          <h2 class="mb-5">OPENING HORUS</h2>
                          <div class="row">
                            <div class="col-md-12 m-0 text-center hours-list">
                              <span class="open">Open Daily</span>
                              <span class="time">9.30 am - 9.00 pm</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <!--================ Our Gallery============= -->
    <section class="our-gallery">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center mb-4">Our Gallery</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12  text-center">
            <div class="spa-icon"><i class="fas fa-spa"></i></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="gallery col-md-3 ps-0 pe-0 pb-1">
            <img class="img-gallery" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_1.jpg" alt=""
              class="">
          </div>
          <div class="gallery col-md-3 ps-0 pe-0 pb-1">
            <img class="img-gallery" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_4.jpg" alt=""
              class="">
          </div>
          <div class="gallery col-md-3 ps-0 pe-0 pb-1">
            <img class="img-gallery" src="<?php echo get_template_directory_uri(); ?>/01_images/hours.png" alt=""
              class="">
          </div>
          <div class="gallery col-md-3 ps-0 pe-0 pb-1">
            <img class="img-gallery" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_5.jpg" alt=""
              class="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ps-0 pe-0 pb-1">
            <img class="img-gallery" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_6.jpg" alt=""
              class="">
          </div>
          <div class="col-md-3 ps-0 pe-0 pb-1">
            <img class="img-gallery" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_13.jpg" alt=""
              class="">
          </div>
          <div class="col-md-3 ps-0 pe-0 pb-1">
            <img class="img-gallery" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_2.jpg" alt=""
              class="">
          </div>
          <div class="col-md-3 ps-0 pe-0 pb-1">
            <img class="img-gallery" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_12.jpg" alt=""
              class="">
          </div>
        </div>
      </div>
    </section>


    <!--================ Latest News ============= -->
    <section id="latest-news">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center mb-4">Latest News</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12  text-center">
            <div class="spa-icon"><i class="fas fa-spa"></i></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-right" data-aos-delay="500">
            <img class="img-news" src="<?php echo get_template_directory_uri(); ?>/01_images/latestnews_1.jpeg" alt="">
            <div class="row">
              <!-- <div class="col-md-3">
                                <img class="icon-news img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_7_640.jpg" alt="">
                            </div> -->
              <div class="col-md-4 text-md-center mt-3">
                <h2 class="news-sub-color">03</h2>
                <p class="news-sub-color">FEB</p>
              </div>
              <div class="col-md-8 mt-3">
                <h3 class="news-color">BAI PO TONG Thai Massage</h3>
                <span class="news-sub-color pe-5">BY Crumina</span>
                <span class="news-sub-color">100 comments</span>
              </div>
            </div>
            <div class="row">
              <div class="news-main-color col-md-12 mt-3">
                <p>เชิญคะ..โปรพิเศษสำหรับเดือนแห่งความรัก...รักผิว รักสุขภาพ...รักตัวเอง ดูแลตัวเอง...</p>
              </div>
            </div>
            <div class="col-md-12 pb-3">
              <div class="read-more news-read-more"><a href="#">Read More</a></div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-left" data-aos-delay="500">
            <img class="img-news" src="<?php echo get_template_directory_uri(); ?>/01_images/latestnews_2.jpg" alt="">
            <div class="row">
              <!-- <div class="col-md-3">
                                <img class="icon-news img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/01_images/gallery_7_640.jpg" alt="">
                            </div> -->
              <div class="col-md-4 text-md-center mt-3">
                <h2 class="news-sub-color">03</h2>
                <p class="news-sub-color">FEB</p>
              </div>
              <div class="col-md-8 mt-3">
                <h3 class="news-color">BAI PO TONG Thai Massage</h3>
                <span class="news-sub-color pe-5">BY Crumina</span>
                <span class="news-sub-color">100 comments</span>
              </div>
            </div>
            <div class="row">
              <div class="news-main-color col-md-12 mt-3">
                <p>สวัสดี 🥰 กุมภาพันธ์ เดือนแห่งความรัก จะมาเป็นคู่ หรือมาคนเดียว เดี่ยวๆ
                  ก็สวยก็หล่อเฟี้ยวฟ้าวได้น๊าาาาา
                  พาร่างกายมาผ่อนคลาย หายเมื่อย ต้อนรับเดือนแห่งความรัก กันได้ที่ ร้านนวดแผนไทยใบโพธิ์ทอง2
                  นวดหน้า ขัดตัว ต่อด้วยนวดน้ำมัน ป๊าดดดดโซะ มันดีจริงๆ นะ ขอบอก
                  ปรนนิบัติผิวและร่างกายให้หายเมื่อย ทักแชทมาได้นะคะ </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="read-more news-read-more"><a href="#">Read More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!--================ MAP ============= -->
    <section id="accsess-map">
      <div class="container-fuluid">
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center mb-4">Map</h2>
              <h2 class="text-center mb-4">We move to second floor of Marry Restaurant</h2>

            </div>
          </div>
          <div class="row">
            <div class="col-md-12  text-center">
              <div class="spa-icon"><i class="fas fa-spa"></i></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
            <div id="map" style="height: 500px; width: 100%;"></div>
          </div>
        </div>
      </div>
    </section>




    <footer class="pb-0">
      <section id="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 mt-5">
              <p class="text-white mb-1 ms-4">ADDRESS</p>
              <div class="footer-line  border-bottom border-info ms-4 w-75 mb-4"></div>
              <ul class="ms-5">
                <li><a class="location-child text-white-50" href="#"><i
                      class="fas fa-map-marker-alt me-2 text-white-50"></i>89PLAZA Chiang Mai-Lamphun Rd, Tambon Nong
                    Hoi, Amphoe Mueang Chiang Mai, Chang Wat Chiang Mai 50000</a></li>
                <li><a class="location-child text-white-50" href="#"><i
                      class="fas fa-map-marker-alt me-2 text-white-50"></i>89 พลาซ่า ถนน เชียงใหม่-ลำพูน ตำบลหนองหอย
                    อำเภอเมืองเชียงใหม่ เชียงใหม่ 50000</a></li>
              </ul>
            </div>
            <div class="col-md-6 mt-5">
              <p class="text-white mb-1 ms-4">SNS</p>
              <div class="footer-line  border-bottom border-info ms-4 w-75 mb-4"></div>
              <div class="row">
                <div class="col-md-12 mb-5 ms-5 w-100">
                  <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBaiPoThaimassage%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 footer-tel mt-5">
              <h2 class="text-white text-center">Tel : 082-390-3905</h2>
              <h4 class="text-white text-center">English is available</h4>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-12 text-center">
              <p class="copy">Copyright © 2019 · All Rights Reserved · BAI PO TONG and Hide</p>
            </div>
          </div>
        </div>
      </section>
    </footer>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- AOS -->
  <script>
  AOS.init();
  </script>
  <!-- googlemap -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOe4IlPm4VSZ8i2dgPo6cIdVucqujBJbA&callback=shojiMap&libraries=&v=weekly"
    defer></script>
  <script>
  let map;

  function shojiMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {

        lat: 18.75212294626924,
        lng: 99.00882671687145
      },
      zoom: 17,
    });
    const marker = new google.maps.Marker({
      // The below line is equivalent to writing:
      // position: new google.maps.LatLng(-34.397, 150.644)
      position: {
        lat: 18.75212294626924,
        lng: 99.00882671687145
      },
      map: map,
    });
  }
  </script>

</body>

</html>