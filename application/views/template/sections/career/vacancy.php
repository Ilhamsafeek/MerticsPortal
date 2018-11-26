
      <section class="section profile">
      <div class="container">
      
      <div class="row">		
      <a href="<?php echo site_url('/career');?>" class="general-more-button">All Vacancies</a>
      </div>
      <div class="row">
      	 <div class="col-lg-2">
         
          
        </div>
        <div class="col-lg-10">
         
   			 <div class="profile-title">
                 <h2><?php echo $vacancy ?></h2>   
                 <p><?php echo $type ?></p>  
                 <p><?php echo $experience ?></p> 
                 <p><?php echo $closing_date ?></p>                      
   			 </div>
         	  <?php
            $skills = explode(".", $description);

           foreach ($skills as $skill) {
            ?>
         	  <ul>             
              <li><?php echo $skill ?></li>
            </ul>
            <?php
              }
            ?>
        </div>
       
      </div>
      <!-- /.row -->
      </div>
      </section>
     

    
