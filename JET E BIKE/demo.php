<?php 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Invoice Record</title>
 	<link rel="icon" href="Images/main.jpg">
 	<link rel="stylesheet" type="text/css" href="display.css">
 </head>
 <body>
 	<div class="page-wrap">
 		<header class="header" align="Center">Invoice</header>
 		<div>
 			<img src="Images/main.jpg" alt="logo" align="right" width="220px" height="200px" style="margin: auto;">
 		</div>
 		<div class="Dealer">
 			<h2 class="address">
 				C/o Mrs.Shilpa Kulkarni<br>
 				JET-E-BIKE<br>
 				"Yashwanth Plaza"<br>
 				Opp. Indian Bank, Ground Floor,88A<br>
 				Mangalwarpeth, Tilakwadi, Belagavi-590006<br>
 				Telephone:-+91 9986842396<br><br>
 			</h2>
 		</div>
 		<div style="clear: both;"></div>
 		<div class="customer-info">
 			<?php 
 				 include 'conn.php';
				 $Date = date("d/m/y");
 				 $q="select * from invoice where Date='$Date' ";
 				 $query=mysqli_query($conn,$q);
 				 while ($res=mysqli_fetch_array($query)) 
 				 {
 				 ?>
				<p class="customer-title">
 			 		Customer Name:-<?php echo $res['Name']; ?> <br>
 					Address:-<?php echo $res['Address']; ?><br>
 					Mobile:-<?php echo $res['Mobile']; ?><br>
 					Email:-<?php echo $res['Email']; ?><br>
 					GSTIN:-<?php echo $res['GSTIN']; ?></p>
			<?php 
			}
			?>
 		</div><br><br>
 		<div style="clear:both"></div>
 		
 		<div id="customer">
 			 
 			<table id="meta" border="1px">
                <tr>
                    <td class="meta-head">Invoice No.:-</td>
                    <td contenteditable="true">107458</td>
                </tr>
                <?php 
 				 include 'conn.php';
				 $Id = $_GET['Id'];
 				 $q="select * from invoice where Id='$Id' ";
 				 $query=mysqli_query($conn,$q);
 				 while ($res=mysqli_fetch_array($query)) 
 				 {
 				 ?>
                <tr>
                    <td class="meta-head">Name:-</td>
                    <td><?php echo $res['Name']; ?></td>
                </tr>
                <tr>
                    <td class="meta-head">Address:-</td>
                    <td><?php echo $res['Address']; ?></td>
                </tr>
                <tr>
                    <td class="meta-head">Phone:-</td>
                    <td><?php echo $res['Mobile']; ?></td>
                </tr>
                <tr>
                    <td class="meta-head">Date of supply:-</td>
                    <td><?php echo $res['Date']; ?></td>
                </tr>
                <tr>
                    <td class="meta-head">Motor Number:-</td>
                    <td contenteditable="true"></td>
                </tr>
                <tr>
                    <td class="meta-head">Battery Number:-</td>
                    <td contenteditable="true"></td>
                </tr>
                <tr>
                    <td class="meta-head">Chassis Number:-</td>
                    <td contenteditable="true"></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due:-</td>
                    <td contenteditable="true"></td>
                </tr>
                <?php 
 				}
 				?>
            </table>
 		</div><br><br>
 		<div class="items">
 			<table border="2px">
 				<tr>
 					<th>Product</th>
 					<th>Unit Cost</th>
 					<th>Discount</th>
 					<th>Quantity</th>
 					<th>Accessories</th>
 					
 				</tr>
 				<?php 
 				 include 'conn.php';
				 $Id = $_GET['Id'];
 				 $q="select * from invoice where Id='$Id' ";
 				 $query=mysqli_query($conn,$q);
 				 while ($res=mysqli_fetch_array($query)) 
 				 {
 				 ?>
 				<tr>
 					<td><?php echo $res['Product']; ?></td>
 					<td><?php echo $res['Price']; ?></td>
 					<td><?php echo $res['Discount']; ?></td>
 					<td><?php echo $res['Qty']; ?></td>
 					<td><?php echo $res['Accessories']; ?></td>
 					
 				</tr>
 				<?php 
 				}
 				?>
 			</table>
 		</div><br><br><br><br>
 		<div style="clear: both;"></div>
 		<div class="Total">
 				<table>
 					<tr>
 						<?php 
		 				 include 'conn.php';
						 $Id = $_GET['Id'];
		 				 $q="select * from invoice where Id='$Id' ";
		 				 $query=mysqli_query($conn,$q);
		 				 while ($res=mysqli_fetch_array($query)) 
		 				 {
		 				 	$Gst=$res['Gst'];
		 				 	$Gst1=$Gst/2;
		 				 	$Gst2=$Gst/2;
		 				 ?>
 						<th>Taxable Amount:-</th>
 						<td><?php echo $res['TaxableAmount']; ?></td>
	 				</tr>
	 				<tr>
 						<th>GST 5%:-</th>
	 					<td><?php echo $res['Gst']; ?></td>
 					</tr>
 					<tr>
 						<th>SGST:-</th>
	 					<td><?php echo $Gst1; ?></td>
 					</tr>
 					<tr>
 						<th>CGST:-</th>
	 					<td><?php echo $Gst2; ?></td>
 					</tr>
 					<tr>
 						<th>Sub-Total :-</th>
 						<td><?php echo $res['Amount']; ?></td>
 					</tr>
 					<tr>
 						<th>Total :-</th>
 						<td><mark><?php echo $res['TotalAmount']; ?>/-</mark></td>
 					</tr>
 					<?php 
 				}
 				?>
 				</table>
 			</div>
 			<div style="clear: both;"></div>
 			<div class="words">
 					<?php

					 	include 'conn.php';
						 $Id = $_GET['Id'];
		 				 $q="select * from invoice where Id='$Id' ";

		 				 $query=mysqli_query($conn,$q);
		 				 while ($res=mysqli_fetch_array($query)) 
		 				 {
							$number = $res['TotalAmount'];
						  	$no = floor($number);
						   $point = round($number - $no, 2) * 100;
						   $hundred = null;
						   $digits_1 = strlen($no);
						   $i = 0;
						   $str = array();
						   $words = array('0' => '', '1' => 'one', '2' => 'two',
						    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
						    '7' => 'seven', '8' => 'eight', '9' => 'nine',
						    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
						    '13' => 'thirteen', '14' => 'fourteen',
						    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
						    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
						    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
						    '60' => 'sixty', '70' => 'seventy',
						    '80' => 'eighty', '90' => 'ninety');
						   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
						   while ($i < $digits_1) {
						     $divider = ($i == 2) ? 10 : 100;
						     $number = floor($no % $divider);
						     $no = floor($no / $divider);
						     $i += ($divider == 10) ? 1 : 2;
						     if ($number) {
						        $plural = (($counter = count($str)) && $number > 9) ? '' : null;
						        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
						        $str [] = ($number < 21) ? $words[$number] .
						            " " . $digits[$counter] . $plural . " " . $hundred
						            :
						            $words[floor($number / 10) * 10]
						            . " " . $words[$number % 10] . " "
						            . $digits[$counter] . $plural . " " . $hundred;
						     } else $str[] = null;
						  }
						  $str = array_reverse($str);
						  $result = implode('', $str);
						  $points = ($point) ?
						    "." . $words[$point / 10] . " " . 
						          $words[$point = $point % 10] : '';
						  echo $result . "Rupees  " . $points . " Only";
						}
						 ?> 
 				</div>
 		<footer class="footer">
            <span>GSTIN:-29BLAPK8061K1ZR</span> <span> Name:- Bank of Maharashtra, Tilakwadi Branch, Belgaum-590006, Karnataka, India</span><br>
            <span>Bank A/C:-60354231592</span> <spam> Bank IFSC CODE:-MAHB0000159</span>
        </footer>
 	<div align="Center">
 		<a href="invoice.php"><button id="homebutton" value="Home">Home</button></a>
		<button id="printpagebutton" value="Print" onclick="window.print();">Print</button>
	</div>
 	</div>
 </body>
 </html>
 