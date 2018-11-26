<!--Section: Contact v.2-->
<section class="section contact">

 <div class="container">

<!--Section Title -->
  <div class="section-title">
    <h2 > Drop us a message.</h2>
          <p>Let us know what you are looking for and we'll be happy to connect with you.</p>
    </div>
   
  
    <div class="row">

        <div class="col"> </div>
        <!--Grid column-->
        <div class="col-8">
            <form id="contact-form" name="contact-form" action="<?php echo site_url('/contact_Mail');?>" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 input-effect">
                        <div class="md-form mb-0">
                            <input class="effect-17" type="text" id="name" name="name" placeholder="Your Name" required>
                            <label>Your Name</label>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 input-effect">
                        <div class="md-form mb-0">
                             <input class="effect-17" type="text" id="mobile" name="mobile" placeholder="Your mobile number" required>
                            <label>Your mobile number</label>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12 input-effect">
                        <div class="md-form mb-0">
                             <input class="effect-17" type="text" id="email" name="email" placeholder="Your email" required>
                            <label>Your email</label>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 input-effect">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="effect-17 form-control"  placeholder="Message" required></textarea>
                           <label>Message</label>
                            <span class="focus-border"></span>

                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <div class="row justify-content-center">
                <div style="padding:1em;">
                    <input class="general-more-button" type="submit" value="Send Message">
                
                </div>
            </div>
            </form>

           
            <div class="status"></div>
        </div>
        <!--Grid column-->
         <div class="col"> </div>
      
      

    </div>

  </div>


</section>
<!--Section: Contact v.2-->