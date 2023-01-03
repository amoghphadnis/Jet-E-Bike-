<?php

include 'conn.php';

if(isset($_POST['done']))
{
    $Id=$_GET['Id'];
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Mobile = $_POST['Mobile'];
    $EmailID = $_POST['EmailID'];
    $GSTIN = $_POST['GSTIN'];
    $Product = $_POST['Product'];
    $qty = $_POST['qty'];
    $Desc = $_POST['Desc'];
    $Date = $_POST['Date'];
    $slp=$_POST['slp'];
    $Price = 0;
    $Gst = 0;
    $Amount = 0;
    if(isset($_POST['Product']))
    {
        $Product = $_POST['Product'];
        switch ($Product) 
        {
            case 'E-Tron':
                echo "<h3><mark>This is Etron</mark></h3></br>";
                $Price=29999;
                $Dis=$Price-$slp;
                $Tax=( $slp / 105) * 100;
                $Gst=$Tax*5/100.0;
                $Amount=$Tax+$Gst;
                $Amount2=$Amount*$qty;
                break;
            case 'E-Tron Plus':
                echo "<h3><mark>This is Etron PLus</mark></h3></br>";
                $Price=31999;
                $Dis=$Price-$slp;
                $Tax=( $slp / 105) * 100;
                $Gst=$Tax*5/100.0;
                $Amount=$Tax+$Gst;
                $Amount2=$Amount*$qty;
                break;
            case 'E-Gnite':
                echo "<h3><mark>This is Egnite</mark></h3></br>";
                $Price=46999;
                $Dis=$Price-$slp;
                $Tax=( $slp / 105) * 100;
                $Gst=$Tax*5/100.0;
                $Amount=$Tax+$Gst;
                $Amount2=$Amount*$qty;
                break;
            case 'E-Trance':
                echo "<h3><mark>This is Etrance</mark></h3></br>";
                $Price=49999;
                $Dis=$Price-$slp;
                $Tax=( $slp / 105) * 100;
                $Gst=$Tax*5/100.0;
                $Amount=$Tax+$Gst;
                $Amount2=$Amount*$qty;
                break;
            case 'E-Pluto':
                echo "<h3><mark>This is Epluto</mark></h3></br>";
                $Price=64999;
                $Dis=$Price-$slp;
                $Tax=( $slp / 105) * 100;
                $Gst=$Tax*5/100.0;
                $Amount=$Tax+$Gst;
                $Amount2=$Amount*$qty;
                break;
            case 'E-Pluto 7g':
                echo "<h3><mark>This is Epluto 7g</mark></h3></br>";
                $Price=85999;
                $Dis=$Price-$slp;
                $Tax=( $slp / 105) * 100;
                $Gst=$Tax*5/100.0;
                $Amount=$Tax+$Gst;
                $Amount2=$Amount*$qty;
                break;
            default:
                
                break;
        }
    }
    $q = "UPDATE `invoice` SET Id='$Id', Name='$Name',Address='$Address',Mobile='$Mobile',Email='$EmailID',GSTIN='$_GET',Product='$Product',Price='$Price',Discount='$Dis',Qty='$qty',Gst='$Gst',TaxableAmount='$Tax',Accessories='$Desc',Date='$Date',Amount='$Amount',TotalAmount='$Amount2' WHERE Id='$Id'";
    $query = mysqli_query($conn,$q);
    if(mysqli_query($conn, $query))
    {

    }
    header('location:invoice.php');
    ?>
    <script>
        alert("Record Inserted Successfully");
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Update</title>
 <link rel="icon" href="Images/main.jpg">
<link rel="stylesheet" type="text/css" href="invoice.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style=" height:100vh;">
   
<!-- <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button> -->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class=
  "closebtn"

  onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="navigation.html">Home</a>
  </div>
</div>


<p style="text-align:center;transform:translateX(-16%)"><span style="font-size:30px;cursor:
pointer;"

onclick="openNav()">&#9776;
Menu</span></p>

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
    mybutton = document.getElementById("myBtn");

</script>
 
    <div class="mainForm">
        <form method="POST">

            <br><br>
            <h1 class="Heading">  Invoice <br />Registration </h1><br>
            <table>
                    <tr>
                        <th><label class="label"> Name: </label></th>
                        <td><input type="text" name="Name" class="input"> <br /></td>
                    </tr>
                    <tr>
                        <th><label class="label"> Address: </label></th>
                        <td><input type="text" name="Address" class="input"> <br /></td>
                    </tr>
                    <tr>
                        <th><label class="label"> Mobile Number: </label></th>
                        <td><input type="text" name="Mobile" class="input" maxlength="10" required > <br /></td>
                    </tr>
                    <tr>
                        <th><label class="label"> Email ID: </label></th>
                        <td><input type="text" name="EmailID" class="input"> <br /></td>
                    </tr>
                    <tr>
                        <th><label class="label"> GSTIN: </label></th>
                        <td><input type="text" name="GSTIN" class="input"> <br /></td>
                    </tr>
                    <tr>
                        <th><label class="label"> Product: </label></th>
                        <td><select name="Product" class="input" style=" width:240px;">
                            <option value="E-Tron">E-Tron</option>
                            <option value="E-Tron Plus">E-Tron Plus</option>
                            <option value="E-Gnite">E-Gnite</option>
                            <option value="E-Trance">E-Trance</option>
                            <option value="E-Pluto">E-Pluto</option>
                            <option value="E-Pluto 7g">E-Pluto 7g</option>
                        </select> <br /></td>
                    </tr>   
                    <tr>
                        <th><label class="label"> Product quantity: </label></th>
                        <td><input type="Number" name="qty" class="input" min="1"> <br /></td>
                    </tr>
                    <tr>
                        <th><label class="label"> Selling Price: </label></th>
                        <td><input type="Number" name="slp" class="input" min="0"> <br /></td>
                    </tr>
                    <tr>
                        <th><label class="label"> Accessories: </label></th>
                        <td><input type="text" name="Desc" class="input"> <br /></td>
                    </tr>  
                    <tr>
                        <th><label class="label"> Date of Delivery: </label></th>
                        <td><input type="Date" name="Date" class="input" min="<?= date('Y-m-d'); ?>" style="width:240px;"> <br /></td>
                    </tr>
                    
                </table>
                <button type="submit" name="done" class="btnSubmit">Submit </button><br>
            <!-- <div class="container">

                    
                
                
                
                
            </div> -->
            <?php 
                if (isset($_POST['done'])) 
                {
                    $mob = $_POST['Mobile'];
                    $name = $_POST['Name'];
                    $prdct = $_POST['Product'];
                    $addr = $_POST['Address'];


                    $username = "amoghphadnis20@gmail.com";
                    $hash = "8789a8260118d3e19f65c78087c3490016a263503410acde55903300e6c93f6e";

                    
                    $test = "0";

                    
                    $sender = "TXTLCL"; 
                    $numbers = "$mob"; 
                    $message = "Dear $name resident of $addr, Thank you for Purchasing $prdct from us. Have a great Ride!";
                    
                    $message = urlencode($message);
                    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
                    $ch = curl_init('http://api.textlocal.in/send/?');
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch); 
                    curl_close($ch);

                }
                ?>
        </form>
    </div>

    

 <script type="text/javascript">
 
    $(document).ready(function()
    {
        $('#tabledata').DataTable();
    }) 
 
 </script>

</body>
</html>