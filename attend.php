<?php include 'attend_mail.php'; ?> 
<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_4.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Are You Attending?</h2>
                        <p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="contact" method="post">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="name" name="name" class="form-control" id="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="num" class="sr-only">Number</label>
                                <input type="text"  pattern="[0-9]{10}" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <button type="submit" class="btn btn-primary" value="Send">I am Attending</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
