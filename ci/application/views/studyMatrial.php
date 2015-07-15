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
    	<div class="col-lg-2 col-md-2 col-sm-2  no-float borderright" style="background-color:#D3D3D3">
                 <iframe id="map" width="100%" height="528px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/ourtopper');?>"></iframe>
       </div>           <!-- for container clas -->
 <div class="col-lg-7 col-md-7 col-sm-7 no-float" height="500px">
		<span><h3>Study Matrial:</h3></span>
		<?php echo form_open_multipart('studymatrial');?>
		<div class="search-pro">
			<div>
				<div class="row">
					<div class="col-sm-4 text-center">
						<label>Subject</label>
					</div>
					<div class="col-sm-4 text-center">
						<label>Writter</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<input type="text" class="form-control" placeholder="Subject" id="Subject" name="Subject">
						<input type="Hidden" id="Subject_id">
					</div>
					<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Writter" id="writter" name="Writter">
					<input type="hidden" id="writter_id">
					</div>
					<div class="col-sm-4">
						<input type="submit" value="Search" class="btn btn-primary">
							
					</div>
				</div>
			</div>
          	<ul class="nav nav-justified menu text-center">
			<li >  Subject</li>
			<li>Title</li>
			<li>Writter</li>
			<li>Download</li>
          </div>
          
        
         	
     
			<div  class="table-responsive scroll" >
				<table class="table table-bordered" >
					<tbody class="tbodycol">
						<?php foreach ($Result as $res) { ?>
						<tr>
							<td  width="100"><?php echo strtoupper($res['subject'])?></td>
							<td  width="100"><?php echo strtoupper($res['title'])?></td>
							<td  width="100"><?php echo strtoupper($res['writter'])?></td>
							<td  width="100">
								<?php print anchor(''.base_url().'studymatrial/'.$res['filename'].'', 'Download'); ?> </td>
								<!--td  width="100">
								<?php print anchor('downloads/'.$res['id'].'', 'Download'); ?> </td-->
						</tr>	
						<?php } ?>
					</tbody>	   
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
