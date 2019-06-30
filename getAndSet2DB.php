<a href="Server.php"><input type="submit" name="server" value = "Home"></a><br>

<?php
		if(isset($_POST['submit']))
		{
			$Photo = $_FILES['photo'];
			$fileName = $_FILES['photo']['name'];
			$oldpath = $_FILES['photo']['tmp_name'];
			$newPath = "users/".$fileName;
			
			move_uploaded_file($oldpath, $newPath);

			$server = "127.0.0.1";
			$user = "root";
			$pass = "Akshay";
			$database = "company";
			
			$conn = mysqli_connect($server, $user, $pass, $database);
			if(mysqli_connect_error())
				echo "Fail to Connect".mysqli_connect_error();
			else
				//echo "Connected";

			$sql = "INSERT 	INTO face (photo) VALUES ('$fileName'); ";
			if(mysqli_query($conn,$sql)){
				echo "<br>Inserted";
				header("Location: Server.php");
				exit();
			}
			else
				echo "Error to Insert";
		}

	?>
