<div>
	<div><h4>Our Topperes</h4></div>
	<hr>

			<marquee direction="down" scrolldelay="200" >	
		<?php foreach ($result as $q) {?>
		<img src="<?php echo base_url(); ?>uploads/<?php echo $q['photo']?>" height="120" width="200"><b><?php echo $q['name'].'('.$q['year'].')'?></b></img><hr>
				<?php } ?>
		</marquee>
	
		

	</div>