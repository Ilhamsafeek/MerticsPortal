<!--========================================
=            Navigation Section            =
=========================================-->


   <nav class="navbar fixed-top navbar-expand-md navbar-dark fixed-top" id="nav" style="padding-bottom: 8px;-webkit-transition: background-color 250ms linear;
    -ms-transition: background-color 250ms linear;
    transition: background-color 250ms linear;">

      <div class="container">
       <!-- logo -->
      <a class="navbar-brand" href="<?php echo site_url('/');?>">
        <img id="nav_img" src="<?php echo base_url('assets/img/mertics-logo-nav-2.png');?>" alt="mertics-logo">
      </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('industries');?>">Industries</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('clients');?>">Clients</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item item1" href="<?php echo site_url('company');?>"><i></i><span> Company</span></a>
                <a class="dropdown-item item2" href="<?php echo site_url('what_we_do');?>"><i></i> What we do</a>
                <a class="dropdown-item item3" href="<?php echo site_url('culture');?>"><i></i> Mertics Culture</a>
                <a class="dropdown-item item4" href="<?php echo site_url('team');?>"><i></i> Our Team</a>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/career');?>">Career</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/contact');?>">Contact</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>

<!--====  End of Navigation Section  ====-->


<!-- Success Alert-->

<?php

if($this->session->flashdata("message"))
{

  ?>
  <div class="bs-example" style="padding: 5px; z-index: 999;">
    <div class="alert alert-warning">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong>Warning!</strong> <?php echo $this->session->flashdata("message");?>
    </div>
  </div>
  <?php
}
?>






