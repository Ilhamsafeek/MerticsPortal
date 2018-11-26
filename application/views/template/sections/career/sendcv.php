<!--Section: Send CV v.2-->
<section class="section contact">

 <div class="container">
    
<!--Section Title -->
  <div class="section-title">
    <h2 >Are you the qualified persion? Send us your CV.</h2>
          <p>Let us know what you are looking for and we'll be happy to connect with you.</p>
    </div>
   
  
    <div class="row">

        <div class="col"> </div>
        <!--Grid column-->
        <div class="col-8">
            <form id="contact-form" name="contact-form" action="<?php echo site_url('/send');?>" method="POST" enctype="multipart/form-data">

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
                    <div class="col-md-12 input-effect">
                        
                             <input class="effect-17" type="text" value="<?php echo $vacancy?>" id="posting" name="posting" placeholder="Post" required>
                            <label>Prefered post</label>
                            <span class="focus-border"></span>
                        
                    </div>
                </div>
                <!--Grid row-->

                <div class="row ">
                    <!--  
                       <div class="col-4">
                 <label class="btn general-more-button">
                     Upload CV <input type="file"  name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        
                  </label> 
                     </div>
                     <div class="col-8">
                   <span class='label label-info' id="upload-file-info"></span>
                      </div>
                -->

                
                  <label class="general-more-button">Upload CV
                  <input type="file" name="resume" accept=".doc,.docx, .pdf" required hidden/>
                  </label>
                

                </div>


                <div class="row justify-content-center" style="padding:1em;">
                
               <input class="general-more-button" type="submit" value="Send CV">
                </div>
            </form>


            <div class="status"></div>
        </div>
        <!--Grid column-->
         <div class="col"> </div>
      
      

    </div>

  </div>


</section>
<!--Section: Send CV v.2-->