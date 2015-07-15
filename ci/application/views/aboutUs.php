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
<div class="row" >
    	<div class="col-lg-2 col-md-2 col-sm-2 no-float borderright" style="background-color:#D3D3D3">
                 <iframe id="map" width="100%" height="528px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/ourtopper');?>"></iframe>
       </div>           <!-- for container clas -->
 <div class="col-lg-7 col-md-7 col-sm-7 no-float" height="100px">
     	<div class="caption">
        <h1>About-Us :</h1>

        <span>
<strong>JMD</strong> classes is the leading institute of basti district in the preparation for the competitive exams and board exam.
 classes is the best institute for<strong> SSC and Bank Exam </strong>Preparation. <strong>JMD </strong>classes Is an ace institute that provides best <strong> Bank PO, Bank Clerical, IBPS CWE Coaching, CWE PO, CWE Clerical, SBI PO, SBI Clerical, RBI Coaching, IBPS Specialist Officers </strong> and other one day exams Coaching. Also, <strong>JMD</strong> through its quality guidance and standard approach have made a remarkable name in providing best SSC Graduate Level Coaching, SSC 12th level Coaching. Jmd classes is basti's foremost institute for providing best coaching for <strong> UPTET, CTET,  Coaching, Insurance, FCI, Intelligence Bureau, LIC Exams, National Health Care Organization, Railways, </strong> and other Govt. entrance exams. Having 2 centers throughout Basti,  has become a centre of excellence in guiding students through various compatative  Exams.
<strong>JMD</strong> classes being the Best compatative exam coaching center offers complete in depth classroom training programme to prepare the students for the  RRB, Specialist Officers and Clerical Exams conducted by IBPS, SBI and other associate banks of SBI. It is the premium institute for SSC Exam Coaching <strong>(SSC CGL, SSC 10th plus, Multitasking etc.)</strong> in bankati block region. Jmd classes Competitive Exam Coaching Institute  is at present acknowledged as multi situated, multi- program  teaching professional and offers wide variety of courses not only for state level entrance exams but national level exams like<strong> CTET, Staff Selection Commission, Life Insurance Corporation, National Health Care Organization</strong>  etc. Also, the coaching provided by <strong>JMD</strong> classes focuses on strengthening the student’s conceptual clarity of the fundamentals in Mathematics, Computers, Reasoning and English.
<strong>JMD</strong> is embraced with highly trained, dedicated and experienced faculty team with complementary skills to provide best in class service, and has been acknowledged as best by the students. Over the last 4 years, <strong>JMD</strong>  has succeeded in making the careers of more than 400 aspirants


        </span>
      </div>
 	</div>
<div class="col-lg-2 col-md-2 col-sm-2  no-float borderleft" style="background-color:#D3D3D3;">
      <iframe width="100%" height="528px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/retrieve_course');?>">
                      </iframe>

     
      </div>              
                  <div class="col-lg-1 col-md-1 col-sm-1 no-float border" style="background-color:#D3D3D3">
                      <iframe id="map" height="528px" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo site_url('homecontroller/iframe');?>">
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