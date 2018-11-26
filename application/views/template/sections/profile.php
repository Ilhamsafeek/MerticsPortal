
      <section class="section profile">
      <div class="container">
      
      <div class="row">		
      <a href="<?php echo site_url('/team');?>" class="general-more-button">All Members</a>
      </div>
      <div class="row">
      	 <div class="col-lg-2">
          <img class="img-fluid rounded" src="<?php echo base_url($img);?>" alt="">
          <div class="profile-email align-self-center"><?php echo $email; ?></div>
        </div>
        <div class="col-lg-10">
         
   			 <div class="profile-title">
                 <h2><?php echo $name ?></h2>   
                 <p><?php echo $post_title ?></p>                       
   			 </div>
         	  
           
         	  <p><?php echo $description ?></p>
         
        </div>
       
      </div>
      <!-- /.row -->
      </div>
      </section>
     

    
