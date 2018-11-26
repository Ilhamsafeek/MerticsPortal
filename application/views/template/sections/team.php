
<section class="our-team">

      <div class="album py-5 bg-light">
        <div class="container">

          <!--Section Title -->
    <div class="section-title">
          <h2>Leadership</h2>         
    </div>
          <div class="row justify-content-center">

            <?php
            foreach ($leadership as $row) {
                
            
            ?>
             <div class="col-lg-offset-4 col-lg-4 col-sm-offset-2 col-sm-6 mb-4">
                <div class="team-panel">
                    <div class="team-details">
                        <div class="team-icon" style="background-image: url(<?php echo $row->photo; ?>);">
                          
                        </div>
                        <h3 class="title"><?php echo $row->name; ?> </h3>
                        <span class="post"><?php echo $row->post_title; ?></span>
                    </div>
                    
                    <ul class="team-content">
                        <li><a href="<?php echo site_url('team/'.$row->name);?>">More Details</a></li>
                        
                    </ul>
                   
                </div>
            </div>
            <?php
            }  
            ?>

          </div>
            <!--Section Title -->
    <div class="section-title">
          <h2>Team</h2>         
    </div>
           <div class="row justify-content-center">

            <?php
            foreach ($team as $row_team) {
                
            
            ?>
             <div class="col-lg-offset-4 col-lg-4 col-sm-offset-2 col-sm-6 mb-4">
                <div class="team-panel">
                    <div class="team-details">
                        <div class="team-icon" style="background-image: url(<?php echo $row_team->photo; ?>);">
                          
                        </div>
                        <h3 class="title"><?php echo $row_team->name; ?> </h3>
                        <span class="post"><?php echo $row_team->post_title; ?></span>
                    </div>
                    
                    <ul class="team-content">
                        <li><a href="<?php echo site_url('team/'.$row_team->name);?>">More Details</a></li>
                        
                    </ul>
                   
                </div>
            </div>
            <?php
            }  
            ?>

          </div>


        </div>

      </div>




        </section>

        