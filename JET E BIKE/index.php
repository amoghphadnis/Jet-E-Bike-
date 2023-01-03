<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'jetebike');

	if (isset($_POST['submit'])) 
	{
 		include 'conn.php';
     	$q = "select * from user ";

	    $query = mysqli_query($conn,$q);

	    while($res = mysqli_fetch_array($query))
	    {
	    	$user = $res['Username'];
	    	$pass = $res['Password'];

	    	$username = $_POST['username'];
	    	$password = $_POST['password'];

		 	if (($user = $username) && (password_verify($password,$pass)))
		 	{
		 		?>
		 		<script>
		 			alert("Login Successful");
		 			window.location = "navigation.html";
		 		</script>
		 		<?php
		 	}
		 	else
		 	{
		 		?>
		 		<script>
		 			alert("Login Unsuccessfull please check the username and password");
		 		</script>
		 		<?php
		 	}
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login Interface</title>
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
		    color:red;
		    background-image:linear-gradient(to right,rgb(1, 83, 1), rgb(2, 197, 2));
		    -webkit-background-clip: text;
		    font-size:300%;
		    transition:all .2s;
		    width:fit-content;
		    font-family: "Monospace", Courier New, Lucida Console;
		    animation-name:moveInRight;
		    animation-duration: 2s;
		    animation-timing-function: ease-in;
		    animation-delay: 0.3s;
		}
		@keyframes moveInRight{
		    0%{
		        opacity:0;
		        text-shadow:none;
		        transform:translateX(-10%);
		    }
		    80%{
		        transform:translateX(5%);
		    }
		    100%{
		        opacity:1;
		    }
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
		    color:red;
		    background-image:linear-gradient(to right,rgb(1, 83, 1), rgb(2, 197, 2));
		    -webkit-background-clip: text;
		    font-size:300%;
		    transition:all .2s;
		    width:fit-content;
		    font-family: "Monospace", Courier New, Lucida Console;
		    animation-name:moveInLeft;
		    animation-duration: 2s;
		    animation-timing-function: ease-in;
		    animation-delay: 0.3s;
		}
		@keyframes moveInLeft{
		    0%{
		        opacity:0;
		        text-shadow:none;
		        transform:translateX(-10%);
		    }
		    80%{
		        transform:translateX(5%);
		    }
		    100%{
		        opacity:1;
		    }
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
                    <h1 class="Heading">  Login Form </h1>
                </div><br>
                <table>

                    <tr>
                        <th><label class="label"> Username: </label></th>
                        <td><input type="text" name="username" class="input"> <br /></td>
                    </tr>
                    <tr>
                        <th><label class="label"> Password: </label></th>
                        <td><input type="password" name="password" class="input"> <br /></td>
                    </tr>
                    
                </table>
                
               
                <button class="submitbtn" type="submit" name="submit">Submit </button><br><br>

                <a href="forgot.php">Forgot Password?</a>
            </div>
 		</form>
 	</div>
 </body>
 </html>