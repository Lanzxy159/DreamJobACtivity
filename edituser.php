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
	<?php $getUserById = getUserById($pdo, $_GET['user_id']);?>
    <p>
	<form action="core/handleForms.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $getUserById['user_id']; ?>">
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getUserById['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getUserById['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getUserById['gender']; ?>">
		</p>
		<p>
			<label for="job_title">Year Level</label>
			<input type="text" name="job_title" value="<?php echo $getUserById['job_title']; ?>">
		</p>
		<p>
			<label for="email_address">Section</label>
			<input type="text" name="email_address" value="<?php echo $getUserById['email_address']; ?>">
		</p>
		<p>
			<label for="date_added">Date Added</label>
			<input type="text" name="date_added" value="<?php echo $getUserById['date_added']; ?>" readonly >
		<p>
			<label for="branch">Religion</label>
			<input type="text" name="branch" value="<?php echo $getUserById['branch']; ?>">
			<input type="submit" name="editUserbtn">
		</p>
	</form>
</body>
</html>