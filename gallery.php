<?php include('admin502/database/dbconfig.php'); ?>
<!DOCTYPE html>
 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <title>Kritika Lawn & Banquet </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Indian weddings are all about opulence, vibrant settings that blend with the traditional aesthetics of a marriage. All the modern trends of weddings should be incorporated beautifully in all the traditions and cultures." />
    <meta name="keywords" content="kritika, lawn, and, bnaquet, hall, wedding, event, birthday, party, marriage, ring, ceremony, tilak, shadi, function, decoration, Corporate, meetings, Indian, weddings, are, all, about, opulence, vibrant, settings, that, blend, with, the, traditional, aesthetics, of, a, marriage, All, the, modern, trends, of, weddings, should, be, incorporated, beautifully, in, all, the, traditions, and, cultures," />
    <meta name="author" content="kritikalwanandbanquet" />	
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
	    #fh5co-started .btn {
	        margin-top: 15px;
	    }
	</style>	
<style>
.container {
    position: relative;
    
}

h1 {
    margin-bottom: 20px;
    text-transform: uppercase;
    color: #F39CC3;
}

.gallnav {
    display: block;
    width: 100%;
}

.gallul,ul {
   list-style: none; 
   margin-bottom: 20px;
}

.gallnav > .gallul > li {
    display: inline-block;
}
.gallnav > .gallul > li > a {
    text-transform: uppercase;
    padding: 4px 10px;
    margin-right: 2px;
    margin-left: 2px;
    text-decoration: none;
    
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 25px;
    border: 1px solid #27A4DD;
    -webkit-transition: all 300ms ease-in-out;
    -moz-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
}

.hidden {
    display: none;
}

.gallnav > .gallul > li > a:hover, .current a {
    color: #fff;
    background-color: #27A4DD;
	padding:15px;
}

#projects > ul > li {
    display: inline-block;
    float: left;
    margin-right: 10px;
    margin-bottom: 5px;
    width: 23%;
    height: auto;
    cursor: pointer;
    border-radius: 5px;
    /* Padding stays within the width */
    box-sizing: border-box;
    position: relative;
    opacity: 0.7;
    -webkit-transition: all 300ms ease-in-out;
    -moz-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
}

#projects > ul > li:hover {
    opacity: 1;
}

img {
    max-width: 100%;
    max-height: 50%; 
    border-radius: 5px;
}

.gallery {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.8);
    padding: 40px 10px;
    display: none;
    box-sizing: border-box;
}

.gallery > img {
    max-height: 100%;
    width: auto;
}

.close i {
    position: fixed;
    top: 10px;
    right: 10px;
    height: 30px;
    width: 30px;
}

.bar {
    display: block;
    position: absolute;
    top: 13px;
    float: left;
    width: 30px;
    border-bottom: 4px solid #fff;
    transform: rotate(45deg);
}

.bar:first-child {
    transform: rotate(-45deg);
}

@media (max-width: 768px){
    #projects > ul > li {
        width: 48%;
    }
}

@media (max-width: 568px) {
    #projects > ul > li {
        width: 100%;
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

 @media only screen and (max-width: 411px) {
           .gallnav > .gallul > li {
                display: grid;
            }
			}
			
</style>
       
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-8">
					<div id="fh5co-logo"><a href="index.php"><img src="images1/logo.png" alt="" width="100%;"></a></div>
				</div>
				<div class="col-sm-9 col-xs-4 text-right menu-1">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="services.php">Our Service</a></li>
						<li class="active"><a href="gallery.php">Gallery</a></li>
						<!-- <li><a href="#">Links</a></li> -->
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/blog-banner-4.jpg);">
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Gallery</h1>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

<?php include('imagepurpose.php');?>

 <div id="fh5co-event" class="fh5co-bg" style="background-image: url(images/blog-banner.jpg);">
    <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <?php
                 $query = "SELECT * FROM uploadvideo ";
                $query_run = mysqli_query($connection, $query);
            ?>
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span><h2>Our Special Event's</h2></span>
                        <h2>Videos</h2>
            </div>
                
                      <?php
if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        
?>
             <div class="col-md-4">
                    <div class="video-container">   
                      <div class="responsive-video">
<?php 

 echo "
          <video src='admin502/video/".$row['video']."' controls width='220px' height='220px' ></video>
          "
?>
                        </div>
                    </div>
                </div>
                <?php
                            }
                        }
?>

                
            </div>

        </div>
</div>



	
<!-- 

        <?php include('attend.php'); ?> -->
        </div>

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
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
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

	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
$(document).ready(function(){
    // filter
    $('.gallnav a').on('click', function(event){
        event.preventDefault();
        // current class
        $('.gallnav li.current').removeClass('current');
        $(this).parent().addClass('current');

        // set new heading
        $('h1.heading').text($(this).text());
        
        // filter link text
        var category = $(this).text().toLowerCase().replace(' ', '-');
        
        // remove hidden class if "all" is selected
        if(category == 'all-projects'){
            $('ul#gallery li:hidden').fadeIn('slow').removeClass('hidden');
        } else {
            $('ul#gallery li').each(function(){
               if(!$(this).hasClass(category)){
                   $(this).hide().addClass('hidden');
               } else {
                   $(this).fadeIn('slow').removeClass('hidden');
               }
            });
        }
        return false;        
    });
    // lightbox
    $('ul#gallery a').on('click', function(event){
        event.preventDefault();
        var link = $(this).find('img').attr('src');
        $('.gallery img').attr('src', '');
        $('.gallery img').attr('src', link);
        $('.gallery').fadeIn('slow');
    });
    // close lightbox
    $('.gallery').on('click', function(event){
        event.preventDefault();
        $('.gallery').fadeOut('slow');
    });
});</script>



	</body>
</html>

