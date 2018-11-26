
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles -->
    <link href="<?php echo base_url('assets/css/mertics-custom.css');?>" rel="stylesheet">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="<?php echo base_url('assets/plugins/slicker/css/style.css');?>">

    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/plugins/font-awsome/css/font-awesome.min.css');?>" rel="stylesheet">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    
    <!--Slicker Scripts -->
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

      <!-- Effects -->
    <link href="<?php echo base_url('assets/css/effects.css');?>" rel="stylesheet">
    <!-- Site Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/mertics-icon.png');?>" />

     <div class="thetop"></div>
  </head>

  <body>

 <?php

          if($this->session->flashdata("message"))
          {
            echo "
                 <div class='modal fade' id='ignismyModal' role='dialog'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label=''><span>×</span></button>
                     </div>
          
                    <div class='modal-body'>
                       
            <div class='thank-you-pop'>
              <img src='http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png' alt=''>
              <h1>Thank You!</h1>
              <p> ".$this->session->flashdata("message")."</p>
              <h3 class='cupon-pop'>Your Id: <span>12345</span></h3>
              
            </div>                
                    </div>
          
                </div>
            </div>
        </div>     


            ";
          }
          ?>


  
       
       
  

<!--Modal window for Request quote-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request a Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your Company Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Proposal:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Request</button>
      </div>
    </div>
  </div>
</div>