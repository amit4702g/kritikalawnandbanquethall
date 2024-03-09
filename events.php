

 <!--timer-section start-->
            <div class="ttm-row timer-section2 ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row align-item-center">
                        <div class="col-md-12 col-lg-5">
                            <div class="section-title with-desc clearfix m-0">
                                <div class="title-header">
                                    <h2 class="title">Our Upcoming Events:</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 timer-wraper">
                            <div class="timer-box-content">
                                <div id="timer-box" class="timer-box">
                                  <div class="line-bgimg2 timer-box-position">
                                    <span class="days"></span>
                                    <div class="bottom-txt">Days</div>
                                  </div>
                                  <div class="line-bgimg2 timer-box-position">
                                    <span class="hours"></span>
                                    <div class="bottom-txt">Hours</div>
                                  </div>
                                  <div class="line-bgimg2 timer-box-position">
                                    <span class="minutes"></span>
                                    <div class="bottom-txt">Minutes</div>
                                  </div>
                                  <div class="line-bgimg2  timer-box-position">
                                    <span class="seconds"></span>
                                    <div class="bottom-txt">Seconds</div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--timer-section end-->

            <!--event-section start-->
            <section class="ttm-row event-section2 clearfix">
                <div class="container">
                    <div class="row">
                        <?php
                 $query = "SELECT * FROM event ORDER BY id DESC";
                $query_run = mysqli_query($connection, $query);
            ?>
                        <div class="col-md-12">
                            <div class="event-slide owl-carousel mt_68"  data-item="2" data-nav="true" data-dots="false" data-auto="false" data-center="true">
                            <?php    if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                                <!-- featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-event ttm-box-view-top-image mb-120 position-relative res-767-mlr-15">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="images/event-img3.jpg" alt="">
                                    </div>
                                    <div class="ttm-box-post-date">
                                        <span class="ttm-entry-date">
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00"><?php  echo $row['edate']; ?><span class="entry-month entry-year"><?php  echo $row['emonth']; ?></span></time>
                                        </span>
                                    </div>
                                    <div class="featured-content featured-content-event">
                                        <div class="featured-title">
                                            <h5 class="ttm-textcolor-skincolor"><?php  echo $row['eventname']; ?></h5>
                                        </div>
                                        <div class="ttm-box-meta">
                                            <span class="ttm-event-meta-item ttm-event-date"> 
                                                <i class="fa fa-calendar"></i>                  
                                                <span class="ttm-event-meta-dtend"><?php  echo $row['edate']; ?> <?php  echo $row['emonth']; ?> <?php  echo $row['eyear']; ?></span>
                                            </span>
                                             </div>
                                        <div class="ttm-box-meta">
                                            <span class="ttm-event-meta-item ttm-event-date"> 
                                                <i class="fa fa-clock-o"></i>  
                                                <span class="ttm-event-meta-dtend">Start at : <?php  echo $row['etime']; ?> </span>
                                            </span>
                                            <div class="tribe-events-vanue"> 
                                                <i class="fa fa-map-marker"></i> Kritika Lawn & Banquet, Shaheed Nagar, Lucknow.
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- featured-imagebox END -->
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div><!-- row end -->
                    </div>
                </div>
            </section>
          
        </div><!-- site-main end --> 