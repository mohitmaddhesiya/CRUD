<!DOCTYPE html>
<html>

<?php $this->load->view('index.php') ?>

<body> 

<!-- divid the three part  -->

<div class="row  navbar-fixed-inner body">
  
<!-- jai mata di logo -->
          	<div class="col-sm-4">
          	
          		 <div style="margin-top:10px;margin-left:20px;">
                                                         <img src="<?php echo base_url(); ?>img/jmd.jpg" height="80" width="130" style="box-shadow: 0 20px 25px rgba(10,10,10,10);"></img>
                                                       </div>
          		

          	</div>
<!-- end logo-->
<!-- jai mata di label  -->
          	<div class="col-sm-4">
          		<center class="font">
          				    <h1>JAI MATA DI<br>
          				         CLASSES</h1>
          			</center>    
          	</div>
	<!-- end lable-->
	<!-- jai mata di login and search button -->
           	<div class="col-sm-4">
 <div style="margin-top:30px;">
                           
                             <div class="collapse navbar-collapse" >
                                  <!-- form for search and login -->
                                                      <form class="navbar-form navbar-right" role="search">
                                                         <span style="box-shadow: 0 30px 30px rgba(10,10,10,10);">
                                                          <a herf="#" class="btn btn-default" id="login" >LogIn</a></span>
                                                        <span style="padding-left:5px;box-shadow: 0 30px 30px rgba(10,10,10,10);">
                                                         <img src="<?php echo base_url(); ?>img/facebook.png" height="32" width="32"></img>
                                                       </span>
                                                        <span style="padding-left:5px;box-shadow: 0 30px 30px rgba(10,10,10,10);">
                                                        <img src="<?php echo base_url(); ?>img/youtube.jpg" height="32" width="32"></img>
                                                      </span>
                                                         
                                                       
                                                      </form>
                                  
                                 <!-- end form -->
                                </div>
                             </div>
                             <?php $this->load->view('login') ?>
                                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                                      <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span>Search <br> Login</span>
                                              </button>
                             
                                
                            

                              
          	</div>
	<!-- end login amd search button -->

</div>

<!-- end divid -->




</body>

</html>