<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed'); ?>
<?php echo form_open_multipart('modifytoper');?>
<?php $this->load->view('index.php') ?>
<body>
<?php $this->load->view('adminheader') ?>
<div class="row " height="500px" style="display:flex;">
		
			<?php $this->load->view('adminLeftSlide') ?>

		
			<div class="col-sm-10 bcolor"  height="100%">
					<div style="padding-top:30px;">
											<?php echo $view?>
											</h1>	<hr style="margin-top:2em;" ></h1>
					</div>	
					<div>
						
					<form method="post">
					<div class="row">
			    			<!--  -->
			    			<?php echo $this->session->flashdata('sucess');?>
			    				<?php if($error) { ?> 

			    				<h4><?php echo $error; ?></h4>
			    				<?php }  ?>
			    			<div class="col-sm-12">
					    			<div class="col-sm-6 text-right">
					    				<div class="col-sm-3">
					    				<label class=" control-label" >Student Name</label>
					    				</div>
					    					<div class="col-sm-9">
					    					<input type="text" class="form-control" placeholder="max 20 charecater" name="student"><span class ="errormsg"><?php print form_error('student') ?></span> 
					    					</div>
					    			</div>
					    			<div class="col-sm-6">
					    				<div class="col-sm-3 text-right">
					    					<label class=" control-label">Year *:</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="text"  class="form-control" placeholder="max 20 character" name='year' id="year"><span class ="errormsg"><?php print form_error('year') ?></span> 
					    			</div>

			    			</div>	
			    			<!-- new line -->
			    			<div>
			    				<br>
			    				<br>
			    				<br>
			    			</div>
			    			<!--  -->
			    			<div class="row">
			    				<div class="col-sm-12">
			    						<div class="col-sm-6 text-right">
					    						<div class="col-sm-3">
					    						<label class="control-label" >Select Photo</label>
					    						</div>
					    						<div class="col-sm-9">
										<input type="file" name="userfile" size="20" /><span class ="errormsg"><?php print form_error('photo') ?></span> 
									</div>
								</div>
			    			</div>
			    			<!-- new line -->
			    			<div>
			    				<br>
			    				<br>
			    				<br>
			    			</div>
			    			<!--  -->
			    			<center>
							  <button class="btn btn-warning ">Clear</button>
							  <input type="submit" value="Submit" class="btn btn-primary">
							  </center>

					</form>	
					</div>	
			</div>
		

</div>
</body>