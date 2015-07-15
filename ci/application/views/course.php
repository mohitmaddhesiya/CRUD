<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div height="500px">
			<div>

				<strong>POPULAR COURSES</strong>
				<ul>
					<?php foreach($course as $r){?>
					<li><?php echo $r['name'] ?></li>
					<?php } ?>
				</ul>
			</div>
			<hr>
			<div>
				<?php foreach($toppersay as $r){?>
				
				 <strong>Topper Says:</strong><br><br>
				 <img src="<?php echo base_url(); ?>toppersay/<?php echo $r['photo_name'];?>" height="120" width="180"></img><br><br>
			<div>
     
			</div>
				 <div>
				 	<?php echo $r['description']; ?>
				 </div>
				 <?php }?>
			</div>
</div>