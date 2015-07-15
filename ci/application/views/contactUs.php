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
 <div class="col-lg-7 col-md-7 col-sm-7 no-float" height="400px">
 	        <strong><h3>Address:</h3></strong>
         
	         	<div class="row">
                 <?php foreach ($result as $re) {?>
			<!-- for Address -->
                        			<div class="col-sm-6">
                                    					<address>
                                      <strong>Twitter, Inc.</strong><br>
                                     <?php echo $re['line1']?><br>
                                      <?php echo $re['line2']?><br>
                                        City-<?php echo $re['city']?>,
                                        Zip-<?php echo $re['zip']?>
                                        <br>
                                      
                                    </address>

                        			</div>
                			<!-- for Address -->
                              			<div class="col-sm-6"><address>
                                <strong>Twitter, Inc.</strong><br>
                                <?php echo $re['line3']?><br>
                               <?php echo $re['line4']?><br>
                                City-<?php echo $re['city2']?>,
                                        Zip-<?php echo $re['zip2']?><br>
                               
                              </address></div>
		</div>
		<!-- for Contact Number -->
     <?php }?>
		<div class="row contact_margin" >
     
        			<div class="col-sm-6">
        				Phone No:<span class="contact_phone">  <?php echo $re['phone']?><br></span><br><br>
        				Mobile no.<span class="contact_phone"> <?php echo $re['mobile1']?> | 9818562797</span><br><br>
        				Email:<span class="contact_phone"><?php echo $re['email']?></span>
        			</div>
              
      			<div class="col-sm-6">
      				<img src="<?php echo base_url(); ?>img/contact.jpg">
            </div>
				
		</div>
		<!-- for Google Map -->
		<div class="row contact_margin">
      

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