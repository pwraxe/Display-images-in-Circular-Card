<?php
	$server = "127.0.0.1";
	$user = "root";
	$pass = "Akshay";
	$database = "company";
	
	$conn = mysqli_connect($server, $user, $pass, $database);
	if(mysqli_connect_error())
		echo "Fail to Connect".mysqli_connect_error();
	else
		//echo "Connected";

	$sql = "SELECT * FROM face;";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$file = $row['photo'];
		
		$path = "users/".$file."";
		?>
		<div>
			<?php
			echo "<img src ='".$path."'>";
			
			?>
		</div>
		<?php

	}
	$plusPath = "plus.png";
	echo "<div><a href = 'index.php'><img src = '".$plusPath."'  class = 'plusImg'></a></div>";

?>
<style type="text/css">
	div{
		display: flex;
		float: left;
		width: 200px;
		height: 200px;
		overflow: hidden;
		border-radius: 50%;
		margin: 20px;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
	}
	img{
		width: 200px;
		height: 200px;
	}
	.plusImg{
		width: 50%;
		height: 50%;
		margin: 50px;
	}

</style>
