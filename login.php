<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		
		function fun2()
		{
			document.f.username.value=document.f.password.value="";
		}
		function show()
		{
			document.f.password.type="text";
			document.f.o.value="Hide Password";
					
		}
		function hide()
		{
			document.f.password.type="password";
	        	document.f.o.value="Show Password";
		}
		

	</script>
</head>
<body style="background-color: #ebf6f7">
		<div style="height: 80px; background-color: black;">
			<img align="center"  src="awslogo.png"style="margin-left: 20px;margin-top:20px;"  width="80" height="50" >
			<input type="button" value="Create Free AWS Account" onclick="window.location.href='reg.php'"  style="color: white; border-radius: 5%; float:right; background-color:#ffbd31; color: black; height: 30px;width: 230px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;margin-top: 30px;margin-right: 30px;">

		

	</div>
<h3 align="center"> Login AWS Account</h3>
	
<form name="f" action="check.php" method="post">
	<table align="center" style="background-color:white; width: 500px;height: 200px; border-radius: 20px;">
		<tr align="center">
			<td>
				<br>
				<img src="gf.png" width="99" height="99" style="border-radius: 50%;">
			</td>
		</tr>
		<tr align=center>
			<td>
<p style="margin-left:-100px;margin-bottom:0px;"> Enter Email or Phone Number*</p>
				
	                        
				<input type="email" name="un" placeholder="Enter the Email..." style="height: 40px; width: 270px; border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;">
				<br>
			</td>
		</tr>
		<tr align=center>
			<td>

				
				<p style="margin-left:-230px;margin-bottom:0px;">Password*</p>
				<input type="password" name="pw" placeholder="Enter the Password..."  style="height: 40px; width:270px ;border: solid 1px #c2c4c6; font-size:16px; padding-left:30px;"><br>
				<a href="https://support.google.com/?hl=en" style="text-decoration: none; color:#1974d2;margin-left: 160px;margin-top: 5px;">Need Help?</a>
			</td>
		</tr>
		<tr align=center>
			<td>
			<br>
				<input type="button" value="Show Password"  onclick="show();" ondblclick="hide();" name="o"  style="color: black; border-radius: 7%; background-color:orange; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:15px;">
			</td>
		</tr>
		<tr align=center >
			<td>
			
				<input type="submit" value="Sign In"  style="color: black; border-radius: 7%;background-color: orange; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px; margin: 20px;">
		
				<input type="button" value="Cancle" onclick="fun2();"  style="color: black; border-radius: 7%;background-color:orange; height: 30px;width: 150px; border: solid 1px #c2c4c6; font-size:16px; padding-left:10px;">
				<br>
				<p>© 2019 Amazon Web Services, Inc. or its affiliates.<br>
All rights reserved.</p>
			</td>
		</tr>
	</table>
</form>
<br>
<br>
<br>
</body>
</html>