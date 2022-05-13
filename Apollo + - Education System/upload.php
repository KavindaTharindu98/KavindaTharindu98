<?php 

	$errors = array();

	if (isset($_POST['submit'])) {
		// submitt button is clicked

		$file_name = $_FILES['upload']['name'];
		$file_type = $_FILES['upload']['type'];
		$file_size = $_FILES['upload']['size'];
		$temp_name = $_FILES['upload']['tmp_name'];

		$upload_to = 'images/';

		// checking the file type
		if ($file_type != 'upload/jpeg')
			{
			$errors[] = 'Only JPEG files are allowed.';
		}

		// checking file size
		if ($file_size > 5000000) {
			$errors[] = 'File size should be less than 5MB.';
		}
		
		if (empty($errors)) {
			$file_uploaded = move_uploaded_file($temp_name, $upload_to . $file_name);
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image Upload</title>
	<style>
		.container { width: 960px; margin: 0 auto; }
		.errors { color: red; margin-bottom: 20px; }
	</style>
</head>
<body>
	<div class="container">
		
		<h1>Image Upload</h1>
		<h3>Choose an Image and Click Upload</h3>

		<?php 
			if (!empty($errors)) {
				echo '<div class="errors">';
				echo '<b>File not uploaded. Check following errors:</b><br>';
				foreach ($errors as $error) {
					echo '- ' . $error;
				}
				echo '</div>';
			}

		 ?>

		<form action = "index.php" method = "POST" enctype="multipart/form-data"/>

    <input type = "file" name = "fileupload"/></br>  
    <input type = "submit" name = "opt" value = "upload"/></br> </br>  

		</form>

		<?php 
			if (isset($file_uploaded)) {
				echo '<h3>Uploaded File</h3>';
				echo '<img src="' . $upload_to . $file_name . '" style="height:200px">';
			}

		 ?>

	</div> <!-- .container -->
</body>
</html>