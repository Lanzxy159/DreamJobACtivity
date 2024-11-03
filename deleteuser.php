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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getUserById = getUserById($pdo, $_GET['user_id']); ?>
	<form action="core/handleForms.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getUserById['first_name']; ?></p>
			<p>Last Name: <?php echo $getUserById['last_name']; ?></p>
			<p>Gender: <?php echo $getUserById['gender']; ?></p>
			<p>Job Title: <?php echo $getUserById['job_title']; ?></p>
			<p>Email Address: <?php echo $getUserById['email_address']; ?></p>
			<p>Date Added: <?php echo $getUserById['date_added']; ?></p>
			<p>Branch: <?php echo $getUserById['branch']; ?></p>
			<input type="submit" name="deleteUserBtn" value="Delete">
		</div>
	</form>
</body>
</html>