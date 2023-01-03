<?php  

        if (isset($_POST['submit'])) 
        {
                $mob = $_POST['mobile'];

                $username = "amoghphadnis20@gmail.com";
                $hash = "8789a8260118d3e19f65c78087c3490016a263503410acde55903300e6c93f6e";

                $test = "0";

                $sender = "TXTLCL"; 
                $numbers = "$mob"; 
                $message = "Dear JET-E-BIKE user, your password is jetebike@123";
                
                $message = urlencode($message);
                $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
                $ch = curl_init('http://api.textlocal.in/send/?');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                curl_close($ch);

                header("location:index.php");
        } 
?>
<!DOCTYPE html>
<html>
<head>
        <title>Forgot Password</title>
        <link rel="icon" href="Images/main.jpg">
        <style type="text/css">
                body
                {
                    background: linear-gradient(#11d161f5, rgba(14, 207, 221, 0.918));
			height: 98vh;
			background-repeat: no-repeat;
			background-size: cover;
                }
                .bgimage
                { 
                        clear: both;
                        opacity: 5%;
                }
                .Heading
                {
                    display:block;
                    text-align:center;
                    margin-top:7%;
                    margin-left:10%;
                    margin-right: 10%;
                    text-transform:uppercase;
                    letter-spacing: 10px;
                    color:tomato;
                    background-image:linear-gradient(to right,rgb(1, 83, 1), rgb(2, 197, 2));
                    -webkit-background-clip: text;
                    font-size:300%;
                    transition:all .2s;
                    width:fit-content;
                    font-family: "Monospace", Courier New, Lucida Console;
                }
                .heading
                {
                    display:block;
                    text-align:center;
                    margin-top:3%;
                    margin-left:10%;
                    margin-right: 10%;
                    text-transform:uppercase;
                    letter-spacing: 10px;
                    color:tomato;
                    background-image:linear-gradient(to right,rgb(1, 83, 1), rgb(2, 197, 2));
                    -webkit-background-clip: text;
                    font-size:300%;
                    transition:all .2s;
                    width:fit-content;
                    font-family: "Monospace", Courier New, Lucida Console;
                }

                .label
                {
                    color: white;
                    font-size: 25px;
                }
                .input
                {
                    width: 250px;
                    height: 25px;
                    border-radius: 10%;
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 20px;
                }
        </style>
</head>
<body>
        <div>
                <form method="POST">
            <br><br>
            <div class="container" align="center">
                                
                                <div>
                                        <h1 class="heading"> JET-E-BIKE BELGAUM</h1>
                                </div><br>
                <div>
                    <h1 class="Heading">Forgot Password</h1>
                </div><br>
                <table>

                    <tr>
                        <th><label class="label"> Mobile Number: </label></th>
                        <td><input type="text" name="mobile" class="input"> <br /></td>
                    </tr>
                    
                </table>
                
               
                <button class="submitbtn" type="submit" name="submit">Submit </button><br>
            </div>
                </form>
        </div>
 </body>
</html>