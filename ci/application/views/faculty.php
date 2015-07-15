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
       </div>           <!-- for container clas -->
 <div class="col-lg-7 col-md-7 col-sm-7 no-float" height="500px">
		<div><h4><strong>Our Top Faculty: </strong></h4></div>
			<div  class="table-responsive scroll" >
				
						  <table class="table table-bordered " >
						  	<?php foreach ($result as $r) { ?>
						   <tr  >
						   	<td width="160" height="auto" ><img src="<?php echo base_url(); ?>faculty/<?php echo $r['photo']?>" height="170" width="190"></img></td>
						   	<td width="auto" height="auto" class=""> <strong  class="text-center"><?php echo $r['name']?></strong><br>
						   	<span>
							Qualification:<span class="padding_q"><?php echo $r['quali']?> </span><br>
							
							Subject Teacher.<span class="padding_p"></span><br>
							Phone No.<span class="padding_p"><?php echo $r['mobile']?></span><br>
							Email :	  <span class="padding_e"><?php echo $r['email'] ?> </span>					   		
						   	</span>		
						   	</td>
						   </tr>
						   <?php }?>
						   
						  </table>
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


