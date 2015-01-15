<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		user_view
	</title>
<head>
	<body>

		<table border="1">
			<th>FirstName :</th>
			<th>LastName</th>
			<th>Passowrd</th>
			<th>Address</th>
			<th>City</th>
			<th>pincode</th>
			<th>Email</th>
		    <th>mobile</th>
		    <th><a href="index.php/regis">add<a/></th>
		    <?php foreach ($users as $user): ?>
			<tr>
			<td><?= $user['firstname']?></td>
			<td><?= $user['lastname']?></td>
			<td><?= $user['password']?></td>
			<td><?= $user['address']?></td>
            <td><?= $user['city']?></td>
			<td><?= $user['pin_code']?></td>
			<td><?= $user['Email']?></td>
			<td><?= $user['mobile_no']?></td>
           
			<td><a href="index.php/regis/<?= $user['id']?>">edit</a></td><td><a>delete</a></td>

			</tr>
		<?php endforeach; ?>
		</table>

	</body>
</html>