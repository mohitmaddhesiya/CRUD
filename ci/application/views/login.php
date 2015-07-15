<?php if (!defined('BASEPATH')) die('Direct access to the script is not allowed'); ?>
<?php print form_open('login') ?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">LogIn</h4>
            </div>
                  
            <form  class="form-inline">
            <div class="modal-body form-group">
            
               <div class="input-group margin">

                 <span class="glyphicon glyphicon-user input-group-addon" height="120"></span>
               <input type="text" class="form-control"  placeholder="User Name" id="user" name="user">
               <input type="password" class="form-control"   placeholder="Password" name="password">
       </div>
  
            </div>
    
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
          </form>
        </div>
    </div>
</div>