<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
     registeration_form
	</title>
</head>
<body>
		<table border="1">
<?php foreach ($users as $user):?>
	<form method="post" action="/index.php/update/<?=$user['id'];?>">

	<tr>
	 
		<td>
		FirstName :
</td>
<td>

		<input type="text" name="firstname" value="<?=$user['firstname'];?>">
</td>
</tr>
<tr>
	<td>
		LastName  :
     </td>
     <td>
		<input type="text" name="lastname" value="<?=$user['lastname'];?>">
</td>
<tr>
<td>
		Password  :
</td>
<td>
		<input type="password" name="password" value="<?=$user['password'];?>">
</td>
</tr>
<tr>
	<td>
		Addrsess  :
</td>
<td>
		<input type="text" name="address" value="<?=$user['lastname'];?>">
</td>
</tr>
<tr>
	<td>
		City      :
</td>
<td>
		<input type="text" name="city" value="<?=$user['city']?>">
</td>
</tr>
<tr>
<td>
		Pincode   :
</td>
<td>
		<input type="number" name="pincode" value="<?=$user['pin_code'];?>">
</td>
</tr>
<tr>
	<td>
		Email     :
</td>
<td>
		<input type="email" name="email" value="<?=$user['Email'];?>">
</td>

</tr>
<tr>
	<td>
		Mobile No :
</td>

<td>
		<input type="number" name="mobile_no" value="<?=$user['mobile_no'];?>">
</td></tr>
<tr  >
	<td colspan="2"> 
	<input type="submit" value="update" >
</td>
</tr>
<?php endforeach;?>	
	</form>

</table>


</body>
</html>