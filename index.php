<?php include('admin502/database/dbconfig.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kritika Lawn & Banquet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Indian weddings are all about opulence, vibrant settings that blend with the traditional aesthetics of a marriage. All the modern trends of weddings should be incorporated beautifully in all the traditions and cultures." />
    <meta name="keywords" content="kritika, lawn, and, bnaquet, hall, wedding, event, birthday, party, marriage, ring, ceremony, tilak, shadi, function, decoration, Corporate, meetings, Indian, weddings, are, all, about, opulence, vibrant, settings, that, blend, with, the, traditional, aesthetics, of, a, marriage, All, the, modern, trends, of, weddings, should, be, incorporated, beautifully, in, all, the, traditions, and, cultures," />
    <meta name="author" content="kritikalwanandbanquet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css1/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css1/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css1/slider.css">
    <script src="js1/jquery-1.7.min.js"></script>
    <script src="js1/jquery.easing.1.3.js"></script>
    <script src="js1/tms-0.4.1.js"></script>
    <script>
        $(document).ready(function () {
            $('.slider')._TMS({
                show: 0,
                pauseOnHover: true,
                prevBu: '.prev',
                nextBu: '.next',
                playBu: false,
                duration: 800,
                preset: 'fade',
                pagination: '.pags',
                pagNums: false,
                slideshow: 7000,
                numStatus: false,
                banners: false,
                waitBannerAnimation: false,
                progressBar: false
            })
        });
</script>
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <style>
        .fh5co-nav-toggle {
            top:5px;
        }
          #fh5co-started .btn {
	        margin-top: 15px;
	    }
        .fh5co-nav {
            display: none;
        }

        .pagination > li > a {
            padding: 0px;
        }

        @media only screen and (max-width: 600px) {
            .pagination {
                display: none;
            }

            header {
                display: none;
            }

            .fh5co-nav {
                display: block;
                background-image: url("images1/sub-pages-bg.jpg");
                background-size: cover;
            }
        }

        @media only screen and (max-width: 768px) {
            header {
                display: none;
            }

            .fh5co-nav {
                display: block;
            }

                .fh5co-nav #fh5co-logo {
                    margin-top: -23px;
                }
        }		
		
        /*video gallery css*/
.video-container {
  width: 100%;
  padding: 10px;
  background: white;
  display: inline-block;
}
.responsive-video {  
  position: relative;
  display: block;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%;
}
.responsive-video iframe, .responsive-video video {
  position: absolute;
  width: 100%;
  height: 100%;  
}
    </style>
</head>
<body>
    <div id="page">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h1><a href="index.php">
                            <img src="images1/logo.png" alt=""></a></h1>
                    </div>
                    <div class="col-md-9">
                        <nav>
                            <ul class="menu">
                                <li class="active"><a href="index.php">Home</a></li>
								<li><a href="services.php">Our Service</a></li>
								<li><a href="gallery.php">	Gallery</a></li>
								<!-- <li><a href="#">Links</a></li> -->
								<li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <nav class="fh5co-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div id="fh5co-logo"><a href="index.php"><img src="images1/logo.png" alt="" style="width:100%"></a></div>
                    </div>
                    <div class="col-xs-6 text-right menu-1">
                      	<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="services.php">Our Service</a></li>
						<li><a href="gallery.php">	Gallery</a></li>
						<!-- <li><a href="#">Links</a></li> -->
						<li><a href="contact.php">Contact</a></li>
					</ul>
                    </div>
                </div>

            </div>
        </nav>
        <div id="slide">
            <div class="slider">
                <ul class="items">
                    <li>
                        <img src="images1/slider1.jpg" alt=""></li>
                    <li>
                        <img src="images1/slider2.jpg" alt=""></li>
                    <li>
                        <img src="images1/slider3.jpg" alt=""></li>
                    <li>
                        <img src="images1/slider4.jpg" alt=""></li>
                </ul>
            </div>
            <ul class="pags">
                <li><a href="#">
                    <img src="images1/slider-1-small.jpg" alt=""><span></span></a></li>
                <li><a href="#">
                    <img src="images1/slider-2-small.jpg" alt=""><span></span></a></li>
                <li><a href="#">
                    <img src="images1/slider-3-small.jpg" alt=""><span></span></a></li>
                <li><a href="#">
                    <img src="images1/slider-4-small.jpg" alt=""><span></span></a></li>
            </ul>
            <a href="#" class="prev">&nbsp;</a><a href="#" class="next">&nbsp;</a>
        </div>        
        <!--==============================content================================-->
        <div id="fh5co-services" class="fh5co-section-gray">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Why Book Our Services</h2>
                        <p>Indian weddings are all about opulence, vibrant settings that blend with the traditional aesthetics of a marriage. All the modern trends of weddings should be incorporated beautifully in all the traditions and cultures.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                               <img src="images/whychooseusicon1.png">
                            </span>
                            <div class="feature-copy">
                                <h3>FRIENDLY TEAM</h3>
                                <p>Kritika Lawn & Banquet supportive team helps you to organize your beautiful event</p>
                            </div>
                        </div>
                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                               <img src="images/whychooseusicon1.png">
                            </span>
                            <div class="feature-copy">
                                <h3>PERFECT VENUES</h3>
                                <p>Our perfect venues suits your requirement and make your big day perfectly awesome</p>
                            </div>
                        </div>
                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                               <img src="images/whychooseusicon1.png">
                            </span>
                            <div class="feature-copy">
                                <h3>UNIQUE SCENARIOS</h3>
                                <p>Our wedding planning team excecutes your event with unique concept keep in mind your requirement</p>
                            </div>
                        </div>
						 <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                               <img src="images/whychooseusicon1.png">
                            </span>
                            <div class="feature-copy">
                                <h3>PROFESSIONAL SERVICES</h3>
                                <p>We handle all your event professionally with our creative and innovative ideas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="fh5co-video fh5co-bg" style="background-image: url(images/intro.png);background-size:contain;">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include ('videoplayer.php') ;?>
        <div id="fh5co-couple-story" style="background:whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>We Love Each Other</span>
                        <h2>Our Serives</h2>
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline animate-box">
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image: url(images/1.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Marriage Function</h3>
                                        <span class="date"></span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>we all get involved on each event, making sure even the most minimum detail is handled carefully. Most of the events start with an initial meeting with the couple to determine budget, type of wedding desired, and to help us understand your personality,</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge" style="background-image: url(images/8.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Bday Parties</h3>
                                        <span class="date"></span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Birthday is always a special day of the life of everyone and if you are a parent and it's your baby's birthday then it is the most special day of your life as you got a very special gift from God. Of course, there is only one day of your baby birth but you might be planning this day from weeks or month back from the actual date of birth. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image: url(images/10.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Corporate Events</h3>
                                        <!-- <span class="date">January 1, 2016</span> -->
                                    </div>
                                    <div class="timeline-body">
                                        <p>A corporate event can be defined as a gathering that is sponsored by a business for its employees, business partners, clients and/or prospective clients. Theseevents can be for larger audiences such as conventions or smaller events like conferences, meetings or holiday parties.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge" style="background-image: url(images/9.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Ring ceremony</h3>
                                        <span class="date"></span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>“Engagement is two halves of the same sole joining together in life’s journey”. A very special moment for the bride and groom as this small ring signifies one ring to rule the world with the support of each other. Engagement makes the apex of the relationship’s, love and happiness and after that everything on this earth is a downhill.</p>
                                    </div>
                                </div>
                            </li>
                             <li class="animate-box">
                                <div class="timeline-badge" style="background-image: url(images/11.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Conference Events</h3>
                                        <span class="date"></span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Conference organisers' roles vary, but the work encompasses identifying potential business, researching, writing, planning and running all aspects of conferences on behalf of a client or own organisation. As well as planning a conference in advance, they will usually be present during the event to deal with any issues as they arise.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

         <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image: url(images/blog-banner-2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-users"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Estimated Guest</span>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-user"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">We Catter</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-calendar"></i>
                                    </span>
                                    <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Events Done</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-clock"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Hours Spent</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-gallery" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Our Memories</span>
                        <h2>Wedding Gallery</h2>
                        <p></p>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                   <?php
                 $query = "SELECT * FROM uploadimg order by rand() limit 6";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <div class="col-md-12">
                        <ul id="fh5co-gallery-list">
<?php
if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        
?>
<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(
<?php echo "admin502/upload/".$row['image'] ;?>);">
                                <a href="gallery.php">
                                    <div class="case-studies-summary">
                                        <span><?php  echo $row['title']; ?></span>
                                        <h2></h2>
                                    </div>
                                </a>
                            </li>


<?php
                            }
                        }
?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<!-- 

        <?php include('attend.php'); ?> -->
    

       <section style="background-color: #2A3852;" class="event-footer">

            <div class="row footer-top">

                <div class="col-xs-12 col-md-2 event-footer-section">
                    <div class="event-footer-Maintitles" style=""></div>
                    <a href="">
                        <div class="event-footer-img">
                            <img src="images1/logo.png">
                        </div>
                    </a>
                </div>

                <div class="col-xs-12 col-md-4 event-footer-section">
                    <div class="event-footer-Maintitles" style="">
                        Welcome to Kritika Lawn & Banquet
                    </div>
                    <div class="event-footer-content" style="text-align:justify;">
                        <span style="">Indian weddings are all about opulence, vibrant settings that blend with the traditional aesthetics of a marriage. All the modern trends of weddings should be incorporated beautifully in all the traditions and cultures.
                        </span>
                    </div>

                </div>

                <div class="col-xs-12 col-md-3 event-footer-section">
                    <div class="event-footer-Maintitles" style="">
                       Contact Information
                    </div>
                    <div class="event-footer-content fh5co-contact-info" style="">
                       
						<ul>
							<li class="address"><a>Near Bhim Rao Ambedkar University, shaheed nagar lucknow</a></li>
							<li class="phone"><a href="#">9651991828, 9026308940, 9648604528</a></li>
							
						</ul>
                    </div>

                </div>

                <div class="col-xs-12 col-md-3 event-footer-section bottom-social-group">

                    <div class="event-footer-Maintitles" style="">Find Us On</div>
                    <div class="col-md-4 mar">
                        <a class="event-footer-social" title="Facebook link" target="_blank" href="https://www.facebook.com/pages/category/Party-Entertainment-Service/Kritika-Lawn-Banquet-2341872422804173/">
                             <img src="images/icons/fb.png"/>
                        </a>
                    </div>
                    <div class="gototop js-top">
                        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
                    </div>
                </div>
            </div>
        </section>

    <!-- jQuery -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>

    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
    <script src="js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

    <script>
        var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
</script>

</body>
</html>

