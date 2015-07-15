<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed'); ?>
<?php $this->load->view('index') ?>
<?php print form_open('modifycourse') ?>
<?php $this->load->view('adminheader') ?>

<div class="row " height="500px" style="display:flex;">
<?php $this->load->view('adminLeftSlide') ?>
<div class="col-sm-10 bcolor"  height="100%">
				<div style="padding-top:30px;">
									<?php echo $view?>
									</h1>	<hr style="margin-top:2em;" ></h1>
					</div>
					<div>
						<div class="mbcolor" role="tabpanel">
									<!-- update course -->
									<div class="tab-content">
										 <div role="tabpanel" class="tab-pane active" id="updatecourse" style="padding-top:20px;">
											 <form>
											 <div class="row">
											 	<div class="col-sm-2 text-right">
											 		<label>Select course</label>
											 	</div>
											 	<div class="col-sm-4">
											 		<select id="course">
											 			<option>-- Select a Popular Course --
											 			</option>
											 			
											 				<?php foreach($result as $r) { ?>
											 			<option id='<?php echo $r['id']; ?>'>
											 			
											 				<?php echo $r['name'];?>

											 			</option>
											 			<?php } ?>
											 		</select>
											 	</div>
											 	<div class="col-sm-2 text-right">
											 		<label>Selected course</label>
											 	</div>
											 	<div class="col-sm-4">
											 		<input class="form-control" id="input_course" name="input_course" value="">
											 		 <input type="text" id="input_course_id"  name="input_course_id" hidden/>
											 	</div>
											 </div>
											 <div>
											 	<br>
											
											 </div>
											 <div class="row">
											 	<center>
											 		 <button class="btn btn-warning ">Clear</button>
							  <input type="submit" value="Modify" class="btn btn-primary">
											 	</center>
											 </div>
										 	</form>

										 </div>
									
									<!-- end upadate course -->
									<!-- add course -->
									
									
									<!-- end course -->
										
						</div>
					</div>
</div>
</div>