<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed'); ?>

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
						<h4><?php echo $error; ?></h4>
						<?php echo form_open_multipart('modifyresult');?>
					<form>
							<div class="row">
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
					    					<label class=" control-label">Exam name *:</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="text"  class="form-control" placeholder="max 20 character" name='exam_name'><span class ="errormsg"><?php print form_error('exam_name') ?></span> 
					    			</div>
					    			</div>
			    			
			    			<!-- new line -->
			    			<div>
			    				<br>
			    				<br>
			    				<br>
			    			</div>


							<div class="row">
								<div class="col-sm-12">
					    			<div class="col-sm-6 text-right">
					    				<div class="col-sm-3">
					    				<label class=" control-label" >Exam type*</label>
					    				</div>
					    					<div class="col-sm-9">
					    					<input type="text" class="form-control" placeholder="max 20 charecater" name="exam_type"><span class ="errormsg"><?php print form_error('exam_type') ?></span> 
					    					</div>
					    			</div>
					    			<div class="col-sm-6">
					    				<div class="col-sm-3 text-right">
					    					<label class=" control-label">Rank *:</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="text"  class="form-control" placeholder="max 20 character" name='rank'><span class ="errormsg"><?php print form_error('rank') ?></span> 
					    			</div>

			    			</div>
			    			</div>
							</div>
							<!-- new line -->
							<div>
			    				<br>
			    			</div>
							<!--  -->
							<div class="row">
								<div class="col-sm-12">
					    			<div class="col-sm-6 text-right">
					    				<div class="col-sm-3">
					    				<label class=" control-label" >Start date*</label>
					    				</div>
					    					<div class="col-sm-9">
					    					<input type="text" class="form-control"  name="start" id="start_date"><span class ="errormsg" ><?php print form_error('start') ?></span> 
					    					</div>
					    			</div>
					    			<div class="col-sm-6">
					    				<div class="col-sm-3 text-right">
					    					<label class=" control-label">End date *:</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="text"  class="form-control" name='end' id="end_date"><span class ="errormsg"><?php print form_error('end') ?></span> 
					    			</div>

			    			</div>
			    			</div>
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
					    						<label class="control-label" >Select Photo *</label>
					    						</div>
					    						<div class="col-sm-9">
										<input type="file" name="userfile" size="20" /> 
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
							  <div>
			    				<br>
			    				<br>
			    				<br>
			    			</div>
					</form>	
			</div>
		

</div>
</body>