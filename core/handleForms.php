<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertUserBtn'])) {
	$firstName = trim($_POST['first_name']);
	$lastName = trim($_POST['last_name']);
	$gender = trim($_POST['gender']);
	$job_title = trim($_POST['job_title']);
	$email_address = trim($_POST['email_address']);
	$date_added = trim($_POST['date_added']);
	$branch = trim($_POST['branch']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($job_title) && !empty($email_address) && !empty($date_added) && !empty($branch)) {

		$query = insertIntoUsersRecords($pdo, $firstName, $lastName, $gender, $job_title, $email_address, $date_added, $branch);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

};


if (isset($_POST['editUserbtn'])) {
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id']; 
    } else {
        echo "User ID is missing.";
        exit; 
    }
    
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $gender = trim($_POST['gender']);
    $job_title = trim($_POST['job_title']);
    $email_address = trim($_POST['email_address']);
    $date_added = trim($_POST['date_added']);
    $branch = trim($_POST['branch']);

    if (!empty($user_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($job_title) && !empty($email_address) && !empty($date_added) && !empty($branch)) {
        $query = updateAUser($pdo, $user_id, $firstName, $lastName, $gender, $job_title, $email_address, $date_added, $branch);

        if ($query) {
            header("Location: ../index.php");
            exit; 
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}


if (isset($_POST['deleteUserBtn'])) {

	$query = deleteAStudent($pdo, $_GET['user_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}





?>

