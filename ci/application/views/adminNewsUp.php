
<!-- for Path only -->
<div style="padding-top:30px;">
<?php echo $view?>
</h1>	<hr style="margin-top:2em;" ></h1>
</div>

<!-- default panel -->
<div class="panel panel-default">
	<!-- from handing -->
	<div class="panel-heading">NEWS UPADATION</div>
	<div class="panel-body">
		<?php echo $this->session->flashdata('title');?>
		
		<p><span>* </span> Marked fields are mandatory </p> 
			<form method="post" action="<?php echo base_url().'test2' ?>">
				<div class="row">
						  		<div class="col-sm-2 text-right"><label for="exampleInputName2" class=" control-label">Username:</label></div>
						  		<div class="col-sm-4"><input type="text" class=" form-control input-lg" name="username" value="<?php echo $session_user ?>" disabled></div>
						  		<div class="col-sm-1 text-right"><label for="exampleInputName2" class=" control-label">Name:</label></div>
						  		<div class="col-sm-4"><input type="text" class=" form-control input-lg" name="name" disabled values=""></div>
						  	</div>
						  	<!-- new line -->
						  	<div>
						  		<br>
						  	</div>
						  	<div class="row">
								<div class="col-sm-2 text-right"><label for="exampleInputName2" <?php form_error('title') ? print 'class="errormsg"' : NULL ?>>Title:<span class="fldred">* </span></label></div>
								<div class="col-sm-4"><input type="text" class=" form-control input-lg" name="title"><span class ="errormsg"><?php print form_error('title') ?></span> </div>
								<div class="col-sm-1 text-right"> <label for="exampleInputName2" <?php form_error('subject') ? print 'class="errormsg"' : NULL ?>>Subject:<span class="fldred">* </span></label></div>	
								<div class="col-sm-4"><input type="text" class=" form-control input-lg" name="subject"><span class ="errormsg"><?php print form_error('subject') ?></span></div>	
									
						</div>
						<!-- new line -->
							<div>
						  		<br>
						  	</div>
						  	<div class="row">
						  	<div class="col-sm-1 text-right" style="margin-top:60px;"> <label for="exampleInputName2" <?php form_error('description') ? print 'class="errormsg"' : NULL ?>>Description:<span class="fldred">* </span></label></div>
						  	<div class="col-sm-11"><textarea class="form-control" rows="7" cols="100" name="description">

						  	</textarea><span class ="errormsg"><?php print form_error('description') ?></span></div>
						  	<!-- new line -->
						  	<div>
						  		
						  		<br>
						  	</div>
						  <div>
						  	<center>
							  <button class="btn btn-warning btn-lg">Reset</button>
							  <input type="submit" value="save" class="btn btn-primary btn-lg">
							  </center>
						</div>
  </div>