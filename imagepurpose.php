	<div id="fh5co-gallery" class="fh5co-section-gray">
            <div class="container" style="width:100%;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Our Memories</span>
                        <h2>Wedding Gallery</h2>
                        <p></p>
                    </div>
                </div>
				
        <div class="container" style="width:100%;text-align:center;">
            <nav class="gallnav">
                <ul class="gallul">
                    <li class="current"><a href="#">All projects</a></li>                  
                    <!-- <li><a href="#">Design</a></li> --> 
					<li><a href="#">stage</a></li>								
					<li><a href="#">mandup</a></li>		
					<li><a href="#">decoration</a></li>
                    <li><a href="#">Lawn</a></li>
                    <li><a href="#">Banquet</a></li>					
                </ul>
            </nav>

            <div id="projects">
                <?php
                 $query = "SELECT * FROM uploadimg ";
                $query_run = mysqli_query($connection, $query);
            ?>
                <h1 class="heading">All</h1>
                <ul id="gallery">
                <?php
if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        
?> 

<li class="<?php echo $row['description'] ;?>"><img src =" <?php echo "admin502/upload/".$row['image'] ; ?>" ></li>
<?php
                            }
                        }
?>
               
                </ul>
            </div>         
        </div>
		 </div>
        </div>
		
