<html>

<head><title>Home</title></head>

<body>
	<table border="1" align="center" width="100%">
    	<tr>
        	<td>
            	<!-- Header section -->
            	<div>
                    <table align="center" width="100%">
                        <td width="20%">
                            <a href="dashboard.php"><img src="images/pageicon.png"/></a>
                        </td>
                       <td width="40%">&nbsp;</td>
                        <td width="40%">
                            <table align="right">
                                <td><strong>Logged in as </strong></td>
                                <td><a href="viewprofile.php">Bob<img src="images/user.png"></a></td>
                                <td><hr width="1" size="15"></td>
                                <td><a href="../index.html">Logout<img src="images/logout.png"></a></td>
                            </table> 
                        </td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Body section -->
                 <div>
                    <table width="100%">
                        <!-- User Menu Section -->
                        <td width="20%">
                            <fieldset>
                                <legend>
                            <strong>Personal Information</strong></legend>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="viewprofile.php">View Profile</a></li>
                                <li><a href="editprofile.php">Edit Profile</a></li>
                                <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                                <li><a href="managechamber.html">Manage Chambers</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Manage Prescriptions</strong></legend>
                                <ul>
                                <li><a href="newpescriptions.html">Create new Prescriptions</a></li>
                                <li><a href="pescriptions.php">Previous Prescriptions</a></li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>
                            <strong>Appointments Information</strong></legend>
                           
                            <ul>
                                <li><a href="appointmentstatus.php">Appointment Status</a></li>
                                <li><a href="appointmenthistory.php">Appointment History</a></li>
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Reports</strong></legend>
                           
                            <ul>
                                <li><a href="patienthistory.php">Patient History</a></li>
                                <li><a href="medianalysis.php">Medicine Analysis</a></li>
                                <li><a href="disanalysis.php">Disease Analysis</a></li>
                            </ul>
                        </fieldset>
						
						
						<fieldset>
                            <legend>
                            <strong>E-consultation</strong></legend>
                           
                            <ul>
								<li><a href="eConsultation/message.php">New Message</a></li>
                                <li><a href="eConsultation/inbox.php">Inbox</a></li>
                                <li><a href="eConsultation/sentitems.php">Sent Items</a></li>
							
                            </ul>
                        </fieldset>


                        <fieldset>
                            <legend>
                            <strong>Account</strong></legend>
                           
                            <ul>
                                <li><a href="changepassword.html">Change Password</a></li>
                                <li><a href="../index.html">Logout</a></li>
                            </ul>
                        </fieldset>
                        </td>
                        <!--Appoinment History-->
                        <td width="70%" valign="top">
                            
							<fieldset>
                              <legend>Appoinment History</legend><br>
                              <fieldset>
                                <legend> Month: January</legend>

                                <table>
                                    <tr>
                                        <td>
                                <label>Search By</label>
                                <select>
                                    <option>Name</option>
                                    <option>Appoinment Date</option>
                                    <option>Status</option>
                                </select>
                            </td>
                            </br>
                            <td>
                            <label>Search</label>
                            <input type="text" name="search"/></td>
                        </tr>
                    </table>
                              <table border="1" align="center">
                                  <tr>
                                      <td  width="25%"><strong>Appoinment Date</strong></td>
                                      <td  width="25%"><strong>Appointment Time</strong></td>
                                      <td  width="25%"><strong>Patient Name</strong></td>
                                      <td  width="25%"><strong>Status</strong></td>
                                     
                                  </tr>

                                  <tr>
                                      
                                      <td>25 January</td>
                                      <td>8 am</td>
                                      <td>Bob Marley</td>
                                      <td>Online Service</td>
                                     
                                  </tr>

                                   <tr>

                                      <td>11 January</td>
                                      <td>9:05 am</td>
                                      <td>David Batista</td>
                                      <td>Online Service</td>
                                     
                                  </tr>
                              </table>
                              </fieldset>

                              <fieldset>
                                <legend> Month:February</legend>
                                    <table>
                                    <tr>
                                        <td>
                                <label>Search By</label>
                                <select>
                                    <option>Name</option>
                                    <option>Appoinment Date</option>
                                    <option>Status</option>
                                </select>
                            </td>
                            </br>
                            <td>
                            <label>Search</label>
                            <input type="text" name="search"/></td>
                        </tr>
                    </table>
                              <table border="1" align="center">
                                  <tr>
                                      <td  width="25%"><strong>Appoinment Date</strong></td>
                                      <td  width="25%"><strong>Appointment Time</strong></td>
                                      <td  width="25%"><strong>Patient Name</strong></td>
                                      <td  width="25%"><strong>Status</strong></td>
                                     
                                  </tr>

                                  <tr>
                                      
                                      <td>25 February</td>
                                      <td>8 am</td>
                                      <td>Bob Marley</td>
                                      <td>Direct Communication</td>
                                     
                                  </tr>

                                   <tr>

                                      <td>11 February</td>
                                      <td>9:05 am</td>
                                      <td>David Batista</td>
                                      <td>Online Service</td>
                                     
                                  </tr> 
                              </table>
                          </fieldset>

                          <fieldset>
                                <legend> Month:March</legend>
                                    <table>
                                    <tr>
                                        <td>
                                <label>Search By</label>
                                <select>
                                    <option>Name</option>
                                    <option>Appoinment Date</option>
                                    <option>Status</option>
                                </select>
                            </td>
                            </br>
                            <td>
                            <label>Search</label>
                            <input type="text" name="search"/></td>
                        </tr>
                    </table>
                              <table border="1" align="center">
                                  <tr>
                                      <td  width="25%"><strong>Appoinment Date</strong></td>
                                      <td  width="25%"><strong>Appointment Time</strong></td>
                                      <td  width="25%"><strong>Patient Name</strong></td>
                                      <td  width="25%"><strong>Status</strong></td>
                                     
                                  </tr>

                                  <tr>
                                      
                                      <td>25 March</td>
                                      <td>8 am</td>
                                      <td>Bob Marley</td>
                                      <td>Direct Communication</td>
                                     
                                  </tr>

                                   <tr>

                                      <td>11 March</td>
                                      <td>9:05 am</td>
                                      <td>David Batista</td>
                                      <td>Online Service</td>
                                     
                                  </tr> 
                              </table>
                          </fieldset>


                            </fieldset>
                        </div>
                            <a href="appointmentstatus.php">Go to Appoinment Status</a>
                            
						</td>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<!-- Footer section -->
                <div>
                    <table align="center">
                        <td>&copy;2017 MediPortal. All rights reserved.</td>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>