<html lang="en">
<!-- this form is use for CRUD application -->
<head>
	<meta charset="utf-8">
	<title>
     registeration_form
	</title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/.css" type="text/css" media="screen" />
</head>
<body>
		<table border="1">
<form method="post" action="index.php/setuser/">
	<tr>
	 
		<td>
		FirstName :
</td>
<td>

		<input type="text" name="firstname" value="">
</td>
</tr>
<tr>
	<td>
		LastName  :
     </td>
     <td>
		<input type="text" name="lastname" value="">
</td>
<tr>
<td>
		Password  :
</td>
<td>
		<input type="password" name="password" value="">
</td>
</tr>
<tr>
	<td>
		Addrsess  :
</td>
<td>
		<input type="text" name="address" value="">
</td>
</tr>
<tr>
	<td>
		City      :
</td>
<td>
		<input type="text" name="city" value="">
</td>
</tr>
<tr>
<td>
		Pincode   :
</td>
<td>
		<input type="number" name="pincode" value="">
</td>
</tr>
<tr>
	<td>
		Email     :
</td>
<td>
		<input type="email" name="email" value="">
</td>

</tr>
<tr>
	<td>
		Mobile No :
</td>

<td>
		<input type="text" name="mobile_no" value="" maxlength="10">
</td></tr>
<tr  >
	<td colspan="2"> 
	<input type="submit" value="submit" >
</td>
</tr>

	</form>
</table>


</body>
</html>