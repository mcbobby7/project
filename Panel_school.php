<?php
require './components/header.php';
require './components/nav.php';
?>

<script type="text/javascript" src="project.js"></script>

<div class='message' id="single">

	<img src="./images/7.jpg" style="width: 600px;">
	<h2 style="color: red;"><span style="color: green;">
		WELCOME</span> TO SCHOOL PANEL PAGE
	</h2>
	<h3 style="color: blue;">
		please fill the form below
	</h3>
	<form action="processed.php" method="POST">
		<fieldset>
			<h3>STUDENT SECTION</h3>
					<table style="text-align: right;">
						<tr>
							<td>
								Student Name :
							</td>
							<td>
								<input type="text" name="stu_name" placeholder="Sur Nmane / First Name / Other Name">
							</td>
						</tr>
						<tr>
							<td>
								Reg Number :
							</td>
							<td>
								<input type="text" name="reg_number" placeholder="Student Registration Number">
							</td>
						</tr>
						<tr>
							<td>
								Department :
							</td>
							<td>
								<input type="text" name="dept" placeholder="Students Department">
							</td>
						</tr>
						<tr>
							<td>
								Faculty :
							</td>
							<td>
								<input type="text" name="faculty" placeholder="Students Faculty">
							</td>
						</tr>
						<tr>
							<td>
								Level :
							</td>
							<td>
								<input type="text" name="level" placeholder="students Level">
							</td>
						</tr>
						<tr>
							<td>
								Course Title :
							</td>
							<td>
								<input type="text" name="course" placeholder="Course Title / Course Code">
							</td>
						</tr>
						<tr>
							<td>
								Date :
							</td>
							<td>
								<input type="text" name="date" placeholder="Date">
							</td>
						</tr>
						<tr>
							<td>
								Comment :
							</td>
							<td>
								<input type="text" name="comment" style="height: 50px;" placeholder="Comment">
							</td>
						</tr>
						<tr>
							<td>
								<label for="invigilator_name"><b>Invigilators Name   :</b></label>
							</td>
							<td>
								<input type="text" required="required" name="invigilator_name" placeholder="Sur Nmane / First Name / Other Name">
							</td>
						</tr>
						<tr>
							<td>
								<label for="invigilator_id"><b>Invigilators Id   :</b></label>
							</td>
							<td>
								<input type="text" required="required" name="invigilator_id" placeholder="Invigilators ID Number">
							</td>
						</tr>
						<tr>
							<td>
								<label for="penalty"><b> Penalty   :</b></label>
							</td>
							<td>
								<input type="text" required="required" name="penalty" placeholder="Penalty">
							</td>
						</tr>
						<tr>
							<td>
								<label for="duration"><b>Duration  :</b></label>
							</td>
							<td>
								<input type="text" required="required" name="duration" placeholder="Duration">
							</td>
						</tr>
						<tr>
							<td></td>	
							<td>
								<input type="submit" name="submit" style="width: 90px;">
							</td>
						</tr>
					</table>
		</fieldset>	
	</form>	
</div>

<div class="sidebar" style="overflow-y: scroll; height: 800px; font-size: 12px;">
	<h2 style="color: blue'" >SCHOOL PANEL LIST</h2>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM panel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


    ?>
    <ul>
    	<li>

		    <table style="text-align: left; color: red; padding: 10px; " >
		    	<tr>
		    		<th style="text-align: right; color: green;">
		    			NAME :  
		    		</th>
		    		<td>
		    			<?php echo $row['stu_name'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			REG NUM :  
		    		</th>
		    		<td>
		    			<?php echo $row['reg_num'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			DEPT :  
		    		</th>
		    		<td>
		    			<?php echo $row['dept'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			LEVEL:  
		    		</th>
		    		<td>
		    			<?php echo $row['level'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			FACULTY:  
		    		</th>
		    		<td>
		    			<?php echo $row['faculty'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			COURSE :  
		    		</th>
		    		<td>
		    			<?php echo $row['course'] ?>;
		    		</td>
		    	</tr><tr>
		    		<th style="text-align: right;  color: green;">
		    			COMMENT:   
		    		</th>
		    		<td>
		    			<?php echo $row['comment'] ?>;
		    		</td>
		    	</tr>
		    </table>
		    <hr>
		</li>
   </ul>
        	
        	<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>

	
	
</div>


<aside class="aside">
		<div class="box">
			<h2 style="background-color: #4CAF50">How To Fill Form</h2>
			    <h4>
				  <ul style="text-align: left;">
				  	<li>Hover on Faculty on the navigation above</li><hr>			  	
				  	<li>select your correct faculty</li><hr>			  	
				  	<li>fill and submit form</li>			  	
				  </ul>
			    </h4>	  	
		</div>	
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Faculty</h2>
			    <h6>
				  <ul style="text-align: left;">
				  	<li><a href="Smat.php">SMAT</a></li><hr>			  	
				  	<li><a href="Seet.php">SEET</a></li><hr>			  	
				  	<li><a href="Saat.php">SAAT</a></li><hr>			  	
				  	<li><a href="Soht.php">SOHT</a></li><hr>			  	
				  	<li><a href="Sobs.php">SOBS</a></li><hr>
				  	<li><a href="Sops.php">SOPS</a></li><hr>			  	
				  	<li><a href="Soes.php">SOES</a></li><hr>
				  </ul>
			    </h6>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Our Mission</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  	To operate practical and training geared towards transforming the nation's  technology and economy from consumer-oriented with a sound technology base.
			    </h4>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Our Vission</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  To re-engineer the department to be a truely world class through nurturing uniquely promising students and exceptional staffs in science, technology and enterprice to the benefit of our globalized world. 
			    </h4>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Our Value</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  Our shared values guide our students activities, which is a school founded on intellectual property. we foster creative environment in order to develop students and deliver them to the lagbour market through effecttive channels. 
			    </h4>	  	
		</div>				
	</aside>
<section id="section">
	<img class="images" src="./images/6.jpg">				
	<img class="images" src="./images/8.jpg">				
	<img class="images" src="./images/9.jpg">				
	<img class="images" src="./images/10.jpg">				
</section>

<?php  
	require './components/footer.php';

?>