<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
	<link rel="stylesheet" type="text/css" href="style/aftalogin.css">
	<link rel="stylesheet" href="">
	<link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="user-wrapper">
		<div class="topnav">
			<img src="images/playerreg.jpg">
		    <h2>User account</h2>
              <!--navbutton-->
		    <li class="nav-button" id="button">
	          <a href="#button" class="btn e1
	          "><i class="far fa-user"></i>Welcome<i class="fas fa-caret-down" ></i></a>
	          <div class="smenu-i">
	            <a href="#profile">my profile</a>
	            <a href="#Edit">edit</a>
	            <a href="#TeamPlayers">team players</a>
	            <a href="#Rules">rules</a>
	            <a href="#Fixtures">fixtures</a>
	            <a href="#Logout">logout</a>
	          </div>
	        </li>

		</div>
		     <!--profile pic-->
		    <div class="profile-pic" id="">
		    	<img src="images/aaa.jpg">
		    	<p>eugene were</p>		    	
		    </div>			
	</div>

	<!--maincontents-->
	<div class="middle">
      <div class="menu">

        <li class="item" id='profile'>
	          <a href="#profile" class="btn "><i class="far fa-user"></i> My Profile <i class="fas fa-caret-down" ></i></a>
	               <!--dropdwn-->
			         <div class="smenu">
			         	<!--profile-->
			         	<div class="center-image">
							<div class="profile-container"><img src="images/aaa.jpg"></div>
							<p>Eugene Were</p>
						</div>
						<!--flexed content-->
			         	<div class="flex-content">
                           <!--section right-->
                            <div class="section-left f1">
	                            <span>
									FirstName:<br> 
								    <input type="text" name="firstname" value="Eugene"  required readonly>
							    </span><br>

							    <span>
									LastName:<br>
								    <input type="text" name="lastname" value="Were" readonly>
							    </span><br>

							    <span>				
									Email Address:<br>
									<input type="text" name="email" value="eugenewere@chimpmail.com" required readonly>
							    </span><br>

							    <span>
									Phone Number:<br>
								    <input type="Number" name="Phone Number" value="254706833784"  readonly>
							    </span><br>

							    <span>
									Your Team:<br>
								    <input list="team" name="City"placeholder="" readonly value="Boka">
								    <datalist id="team">
											  <option value="Castilla" >
											  <option value="HCF">
											  <option value="Boka">
											  <option value="Straight">
											  <option value="Mining">
											  <option value="Aberdeen"> 			  <option value="JKUMSA">
										</datalist>
								</span><br>											
							</div>

							 <!--section-right-->
							<div class="section-right f1">
								<span>
									Your Neighbourhood:<br>
								    <input list="city" name="City"placeholder="" readonly value="Juja">
								    <datalist id="city">
											  <option value="Juja" >
											  <option value="Ruiru">
											  <option value="Githurai">
											  <option value="Thika">
											  <option value="Bypass">
											  	 <option value="Others">
										</datalist>
								</span><br>

								<span>
									Your Country:<br>
									<input list="country" name="country" readonly value="Kenya">
										<datalist id="country" >
											  <option value="kenya" >
											  <option value="uganda">
											  <option value="tanzania">
											  <option value="ethopia">
											  <option value="rwanda">
											   <option value="Others">
										</datalist>
								</span><br>	

								<span>
									Date Of Birth:<br>
								    <input type="date" name="DateOfBirth"placeholder="DD/MM/YYYY" readonly value="09/6/1994">
								</span><br>		

								<span>
									Id No:<br>
								    <input type="Number" name="idno"placeholder="xxxxxxx" readonly value="34560767">
								</span><br>	

								<span>
									Date Of Regestration:<br>
								    <input type="date" name="DateOfBirth"placeholder="09/03/2019" readonly >
								</span><br>	
							</div>			         		
			         	</div>	         	
			         </div>            
        </li>




        <li class="item" id="Edit">
          <a href="#Edit" class="btn"><i class="far fa-envelope"></i>Edit Profile <i class="fas fa-caret-down" ></i></a>
	          <div class="smenu">
	          	<div class="center-image">
					<div class="profile-container"><img src="images/aaa.jpg" id="pic" ></div>
					<input type="file" name="uploadpicture" id="newpic">				
					<p>Eugene Were</p>
				</div>

				 <div class="flex-content">
			        	   <!--section right-->
                        <div class="section-left f1">
                            <span>
								FirstName:<br> 
							    <input type="text" name="firstname" value="Eugene"  required >
						    </span><br>

						    <span>
								LastName:<br>
							    <input type="text" name="lastname" value="Were">
						    </span><br>

						    <span>				
								Email Address:<br>
								<input type="text" name="email" value="eugenewere@chimpmail.com" required>
						    </span><br>

						    <span>
								Phone Number:<br>
							    <input type="Number" name="Phone Number" value="+254706833784" >
						    </span><br>
						     <span>
								Your Team:<br>
							    <input list="team" name="City"placeholder="">
							    <datalist id="team">
										  <option value="Castilla" >
										  <option value="HCF">
										  <option value="Boka">
										  <option value="Straight">
										  <option value="Mining">
										  <option value="Aberdeen"> 			  <option value="JKUMSA">
									</datalist>
							</span><br>											
						</div>

						 <!--section-left-->
						<div class="section-right f1">

							<span>
								Your Neighbourhood:<br>
							    <input list="city" name="City"placeholder="">
							    <datalist id="city">
										  <option value="Juja" >
										  <option value="Ruiru">
										  <option value="Githurai">
										  <option value="Thika">
										  <option value="Bypass">
										  <option value="Others">
									</datalist>
							</span><br>

							<span>
								Your Country:<br>
								<input list="country" name="country">
									<datalist id="country">
										  <option value="kenya" >
										  <option value="uganda">
										  <option value="tanzania">
										  <option value="ethopia">
										  <option value="rwanda">
										   <option value="Others">
									</datalist>
							</span><br>	

							<span>
								Date Of Birth:<br>
							    <input type="date" name="DateOfBirth"placeholder="DD/MM/YYYY">
							</span><br>		

							<span>
								Id No:<br>
							    <input type="Number" name="idno"placeholder="xxxxxxx">
							</span><br>	

							<span>
								Date Of Regestration:<br>
							    <input type="date" name="DateOfBirth"placeholder="09/03/2019" value=>
							</span><br>								
						</div>		
			        </div>
                        	         


			</div>
        </li>





        <li class="item" id="TeamPlayers">
          <a href="#TeamPlayers" class="btn"><i class="fas fa-users"></i>Team Players <i class="fas fa-caret-down" ></i></a>
          <div class="smenu">
            <div class="table-wrapper">
              <table>
                 <caption>Team Players</caption>
                  <tr>
                    <th>Photo</th>
                    <th>Players Name</th>
                    <th>Status</th>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50" margin="2"></td>
                    <td>Brian Kibet</td>
                    <td> <span>approved</span></td>
                  </tr>
                  <tr>
                    <td><img src="images/aaa.jpg" width="50" height="50"></td>
                    <td>Eugene were</td>
                    <td> <span>Pending</span></td>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50"></td>
                    <td>roy katiwa</td>
                    <td> <span>Pending</span></td>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50"></td>
                    <td>david mbugua</td>
                    <td> <span>Pending</span></td>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50"></td>
                    <td>chol Ajuoi</td>
                    <td> <span>Pending</span></td>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50"></td>
                    <td>mark wambua</td>
                    <td> <span>Pending</span></td>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50"></td>
                    <td>brain murithi</td>
                    <td> <span>Pending</span></td>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50"></td>
                    <td>geofrey mangale</td>
                    <td> <span>Pending</span></td>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50"></td>
                    <td>shaun omari</td>
                    <td> <span>Pending</span></td>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50"></td>
                    <td>sendey lenaola</td>
                    <td> <span>Pending</span></td>
                  </tr>

                  <tr>
                    <td><img src="" width="50" height="50"></td>
                    <td>kamuel sabula</td>
                    <td> <span>Pending</span></td>
                  </tr>











              </table>
              
            </div>
            
          </div>
        </li>

        <li class="item" id="leaguetable">
          <a href="#leaguetable" class="btn"><i class="fas fa-users"></i>League Table <i class="fas fa-caret-down" ></i></a>
          <div class="smenu">
          	<div class=" table-wrapper">
          		 
          		<table id="tb1">
          			<caption>League Table</caption>
          		   <tr>
          		   	  <th>team</th>
          		   	  <th> match played</th>
          		   	  <th> won</th>
          		   	  <th>draw</th>
          		   	  <th>lost</th>
          		   	  <th>goal <br> diffrence</th>
          		   	  <th>points</th>
          		   </tr>   

          		   <tr>
          		   	  <td>Castilla</td>
          		   	  <td>5</td>
          		   	  <td>4</td>
          		   	  <td>1</td>
          		   	  <td>0</td>
          		   	  <td>12</td>
          		   	  <td>13</td>
          		   </tr>      			

          		   <tr>
          		   	  <td>hcf</td>
          		   	  <td>5</td>
          		   	  <td>2</td>
          		   	  <td>2</td>
          		   	  <td>1</td>
          		   	  <td>1</td>
          		   	  <td>8</td>
          		   </tr>      	

          		   <tr>
          		   	  <td>Boka</td>
          		   	  <td>4</td>
          		   	  <td>2</td>
          		   	  <td>1</td>
          		   	  <td>1</td>
          		   	  <td>1</td>
          		   	  <td>7</td>
          		   </tr>      	

          		   <tr>
          		   	  <td>straight</td>
          		   	  <td>5</td>
          		   	  <td>2</td>
          		   	  <td>0</td>
          		   	  <td>3</td>
          		   	  <td>-8</td>
          		   	  <td>6</td>
          		   </tr>    

          		   <tr>
          		   	  <td>clasic fc</td>
          		   	  <td>3</td>
          		   	  <td>1</td>
          		   	  <td>1</td>
          		   	  <td>0</td>
          		   	  <td>1</td>
          		   	  <td>4</td>
          		   </tr>  

          		   <tr>
          		   	  <td>mining</td>
          		   	  <td>4</td>
          		   	  <td>1</td>
          		   	  <td>0</td>
          		   	  <td>3</td>
          		   	  <td>-2</td>
          		   	  <td>3</td>
          		   </tr>      

          		   <tr>
          		   	  <td>aberdeen</td>
          		   	  <td>4</td>
          		   	  <td>1</td>
          		   	  <td>0</td>
          		   	  <td>3</td>
          		   	  <td>-2</td>
          		   	  <td>3</td>
          		   </tr> 

          		   <tr>
          		   	  <td>jkumsa</td>
          		   	  <td>2</td>
          		   	  <td>0</td>
          		   	  <td>1</td>
          		   	  <td>1</td>
          		   	  <td>-2</td>
          		   	  <td>1</td>
          		   </tr>      	     		    	  			
          		</table>
          		
          	</div>
            
          </div>
        </li>


       <!-- start of rules and regulations-->
        <li class="item" id="Rules">
          <a href="#Rules" class="btn"><i class="fas fa-file-alt"></i>Rules <i class="fas fa-caret-down" ></i></a>
          <div class="smenu">
          	<h2 id="rules-header">JKUAT league matches rules & regulations (2019)</h2>
            <ol>
            	<li>Participating teams to report one hour before kickoff</li>
            	<li>Home team to
            		<ul>
            			<li>Provide playing ground</li>
            			<li>Playing ground to be properly marked with lime </li>
            			<li>Goal nets to be put on the goal posts </li>
            			<li>Bench /plastic chairs home team and away team accommodating reserves and technical bench 12 pax per team </li>
            			<li>Home team 3 playable match balls/ away team 2 playable before kickoff.</li>
            		</ul>
            	</li>
            	<li>Any protest to be in written signed by Centre referee, captain of both teams before kick off </li>
            	<li>In case a team fails to turn up for the match for duration of 45 mins. After checking the match official present calls off the match a match report forwarded to the Secretary JKUAT Sports office within 48hrs. </li>
            	<li>Any player card with alteration should not be allowed to participate and the matter should be reported to the Sports Office</li>
            	<li>Match duration 45 mins in each half. </li>
            	<li>Participating teams to handle injuries that may occur during their league matches</li>
            	<li>Match postponement to be done in writing 3 days (72hrs) before kickoff to JKUAT Sports office</li>
            	<li>Kindly check MasterCard overleaf for more rules & regulations.</li>

            </ol>
          </div>
        </li>
        <!-- end of rules and regulations-->

         <!-- start of fixtures-->
        <li class="item" id="Fixtures">
          <a href="#Fixtures" class="btn"><i class="fas fa-wrench"></i>Fixtures <i class="fas fa-caret-down" ></i></a>
          <div class="smenu">
           <div class="table-wrapper">
            	<table>
            		<caption>JKUAT FIXTURES TABLE</caption>
            		<tr>
            			<th>Date</th>
            			<th>Day</th>
            			<th>Home Team</th>
            			<th>Away Team</th>
            			<th>Venue</th>
            			<th>Time</th>
            			<th>results</th>
            		</tr>

            		<tr>
            			<td>1/04/2019</td>
            			<td>SATURDAY</td>
            			<td>MINING  </td>
            			<td> BOKA</td>
            			<td>Jkuat Pitch</td>
            			<td>2:00pm</td>
            			<td>1-0</td>
            		</tr>

            		<tr>
            			<td>1/04/2019</td>
            			<td>SATURDAY</td>
            			<td>HFC   </td>
            			<td> ABERDEEN</td>
            			<td>Jkuat Pitch</td>
            			<td>3:50pm</td>
            			<td>3-2</td>
            		</tr>

            		<tr>
            			<td>1/04/2019</td>
            			<td>SATURDAY</td>
            			<td>CASTILLA  </td>
            			<td> STRAIGHT FC</td>
            			<td>Jkuat Primary</td>
            			<td>5:50pm</td>
            			<td>2-2</td>
            		</tr>

            		<tr>
            			<td>1/04/2019</td>
            			<td>SATURDAY</td>
            			<td>CASTILLA  </td>
            			<td> STRAIGHT FC</td>
            			<td>AICAD PITCH</td>
            			<td>7:50pm</td>
            			<td>1-0</td>
            		</tr>

            		<tr>
            			<td >3/05/2019</td>
            			<td>Monday</td>
            			<td>CASTILLA </td>
            			<td>ABERDEEN</td>
            			<td>MAIN PITCH</td>
            			<td>8:00a.m</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >3/05/2019</td>
            			<td>Monday</td>
            			<td>GALACTICOS</td>
            			<td>BOKA</td>
            			<td>AICAD PITCH</td>
            			<td>10:00a.m</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >3/05/2019</td>
            			<td>Monday</td>
            			<td>STRAIGHT FC</td>
            			<td>MINING</td>
            			<td>Jkuat Primary PITCH</td>
            			<td>12:00p.m</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >3/05/2019</td>
            			<td>Monday</td>
            			<td>HIGHLANDERS CF </td>
            			<td>CLASSIC FC </td>
            			<td>AICAD PITCH</td>
            			<td>12:00p.m</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >9/05/2019</td>
            			<td>SATURDAY</td>
            			<td>ABERDEEN FC  </td>
            			<td>JKUMSA</td>
            			<td>MAIN PITCH</td>
            			<td>8:00a.m</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >9/05/2019</td>
            			<td>SATURDAY</td>
            			<td>ABERDEEN FC  </td>
            			<td>JKUMSA</td>
            			<td>MAIN PITCH</td>
            			<td>10:00A.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >9/05/2019</td>
            			<td>SATURDAY</td>
            			<td>CASTILLA </td>
            			<td>JKUMSA</td>
            			<td>MAIN PITCH</td>
            			<td>1:00p.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >9/05/2019</td>
            			<td>SATURDAY</td>
            			<td>STRAIGHT </td>
            			<td>BOKA</td>
            			<td>AICAD PITCH</td>
            			<td>2:30p.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >9/05/2019</td>
            			<td>SATURDAY</td>
            			<td>STRAIGHT </td>
            			<td>BOKA</td>
            			<td>AICAD PITCH</td>
            			<td>2:30p.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >9/05/2019</td>
            			<td>SATURDAY</td>
            			<td>HFC </td>
            			<td>MINING</td>
            			<td>AICAD PITCH</td>
            			<td>4:30p.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >16/05/2019</td>
            			<td>Friday</td>
            			<td>CLASSIC </td>
            			<td>ABERDEEN</td>
            			<td>AICAD PITCH</td>
            			<td>8:00A.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >16/05/2019</td>
            			<td>Friday</td>
            			<td>STRAIGHT </td>
            			<td>JKUMSA</td>
            			<td>AICAD PITCH</td>
            			<td>10:00A.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >16/05/2019</td>
            			<td>Friday</td>
            			<td>HFC FC  </td>
            			<td>BOKA</td>
            			<td>MAIN PITCH</td>
            			<td>10:00A.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >16/05/2019</td>
            			<td>Friday</td>
            			<td>MINING </td>
            			<td>CASTILLA</td>
            			<td>AICAD PITCH</td>
            			<td>10:00A.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >17/05/2019</td>
            			<td>SATURDAY</td>
            			<td>ABERDEEN </td>
            			<td>MINING FC</td>
            			<td>MAIN PITCH</td>
            			<td>8:00A.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >17/05/2019</td>
            			<td>SATURDAY</td>
            			<td>STRAIGHT FC  </td>
            			<td>HIGHLANDERS CF</td>
            			<td>AICAD PITCH</td>
            			<td>10:00A.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >17/05/2019</td>
            			<td>SATURDAY</td>
            			<td>CLASSIC</td>
            			<td>BOKA</td>
            			<td>AICAD PITCH</td>
            			<td>10:00A.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >17/05/2019</td>
            			<td>SATURDAY</td>
            			<td>CLASSIC</td>
            			<td>BOKA</td>
            			<td>AICAD PITCH</td>
            			<td>10:00A.M</td>
            			<td>--</td>
            		</tr>

            		<tr>
            			<td >17/05/2019</td>
            			<td>SATURDAY</td>
            			<td>JKUMSA </td>
            			<td>CASTILLA</td>
            			<td>MAIN PITCH</td>
            			<td>12:00P.M</td>
            			<td>--</td>
            		</tr>
            	</table>
            	
            </div>
          </div>
        </li>
        <!-- end of fixtures-->



        <li class="item">
          <a class="btn" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </li>
      </div>
    </div>
    
<script type="text/javascript" src="javascript/script.js"></script>
<script type="text/javascript">
  var pic= document.getElementById("pic");
      var newpic=document.getElementById("newpic").value;

      pic.src=newpic.src;
      console.log(pic);
</script>
</body>
</html>