<?php
session_start();
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
  include "db_conn.php";
    $success = "File SuccessFully UPloaded.";
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	if ($error === 0) {
		if ($img_size > 1250000) {
			$_SESSION['status_upload']= '<p style="text-align: center;font-size: 1.387rem;background: black;color:rgb(228, 0, 0);text-align:center;,font-weight: bold;,">File Size is Too Large :(</p>';
                header("Location: ../uploads.php?");
		}
		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			$allowed_exs = array("jpg", "jpeg", "png", "pdf"); 
			if (in_array($img_ex_lc, $allowed_exs)) 
			{
				$new_img_name = $img_name;
				$img_upload_path = '../uploads/'.$new_img_name;
				$img_upload_src = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				// Insert into Database
				$sql = "INSERT INTO  phdow(phid,destination)
				        VALUES('$new_img_name','$img_upload_src')";
				mysqli_query($conn, $sql);
				$_SESSION['status_upload'] = '<p style="text-align: center;font-size: 1.387rem; background: black; color:rgb(45 220 1); text-align:center;,font-weight: bold;,">SuccessFully Uploaded!! </p>';
				header("Location: ../uploads.php?");
				// echo "SuccessFully Uploaded";
				// echo " $img_name ";
			}
			else {
				$_SESSION['status_upload']= '<p style="text-align: center;font-size: 1.387rem;background: black;color:rgb(228, 0, 0);text-align:center;,font-weight: bold;,">Something Went Wrong :(</p>';
                header("Location: ../uploads.php?");
		  }
		}
    }
	echo "connected";
}
?>

