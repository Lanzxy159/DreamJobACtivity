<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>USER MANAGEMENT SYSTEM</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="first_name"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="last_name"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="job_title">Job Title</label> <input type="text" name="job_title"></p>
		<p><label for="email_address">Email Address</label> <input type="text" name="email_address"></p>
		<p><label for="date_added">Date Added</label> <input type="date" name="date_added" ></p>
		<p><label for="branch">Branch</label> <input type="text" name="branch">
			<input type="submit" name="insertUserBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>User ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Job Title</th>
	    <th>Email address</th>
	    <th>Date added</th>
	    <th>Branch</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllUsersRecords = seeAllUsersRecords($pdo); ?>
	  <?php foreach ($seeAllUsersRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['user_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['job_title']; ?></td>
	  	<td><?php echo $row['email_address']; ?></td>
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td><?php echo $row['branch']; ?></td>
	  	<td>
	  		<a href="edituser.php?user_id=<?php echo $row['user_id'];?>">Edit</a>
	  		<a href="deleteuser.php?user_id=<?php echo $row['user_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>