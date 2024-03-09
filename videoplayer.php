 <div id="fh5co-event" class="fh5co-bg" style="background-image: url(images/blog-banner.jpg);">
    <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <?php
                 $query = "SELECT * FROM uploadvideo order by rand() limit 3";
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