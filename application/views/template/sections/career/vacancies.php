 <section class="section">
    <div class="container">
    <!--Section Title -->
    <div class="section-title">
          <h2>Working with us is a fun!</h2>
         
    </div>
     
      <!-- Marketing Icons Section -->
      <div class="row">

          <?php
            foreach ($all_vacancies as $row) {               
            
            ?>
        <div class="col-lg-4 mb-4">
          <div class="card vacancy-card h-100">
            <h4 class="card-header"><?php echo $row->vacancy; ?></h4>
            <div class="card-body">
             <ul>
                <li><b>Job Type:</b> <?php echo $row->type; ?></li>
                <li><b>Closing date:</b> <?php echo $row->closing_date; ?></li>
                <li><b>Minimum experience:</b> <?php echo $row->experience; ?></li>
                
            </ul>

            <div class="text-right">
              <a href="<?php echo site_url('career/'.$row->vacancy);?>" class="">View details</a>
            </div>
            </div>  
          </div>          
        </div>
         <?php
            }  
          ?>

      </div>
      </div>
      </section>