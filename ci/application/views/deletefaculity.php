<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed'); ?>
<?php $this->load->view('index.php') ?>
<body>
<?php $this->load->view('adminheader') ?>
<div class="row " height="500px" style="display:flex;">
		
			<?php $this->load->view('adminLeftSlide') ?>

		
			<div class="col-sm-10 bcolor"  height="100%">
					<div style="padding-top:30px;">
											<h4><?php echo $view;?>
											</h4>	<h1><hr style="margin-top:1em; color:red" >
					</div>	
					<div class="table-responsive">
						<form class="">
						<table class="table table-condensed">
							
						
						
 <tr  class="info">
<th>Id</th>
<th>faculty name</th>
<th>Qualification</th>
<th>mobile </th>
<th>email</th>
<th> photo</th>
<th> delete</th>
 </tr>
 <?php foreach ($result as $r){?>
 <tr>
 	<td><?php echo $r['id']?></td>
 	<td><?php echo $r['faculty_name']?></td>
 	<td><?php echo $r['qualification']?></td>
 	<td><?php echo $r['mobile_no']?></td>
 	<td><?php echo $r['email']?></td>
 	<td><img src="<?php echo base_url(); ?>faculty/<?php echo $r['photo_name']?>" height="60" width="100">
<br><?php echo $r['photo_name'] ?></td>
 	<td><?php print anchor('deletefaculity/'.$r['id'].'/delete', 'Delete', array('onclick'=>'return confirmation()')); ?></td>

 </tr>
 <?php }?>
 
      					</table>
						</form>
					</div>	
			</div>
		

</div>
</body>