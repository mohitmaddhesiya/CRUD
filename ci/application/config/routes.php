<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "homecontroller";
$route['ci']="homecontroller";
$route['ci/newsUpdation']='homecontroller';
$route['newsUpadtion']='homecontroller/iframe';
$route['404_override'] = '';
$route['home']='homecontroller';
$route['result']='resultcontroller/our_result';
$route['faculty']='facultycontroller';
$route['aboutus']='aboutuscontroller';
$route['studymatrial']='studymatrialcontroller/retrieve';
$route['contactus']='contactuscontroller';
$route['ourtopper']='homecontroller/ourtopper';
$route['login']='logincontroller';
$route['logout']='logincontroller/logout';
$route['modifycontactus']='contactuscontroller/modifycontactus';
$route['modifycourse']='modifycourse';
$route['course']='homecontroller/retrieve_course';
$route['modifytoper']='modifytoper';
$route['modifytoper/submit']='modifytoper/do_upload';
$route['upload_controller/do_upload']='test/do_upload';
$route['modifyresult']='resultcontroller/modifyresult';
$route['modifystudymatrial']='studymatrialcontroller/adminuploadfile';
$route['modifyfaculity']='facultycontroller/modifyfaculity';
$route['newsupadtion']='newsupdatecontroller';
$route['deleteourtopper']='modifytoper/deleteourtoppers';
$route['deleteourtopper/(:num)/delete']='modifytoper/deletetopper/$1';
$route['deletenews']='newsupdatecontroller/deletenews';
$route['deletenews/(:num)/delete']='newsupdatecontroller/delete_news/$1';
$route['deletefaculity']='facultycontroller/deleteretrive';
$route['deletefaculity/(:num)/delete']='facultycontroller/delete_faculity/$1';
$route['deletestudymatrial']='studymatrialcontroller/deleteretrieve';
$route['deletestudymatrial/(:num)/delete']='studymatrialcontroller/delete_studymatrial/$1';
$route['deleteourresult']='resultcontroller/deleteretrieve';
$route['deleteourresult/(:num)/delete']='resultcontroller/delete_ourresult/$1';
$route['downloads/(:num)']='studymatrialcontroller/downloads/$1';
/* End of file routes.php */
/* Location: ./application/config/routes.php */
