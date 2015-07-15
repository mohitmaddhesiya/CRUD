
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<head>
   <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/datepicker/jquery-1.10.2.js"></script>
  <script src="js/datepicker/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php print base_url() ?>css/autocomplete.css" />
  <script type="text/javascript"  src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="awesome/css/font-awesome.css">
  <script type="text/javascript" src="<?php print base_url() ?>js/jquery.autocomplete.js"></script>  

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
     
   <script type="text/javascript" src="js/login.js">></script>
  <script type="text/javascript" src="js/topersay.js"></script>
  <link rel="stylesheet" type="text/css" href="css/header.css">

   <link rel="stylesheet" type="text/css" href="css/print.css">
  <link rel="stylesheet" type="text/css" href="css/sliderAndContains.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/facilities.css">
    <link rel="stylesheet" type="text/css" href="css/result.css">
        <link rel="stylesheet" type="text/css" href="css/contactsUs.css">
         <link rel="stylesheet" type="text/css" href="css/listBar.css">
              <link rel="stylesheet" type="text/css" href="css/divBoder.css">
              <link rel="stylesheet" type="text/css" href="css/login.css">

  <link rel="stylesheet" type="text/css" href="css/studyMatrial.css">
  
  <script type="text/javascript">
  jQuery(document).ready(function() {
var base_url = '/';
jQuery.getJSON(base_url + 'studymatrialcontroller/SubjectJson', function (data) {
    var SubjectArray = jQuery.map(data, function (name, id) { return { value: name, data: id }; });     
      jQuery('#Subject').autocomplete({
        lookup: SubjectArray,
        onSelect: function (suggestion) {         
          jQuery('#Subject_id').val(suggestion.data);
         // document.getElementById('Subject').form.submit();
          //document.getElementById('facility_id1').value=suggestion.data;
          //document.getElementById('facilities').form.submit();     
        },
        onInvalidateSelection: function () {
          alert('Incorrect value selected');
        }
      }); 
  });
jQuery.getJSON(base_url + 'studymatrialcontroller/WritterJson', function (data) {
    var SubjectArray = jQuery.map(data, function (name, id) { return { value: name, data: id }; });     
      jQuery('#writter').autocomplete({
        lookup: SubjectArray,
        onSelect: function (suggestion) {         
          jQuery('#writter_id').val(suggestion.data);
         // document.getElementById('Subject').form.submit();
          //document.getElementById('facility_id1').value=suggestion.data;
          //document.getElementById('facilities').form.submit();     
        },
        onInvalidateSelection: function () {
          alert('Incorrect value selected');
        }
      }); 
  });


$("#course").change(function (){
  //alert($(this).val());
$('#input_course').val($(this).val());
$('#input_course_id').val($(this).val());
//alert($('#input_course_id').val());

});

});
  $(function() {
    $( "#start_date" ).datepicker({
     dateFormat: 'yy',
     changeYear: true ,
    constrainInput: false});
  });
  $(function() {
    $( "#year" ).datepicker({
     dateFormat: 'yy',
     changeYear: true ,
    constrainInput: false});
  });
  </script>
  <script type="text/javascript">
var dateToday = new Date();
  $(function() {
    $( "#end_date" ).datepicker({dateFormat: 'yy',
      changeYear: true
});
});
  /*$(function() {
  $( "select" )
  .change(function () {
    var str = "";
    $( "select option:selected" ).each(function() {
      str += $( this ).text() + " ";
    });
    alert(str);
    document.getElementById('course').value=str;
  })
   });*/
function confirmation()
{
 return confirm('Are you sure you want to Delete ?'); 
}
  </script>

</head>
