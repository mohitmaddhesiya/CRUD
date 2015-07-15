<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed'); ?>
<?php print form_open('newsupadtion') ?>
<?php $this->load->view('index.php') ?>
<body>
<?php $this->load->view('adminheader') ?>
<div class="row " height="500px" style="display:flex;">
		
			<?php $this->load->view('adminLeftSlide') ?>

		
		
		<div class="col-sm-10 bcolor"  height="100%">
		<?php echo $this->session->flashdata('title');?>
		<?php $this->load->view('adminNewsUp') ?>
</div>
</body>