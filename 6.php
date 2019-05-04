<?php

	$conn = mysqli_connect("localhost","root","","pemilu");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Quick Count</title>
	<style>
		table {
			border-collapse: collapse;
		}

		table tr {
			background-color: #32292F;
			color: #F0F7F4;
		}

		table td {
			font-size: 17px;
		}

		table th {
			background-color: #6E7271;
		}

		button {
			font-size: 14px;
			background-color: #70ABAF;
			color: #F0F7F4;
			height: 40px;
			width: 100%;
		}
	</style>
</head>
<body>
<center>
	<table width="100%" cellpadding="8">
	<?php 
		$result= mysqli_query($conn, "SELECT * FROM candidates");
		while ($data = mysqli_fetch_assoc($result)) {
	?>
		<tr>
			<th width="70%" align="center"><?php echo $data['name'] ?></th>
			<th width="30%" rowspan="2" align="center">
				<form action="6.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<button type="submit" name="submit">Tambah</button>
				</form>
			</th>
		</tr>
		<tr>
			<td align="center">Perolehan suara : <?php echo $data['earned_vote'] ?> </td>
		</tr>
	<?php } ?>
	</table><br>
</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])) {
		$id = $_POST['id'];
		$tambah = mysqli_query($conn, "UPDATE candidates SET earned_vote = earned_vote + 1 WHERE id = '$id'");
		echo "<script type=\"text/javascript\">window.location = '6.php'; </script>";
	}
?>