


<!DOCTYPE html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html>

<?php $this->load->view('index.php') ?>

<body> 

<!-- divid the three part  -->


<?php $this->load->view('header') ?>

<!-- end divid -->


<!-- fixed size nevBar -->
  <?php $this->load->view('listBar') ?>
  
  <!-- end Fixed size  -->




<!-- for between slider news  -->
<div class="row">
     <div class="col-lg-2 col-md-2 col-sm-2 no-float borderright" style="background-color:#D3D3D3">
                 <iframe id="map" width="100%" height="528px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/ourtopper');?>"></iframe>
       </div>
<?php $i=0;
foreach ($no_of_record as $row) {

$total[$i]=$row['total'];
$date[$i]=$row['start'];
$end[$i]=$row['end'];
$i++;
}

?>
<?php $start=0; ?>
    <div class="col-lg-7 col-md-7 col-sm-7" >
<div><h4><strong>our Result: </strong></h4></div>
<div class="scroll" height="500px">      
    <!-- 2014-2015 -->  
    <?php $j=0; ?>      
<?php $count=0;foreach ($total_result as $result) { ?>
<?php if($start==0) {?>
<div class="row">
<div class="col-xs-1 col-md-1">

</div>
</div>
 <h4 class="text-center">
    Batch-<strong> <?php echo $date[$j]."-".$end[$j];
   $start=1;?></strong>
 </h4> 

    <?php } ?>
<?php if($total[$j]==$count) {?>
<div class="row">
<div class="col-xs-1 col-md-1">

</div>
</div>
   <h4 class="text-center">
   
     Batch- <strong><?php echo $date[$j+1]."-".$end[$j+1];$j++;$count=0;?>
     </strong> </h4>   

   <?php }?>  
   
   <!-- <div class="row">   -->   
<div class="col-xs-6 col-md-3">
<div class="thumbnail">
         <img src="<?php echo base_url(); ?>our_result/<?php echo $result['photo_name'] ?>" alt="..." class="img-circle" >
               <div class="caption">
                <h4><?php echo $result['student_name'] ?></h4>
                <p><?php echo $result['exam_name'] ?> - <?php echo $result['rank'] ?></p>
              </div>

   </div>
 </div>   
<!--  </div>  -->            
<?php $count++; ?>
 <?php }?>



            <!-- end 2014-2015 -->
          </div>
    </div>

<div class="col-lg-2 col-md-2  col-sm-2 no-float borderleft" style="background-color:#D3D3D3;">
      <iframe id="map" width="100%" height="528px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/retrieve_course');?>">
                      </iframe>
     
      </div>            
                  <div class="col-lg-1 col-md-1 col-sm-1 no-float border" style="background-color:#D3D3D3">
                      <iframe id="map" width="100%" height="528px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/iframe');?>">
                      </iframe>
                  </div>
</div>
  <!-- end the slider and news -->
<!-- for floter -->
<?php $this->load->view('footer') ?>

</div>
<!-- end floter -->
</body>

</html>