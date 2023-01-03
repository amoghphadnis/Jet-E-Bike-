<?php
	include 'conn.php';
	if (isset($_POST['submit'])) 
	{
		$Id=$_GET['Id'];
		$Date=$_POST['date'];
		$Etron=$_POST['etron'];
		$Etronplus=$_POST['etronplus'];
		$Egnite=$_POST['egnite'];
		$Etrance=$_POST['etrance'];
		$Epluto=$_POST['epluto'];
		$Epluto7g=$_POST['epluto7g'];

		$q = "UPDATE `stock` SET Id='$Id',Date='$Date',Etron='$Etron',Etronplus='$Etronplus',Egnite='$Egnite',Etrance='$Etrance',Epluto='$Epluto',Epluto7g='$Epluto7g' WHERE Id='$Id'";

		mysqli_query($conn, $q);

		header('location:stock.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Stock</title>
	<link rel="icon" href="Images/main.jpg">
	<link rel="stylesheet" type="text/css" href="stock.css">
</head>
<body>
	<div align="center">
		<form method="POST">
			<div>
                    <h1 class="Heading">  Invoice Registration </h1>
                </div><br>
			<table>
				<tr>
					<th align="left"><label  class="heading">Date&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="Date" name="date" class="data"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Tron&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="etron" class="data"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Tron Plus&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="etronplus" class="data"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Gnite&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="egnite" class="data"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Trance&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="etrance" class="data"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Pluto&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="epluto" class="data"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Pluto 7G&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="epluto7g" class="data"></td>
				</tr>
			</table>
			<button name="submit">Submit</button>
		</form>
	</div>
</body>
</html>