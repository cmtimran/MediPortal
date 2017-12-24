<!DOCTYPE>
<html>
<head>
	<title>Doctor Registration</title>
</head>
<body>
	<table>
		<div>
			 <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="viewprofile.php">Bob<img src="images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                 <td><a href="../Registration/DocRegAddEducation.html">Profile</a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.html">Logout<img src="images/logout.png"></a></td>

                            </table> 
			</div>
			<div>
				<h1 align="center">Doctor Registration Form</h1>
			</div>
			<div>
				<table width="60%" align="center">
					<tr>
						<td>
							<form action="">
							<fieldset>
								<table align="center">
									<tr>
										<td>
											<label>Name</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="name" value="Dr. XYZ" />
										</td>
									</tr>
									<tr>
										<td>
											<label>User Name</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="UserName" value="xyz"/>
										</td>
									</tr>
									<tr>
										<td>
											<label>Password</label>
										</td>
										<td>:</td>
										<td>
											<input type="password" name="password" value="12345678" />
										</td>
									</tr>
									<tr>
										<td>
											<label>Confirm Password</label>
										</td>
										<td>:</td>
										<td>
											<input type="password" name="ConfirmPassword" value="12345678" />
										</td>
									</tr>
																		
									<tr>
										<td><label>Gender</label></td>
										<td>:</td>
										<td>
											<input name="Gender" type="radio" value="Male" checked="true" />Male
											<input name="Gender" type="radio" value="Female"/>Female
											<input name="Gender" type="radio" value="Other"/>Other
										</td>
									</tr>
									<tr>
										<td><label>Date Of Birth</label></td>
										<td>:</td>	
										<td>
											<input type="date" name="Dob" value="2013-01-08" />	
										</td>
										
									</tr>
									<tr>
										<td><label>Email</label></td>
										<td>:</td>
										<td><input type="text" name="email" value="xyz@example.com" /></td>
									</tr>
									<tr>
										<td><label>BMDC Registration Number</label></td>
										<td>:</td>
										<td><input type="text" name="reg_number" value="B556S555656S5" /></td>
									</tr>
									<tr>
										<td><label>Profile Picture</label></td>
										<td>:</td>
										<td><input type="file"/></td>
									</tr>
									<tr>
										<td colspan="3">
											<input type="checkbox" name="check"/>Agree with the <a href="../privacypolicy.html">Privacy Policy</a>
										<td>
									</tr>
									<tr>
										<script type="text/javascript">
											function next()
											{
												window.location.href = "docRegAddEducation.html";
											}
										</script>
										<td colspan="3" align="center">
											<input type="button" name="Submit" value="Next Step" align="center" onclick="next()">
											<input type="reset" name="reset" value="reset" align="center">
										</td>
									</tr>	
								</table>
							</fieldset>		
						</form>
						</td>
					</tr>
				</table>
			</div>
			<div>
				<table align="center">
					<tr align="center">
						<td>
						<a href="https://www.facebook.com/">
						<img src="../images/facebook.png">
						 </a>
					 </td>
						<td>
							<a href="https://www.twitter.com/">
								<img src="../images/twitter.png">
							</a>
						</td>
					</tr>
				</table>
				
				<table align="center">
					<tr>
						<td align="center" colspan="3">
						<a href="../About_Us.html">About Us   </a>
					</td>
					<td align="center" colspan="3">
						<a href="../Contact_Us.html">Contact Us   </a>
					</td>
					<td align="center" colspan="3">
						<a href="../privacyPolicy.html">Privacy Policy   </a>
					</td>
					<td align="center" colspan="3">
						<a href="../faq.html">FAQ</a>
					</td>
					</tr>
				</table>
			</div>
		</div>	
	</table>

	<div>
		<table align="center" width="100%" border="1">
			<tr>
				<td align="center" colspan="3">
				<b>&copy;2017 MediPortal. All rights reserved</b>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>