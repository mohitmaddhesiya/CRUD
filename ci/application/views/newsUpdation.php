<div>
	<div><h2>NEWS</h2></div>
	<hr>
			<marquee direction="down" scrolldelay="200"  height="460px" onmouseover="this.stop();" onmouseout="this.start();">	
				<?php foreach ($result as $q) {?>
				
					<a href="<?php echo $q['subject']?>" target="_blank"> <?php echo $q['title']?></a><hr>
					<?php }?>
		</marquee>
		

	</div>