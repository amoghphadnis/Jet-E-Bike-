<?php
	include 'conn.php';
	if (isset($_POST['submit'])) 
	{
		$Date=$_POST['date'];
		$Etron=$_POST['etron'];
		$Etronplus=$_POST['etronplus'];
		$Egnite=$_POST['egnite'];
		$Etrance=$_POST['etrance'];
		$Epluto=$_POST['epluto'];
		$Epluto7g=$_POST['epluto7g'];

		$q="INSERT INTO stock VALUES (`Id`,'$Date','$Etron','$Etronplus','$Egnite','$Etrance','$Epluto','$Epluto7g')";
		$query = mysqli_query($conn,$q);
	    if(mysqli_query($conn, $query))
	    {

	    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stock</title>
	<link rel="icon" href="Images/main.jpg">
	<link rel="stylesheet" type="text/css" href="stock.css">
</head>
<body>
    <div id="myNav" class="overlay">
  		<a href="javascript:void(0)" class=
  			"closebtn"

	  		onclick="closeNav()">&times;
	  	</a>
	  	<div class="overlay-content">
	    	<a href="navigation.html">Home</a>
	  	</div>
	</div>


<span style="font-size:30px;cursor:
pointer"

onclick="openNav()">&#9776;
Menu</span>
	<div align="center" class="mainForm">
		<form action="stock.php" method="POST">
			<div>
                    <h1 class="Heading">  Stock </h1>
                </div><br>
			<table>
				<tr>
					<th align="left"><label  class="heading">Date&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="Date" name="date" class="data" id="txtDate" min="<?= date('Y-m-d'); ?>"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Tron&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="etron" class="data" min="1"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Tron Plus&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="etronplus" class="data" min="1"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Gnite&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="egnite" class="data" min="1"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Trance&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="etrance" class="data" min="1"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Pluto&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="epluto" class="data" min="1"></td>
				</tr>
				<tr>
					<th align="left"><label  class="heading">E-Pluto 7G&nbsp;&nbsp;&nbsp;<span class="collan">:</span></label></th>
					<td><input type="number" name="epluto7g" class="data" min="1"></td>
				</tr>
			</table>
			<button name="submit" class="submit">Submit</button>
		</form>
	</div>
	<div>
		<h1 class="instock">In-Stock</h1>
		<table>
			<tr>
				<!-- <th class="Heading-table">Id</th> -->
				<th class="Heading-table">Date</th>
				<th class="Heading-table">E-Tron</th>
				<th class="Heading-table">E-Tron Plus</th>
				<th class="Heading-table">E-Gnite</th>
				<th class="Heading-table">E-Trance</th>
				<th class="Heading-table">E-Pluto</th>
				<th class="Heading-table">E-Pluto 7G</th>
			</tr>
			<?php
				include 'conn.php';
                 $q = "select * from stock ";

                 $query = mysqli_query($conn,$q);

                 while($res = mysqli_fetch_array($query))
                 {
			?>
			<tr>
				<!-- <td class="data-table"><?php echo $res['Id']; ?></td> -->
				<td class="data-table"><?php echo $res['Date']; ?></td>
				<td class="data-table"><?php echo $res['Etron']; ?></td>
				<td class="data-table"><?php echo $res['Etronplus']; ?></td>
				<td class="data-table"><?php echo $res['Egnite']; ?></td>
				<td class="data-table"><?php echo $res['Etrance']; ?></td>
				<td class="data-table"><?php echo $res['Epluto']; ?></td>
				<td class="data-table"><?php echo $res['Epluto7g']; ?></td>
				<td><a href="deletestock.php?Id=<?php echo $res['Id']; ?>"> <button class="button">  Delete  </button> </a> </td>
                <td><a href="updatestock.php?Id=<?php echo $res['Id']; ?>"> <button class="button">  Update  </button> </a> </td>
			</tr>
			<?php } ?>
		</table>
		<h1 class="instock">In-Stock Vehicle wise details</h1>
		<table>
			<?php
				include 'conn.php';
                 $q = "SELECT SUM(Etron) AS sum_ETRON FROM stock";

                 $query = mysqli_query($conn,$q);

                 while($res = mysqli_fetch_array($query))
                 {
			?>
			<tr>
				<th class="Heading-table">Total No. of ETRON</th>
				<td class="data-table"><?php echo $res['sum_ETRON']; ?></td>
			</tr>
			<?php } ?>
			<?php
				include 'conn.php';
                 $q = "SELECT SUM(Etronplus) AS sum_ETRONplus FROM stock";

                 $query = mysqli_query($conn,$q);

                 while($res = mysqli_fetch_array($query))
                 {
			?>
			<tr>
				<th class="Heading-table">Total No. of ETRON PLUS</th>
				<td class="data-table"><?php echo $res['sum_ETRONplus']; ?></td>
			</tr>
			<?php } ?>
			<?php
				include 'conn.php';
                 $q = "SELECT SUM(Egnite) AS sum_Egnite FROM stock";

                 $query = mysqli_query($conn,$q);

                 while($res = mysqli_fetch_array($query))
                 {
			?>
			<tr>
				<th class="Heading-table">Total No. of EGNITE</th>
				<td class="data-table"><?php echo $res['sum_Egnite']; ?></td>
			</tr>
			<?php } ?>
			<?php
				include 'conn.php';
                 $q = "SELECT SUM(Etrance) AS sum_ETRANCE FROM stock";

                 $query = mysqli_query($conn,$q);

                 while($res = mysqli_fetch_array($query))
                 {
			?>
			<tr>
				<th class="Heading-table">Total No. of ETRANCE</th>
				<td class="data-table"><?php echo $res['sum_ETRANCE']; ?></td>
			</tr>
			<?php } ?>
			<?php
				include 'conn.php';
                 $q = "SELECT SUM(Epluto) AS sum_EPLUTO FROM stock";

                 $query = mysqli_query($conn,$q);

                 while($res = mysqli_fetch_array($query))
                 {
			?>
			<tr>
			<th class="Heading-table">Total No. of EPLUTO</th>
				<td class="data-table"><?php echo $res['sum_EPLUTO']; ?></td>
			</tr>
			<?php } ?>
			<?php
				include 'conn.php';
                 $q = "SELECT SUM(Epluto7g) AS sum_EPLUTO7g FROM stock";

                 $query = mysqli_query($conn,$q);

                 while($res = mysqli_fetch_array($query))
                 {
			?>
			<tr>	
				<th class="Heading-table">Total No. of EPLUTO 7G</th>
				<td class="data-table"><?php echo $res['sum_EPLUTO7g']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div>
		<h1 class="instock">Out-Stock</h1>
		<table>
			<tr>
				<!-- <th class="Heading-table">Id</th> -->
				<th class="Heading-table">Date</th>
				<th class="Heading-table">Name</th>
				<th class="Heading-table">Mobile</th>
				<th class="Heading-table">Product</th>
				<th class="Heading-table">Quantity</th>
				<th class="Heading-table">Accessories</th>
				<th class="Heading-table">Total Amount</th>
			</tr>
			<?php
				include 'conn.php';
                 $q = "select * from invoice ";

                 $query = mysqli_query($conn,$q);

                 while($res = mysqli_fetch_array($query))
                 {
			?>
			<tr>
				<!-- <td class="data-table"><?php echo $res['Id']; ?></td> -->
				<td class="data-table"><?php echo $res['Date']; ?></td>
				<td class="data-table"><?php echo $res['Name']; ?></td>
				<td class="data-table"><?php echo $res['Mobile']; ?></td>
				<td class="data-table"><?php echo $res['Product']; ?></td>
				<td class="data-table"><?php echo $res['Qty']; ?></td>
				<td class="data-table"><?php echo $res['Accessories']; ?></td>
				<td class="data-table"><?php echo $res['TotalAmount']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<script>
    function openNav() 
    {
     document.getElementById("myNav")
     .style.width = "20%";
    }

    function closeNav() 
    {
     document.getElementById("myNav")
     .style.width = "0%";
    }
</script>
</body>
</html>