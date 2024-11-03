<?php 

require_once 'dbConfig.php';


function seeAllUsersRecords($pdo){

    $sql = "SELECT * FROM user_records";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ( $executeQuery){
        return $stmt->fetchAll();
    }
}

function insertIntoUsersRecords($pdo,$first_name, $last_name, $gender, $job_title, $email_address, $date_added, $branch) {

	$sql = "INSERT INTO user_records (first_name,last_name,gender,job_title,email_address,date_added,branch) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $job_title, 
		$email_address, $date_added, $branch]);

	if ($executeQuery) {
		return true;	
	}
}

function getUserById($pdo, $user_id) {
	$sql = "SELECT * FROM user_records WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$user_id])) {
		return $stmt->fetch();
	}
}

function updateAUser($pdo, $user_id, $first_name, $last_name, 
	$gender, $job_title, $email_address, $date_added, $branch) {

	$sql = "UPDATE user_records 
				SET first_name = ?, 
					last_name = ?, 
					gender = ?, 
					job_title = ?, 
					email_address = ?, 
					date_added = ?, 
					branch = ? 
			WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, 
		$job_title, $email_address, $date_added, $branch, $user_id]);

	if ($executeQuery) {
		return true;
	}
}


function deleteAStudent($pdo, $user_id) {

	$sql = "DELETE FROM user_records WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$user_id]);

	if ($executeQuery) {
		return true;
	}

}

?>