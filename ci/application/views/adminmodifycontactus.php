<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed'); ?>
<?php print form_open('modifycontactus') ?>
<?php $this->load->view('index.php') ?>
<script type="text/javascript">
$('.dropdown-toggle').dropdown()
</script>
<body>
<?php $this->load->view('adminheader') ?>
<div class="row " height="500px" style="display:flex;">
		
			<?php $this->load->view('adminLeftSlide') ?>

		
			<div class="col-sm-10 bcolor"  height="100%">
		
<!-- for Path only -->
					<div style="padding-top:30px;">
									<?php echo $view?>
									</h1>	<hr style="margin-top:2em;" ></h1>
					</div>
						<div class="mbcolor" role="tabpanel">
							
									<ul class="nav nav-tabs nav-justified" role="tablist">
 
									  <li role="presentation">
									  <a href="#address1" aria-controls="address1" role="tab" data-toggle="tab">Address-1</a>
									  </li>
										<li role="presentation">
									  	<a href="#address2" aria-controls="address2" role="tab" data-toggle="tab">Address-2</a>
									  </li>
									</ul>
									<div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="address1">
			    	<p><span>* </span> Marked fields are mandatory </p>
			    	<form method="post">
			    		<?php foreach ($result as $r) { ?>
			    		<div class="row">
			    			<!--  -->
			    			<div class="col-sm-12">
					    			<div class="col-sm-6 text-right">
					    				<div class="col-sm-3">
					    				<label class=" control-label" >Line 1 *:</label>
					    				</div>
					    					<div class="col-sm-9">
					    					<input type="text" class="form-control" placeholder="max 20 charecater" name="adr1line1" value="<?php echo $r['line1'] ?>">
					    					<span class ="errormsg"><?php print form_error('adr1line1') ?></span> 
					    					</div>
					    			</div>
					    			<div class="col-sm-6">
					    				<div class="col-sm-3 text-right">
					    					<label class=" control-label" >Line 2 *:</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="text"  class="form-control" placeholder="max 20 character" name="adr1_line2" value="<?php echo $r['line2'] ?>">
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
							<div class="col-sm-12">
					    			<div class="col-sm-6 text-right">
					    				<div class="col-sm-3">
					    				<label class=" control-label">City *:</label>
					    				</div>
					    					<div class="col-sm-9">
					    					<input type="text" class="form-control" placeholder="max 20 Char" name="adr1_city" value="<?php echo $r['city'] ?>">
					    					</div>
					    			</div>
					    			<div class="col-sm-6">
					    				<div class="col-sm-3 text-right">
					    					<label class=" control-label">Zip code *:</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="number"  class="form-control" placeholder="max 6 digit" name="adr1_zip" value="<?php echo $r['zip'] ?>">
					    				</div>
					    			</div>

			    			</div>
			    			<!-- newline -->
			    			<div>
			    				<br>
			    				<br>
			    				<br>
			    			</div>
			    			<!--  -->
			    			<div class="col-sm-12">
					    			<div class="col-sm-6 text-right">
					    				<div class="col-sm-3">
					    				<label class=" control-label">Mobile 1 *:</label>
					    				</div>
					    					<div class="col-sm-9">
					    					<input type="number" class="form-control" placeholder="max 10 digit"  name="mobile1" value="<?php echo $r['mobile1'] ?>">
					    					</div>
					    			</div>
					    			<div class="col-sm-6">
					    				<div class="col-sm-3 text-right">
					    					<label class=" control-label">mobile 2 :</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="number"  class="form-control" placeholder="max 10 digit" name="mobile2" value="<?php echo $r['mobile2'] ?>">
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
			    			<div class="col-sm-12">
					    			<div class="col-sm-6 text-right">
					    				<div class="col-sm-3">
					    				<label class=" control-label">Phone No *:</label>
					    				</div>
					    					<div class="col-sm-9">
					    					<input type="text" class="form-control"  placeholder="phone no" name="phone" value="<?php echo $r['phone'] ?>">
					    					</div>
					    			</div>
					    			<div class="col-sm-6">
					    				<div class="col-sm-3 text-right">
					    					<label class=" control-label">Email *:</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="Email"  class="form-control" placeholder="Email" name="email" value="<?php echo $r['email'] ?>">
					    				</div>
					    			</div>

			    			</div>
			    			<div>
			    				<br>
			    				<br>
			    				<br>
			    				
			    			</div>
			    		
			    			<center>
							  <button class="btn btn-warning ">Clear</button>
							  <input type="submit" value="Modify" class="btn btn-primary">
							  </center>
			    		</div>


			    </div>
			    <!-- tab 2 -->
			    <div role="tabpanel" class="tab-pane" id="address2">
			    	<p><span>* </span> Marked fields are mandatory </p>
			    	<form method="post" action="<?php echo base_url().'modifycontactus'?>">
			    	<!-- start row -->
			    	<div class="row">
			    		<div class="col-sm-12">
					    			<div class="col-sm-6 text-right">
					    				<div class="col-sm-3">
					    				<label class=" control-label">Line 1 *:</label>
					    				</div>
					    					<div class="col-sm-9">
					    					<input type="text" class="form-control" placeholder="max 20 charecater" name="adr2_line1" value="<?php echo $r['line3'] ?>">
					    					</div>
					    			</div>
					    			<div class="col-sm-6">
					    				<div class="col-sm-3 text-right">
					    					<label class=" control-label">Line 2 *:</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="text"  class="form-control" placeholder="max 20 character" name="adr2_line2" value="<?php echo $r['line4'] ?>">
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
			    			<div class="col-sm-12">
					    			<div class="col-sm-6 text-right">
					    				<div class="col-sm-3">
					    				<label class=" control-label">City *:</label>
					    				</div>
					    					<div class="col-sm-9">
					    					<input type="text" class="form-control" placeholder="max 20 Char" name="adr2_city" value="<?php echo $r['city2'] ?>">
					    					</div>
					    			</div>
					    			<div class="col-sm-6">
					    				<div class="col-sm-3 text-right">
					    					<label class=" control-label">Zip code *:</label>
					    				</div>
					    				<div class="col-sm-9">
					    				<input type="number"  class="form-control" placeholder="max 6 digit" name="adr2_zip" value="<?php echo $r['zip2'] ?>">
					    				</div>
					    			</div>

			    			</div>
			    			<!-- new line -->
			    			<div>
			    				<br>
			    				<br>
			    				<br>
			    				
			    			</div>
			    			
			    	</div>
			    	<!-- end row -->
	<?php }?>
			    	</form>
			    </div>
    
 					 </div>
					  				</div>
				</div>
			</div>

</div>
</body>