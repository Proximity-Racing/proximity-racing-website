<?php
session_start();
include_once 'db_conn.php';
$id = $_SESSION['id'];
if(isset($_POST['submit2'])) {
	$file = $_FILES["file"];
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');
	if(in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 10000000) {
				$fileNameNew = "user".$id.'.'.$fileActualExt;
				$fileDestination = './profile_pictures/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$user_check_query = "UPDATE proximityracing.members 
		        SET profilepic = '$fileNameNew'
		        WHERE id='$id';";
		        mysqli_query($con, $user_check_query);
				header("Location: profile.php?uploadsuccess");
			} else {
				echo "Your file is too big!";
			}
		}
		else {
			echo "There was an error uploading your file!";
		}
	} else {
		echo "You cannot upload files of this type!";
	}
}
?>