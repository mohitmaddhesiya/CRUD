<!DOCTYPE html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html>

<?php $this->load->view('index.php') ?>

<body> 

<!-- divid the three part  -->


<?php $this->load->view('header') ?>

<!-- end divid -->


<!-- fixed size nevBar -->
  <?php $this->load->view('listBar') ?>
  
  <!-- end Fixed size  -->




<!-- for between slider news  -->
<div class="row">
    	<div class="col-lg-2 col-md-2 col-sm-2 no-float borderright" style="background-color:#D3D3D3">
                 <iframe id="map" width="100%" height="528px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/ourtopper');?>"></iframe>
       </div>          <!-- for container clas -->
                 
        <div class="col-lg-7 col-md-7 col-sm-7 no-float" height="auto">
          
          <?php $this->load->view('slideBar') ?>

          <div>
           <h4> Welcome to <strong>JAI MATA DI COACHING</strong></h4><br>
           NIMS Kanpur is one of the leading MCA Entrance Examination Coaching in Kanpur integrated of genius faculty, cultured atmosphere & result oriented intellectuals that gladly welcome you to explore the world of aspiration, challenges, success & satisfaction.

We are an unparallel MCA COACHING INSTITUTE that prepares & counsels academically qualified students to pursue right approach in the field of computer science & contribute for their success at their highly competitive entrance exam by emphasizing at this critical phase of life. 
          </div>
        </div>

      <div class="col-lg-2 col-md-2  col-sm-2 no-float borderleft" style="background-color:#D3D3D3;">
      <iframe id="map" width="100%" height="528px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/retrieve_course');?>">
                      </iframe>
     
      </div>             
                  <div class="col-lg-1 col-md-1 col-sm-1 no-float border" style="background-color:#D3D3D3">
                      <iframe id="map" width="100%" height="528px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/iframe');?>">
                      </iframe>
                  </div>
      
</div>
  <!-- end the slider and news -->
<!-- for floter -->
<?php $this->load->view('footer') ?>

</div>
<!-- end floter -->
</body>

</html>