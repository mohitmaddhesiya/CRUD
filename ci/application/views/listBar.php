<nav class="nav navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand pull-right" href="#">JMD</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
          
          <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search" name="search">
              </div>
              <a href="http://www.google.com/<?php echo $this->input->post('search'); ?>" target="_blank" class="btn btn-primary"> Search</a>
          </form>
          <ul class="nav navbar-nav navbar-right">
             <li><?php print anchor('home', 'Home');?></li>
             <li><?php print anchor('aboutus', 'About-us');?></li>
             <li><?php print anchor('faculty', 'Faculty');?></li>
             <li><?php print anchor('result', 'Our-Result');?></li>
             <li><?php print anchor('studymatrial', 'Study-Matrial');?></li>
             <li><?php print anchor('contactus', 'Contact-us');?></li>
          </ul>
      </div><!-- /.navbar-collapse -->
  </nav>