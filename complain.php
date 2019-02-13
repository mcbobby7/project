<?php
require './components/header.php';

require './components/nav.php';
?>

<script type="text/javascript" src="project.js"></script>

<div class='message' id="single">
	<img src="./images/7.jpg" style="width: 600px;">
	<h2 style="color: red;"><span style="color: green;">
		WELCOME :</span> FUTO COMPLAINT MANAGEMENT SYSTEM
	</h2>
	<h3 style="color: blue;">
		please fill the form below
	</h3>
	<form action="complaint.php" method="POST">
		<fieldset>
			<h3>SUBMIT YOUR COMPLAINT</h3>
					<table style="text-align: right;">
						<tr>
							<td>
								Lecturers Name :
							</td>
							<td>
								<input type="text" name="lec_name" placeholder="Sur Nmane / First Name / Other Name">
							</td>
						</tr>
						<tr>
							<td>
								ID Number :
							</td>
							<td>
								<input type="text" name="lec_id" placeholder="Invigilators ID Number">
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
							<tr>
							<td>
								Compaint :
							</td>
							<td>
								<input type="text" name="complaint" style="height: 50px;" placeholder="Compaint">
							</td>
						</tr>
							<td>
								<input type="submit" name="submit" style="width: 90px;">
							</td>
						</tr>
					</table>
		</fieldset>
	</form>	
</div>


<div class="sidebar">
	<table border="1">
		<tr bgcolor="#333" style="color: white">
			<th height="100">DEANS</th>
			<th>SCHOOLS</th>
		</tr>
		<tr bgcolor="white">
			<td height="50">prof.B.O. Esonu</td>
			<td>School of Agriculture and Agricultural Technology(SAAT)</td>
		</tr>

		<tr  bgcolor="#333" style="color: white">
			<td height="50">prof.A.N. Oogbulie</td>
			<td>School of Biological Sciences(SOBS)</td>
		</tr>

		<tr height="50" bgcolor="white">
			<td>prof.A.N. Amadi</td>
			<td>School of Biological Sciences(SOBS)</td>
		</tr>

		<tr height="50"  bgcolor="#333" style="color: white">
			<td>Engr Prof.G.I. NwaDIKOM</td>
			<td>School of Engineering and Engineering Technology(SEET)</td>
		</tr>

		<tr height="50" bgcolor="white">
			<td>prof (Mrs) R.N. Nwabueze</td>
			<td>School of Environmental Sciences(SOES)</td>
		</tr>

		<tr height="50"  bgcolor="#333" style="color: white">
			<td>Prof.I.N.S Dozie</td>
			<td>School of Health Technology(SOHT)</td>
		</tr>

		<tr height="50" bgcolor="white">
			<td>prof.C.C. Ibe</td>
			<td>School of Management Technology(SMAT)</td>
		</tr>

		<tr height="50"  bgcolor="#333" style="color: white">
			<td>prof.C.B. Anosionwu</td>
			<td>School of Physical Sciences(SOPS)</td>
		</tr>

		<tr height="50" bgcolor="white">
			<td>prof.N.N. Oti</td>
			<td>Postgraduate School(PGS)</td>
		</tr>
	</table>
	
</div>


<aside class="aside">
		<div class="box">
			<h2 style="background-color: #3f664e">How To Fill Form</h2>
			    <h4>
				  <ul style="text-align: left;">
				  	<li>Hover on Faculty on the navigation above</li><hr>			  	
				  	<li>select your correct faculty</li><hr>			  	
				  	<li>fill and submit form</li>			  	
				  </ul>
			    </h4>	  	
		</div>	
		<div class="box" id="right">
			<h2 style="background-color: #3f664e" style="float: right">Faculty</h2>
			    <h6>
				  <ul style="text-align: left;">
				  	<li><a href="">SMAT</a></li><hr>			  	
				  	<li><a href="">SEET</a></li><hr>			  	
				  	<li><a href="">SAAT</a></li><hr>			  	
				  	<li><a href="">SOHT</a></li><hr>			  	
				  	<li><a href="">SOBS</a></li><hr>
				  	<li><a href="">SOPS</a></li><hr>			  	
				  	<li><a href="">SOES</a></li><hr>
				  </ul>
			    </h6>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #3f664e" style="float: right">Our Mission</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  	To operate practical and training geared towards transforming the nation's  technology and economy from consumer-oriented with a sound technology base.
			    </h4>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #3f664e" style="float: right">Our Vission</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  To re-engineer the department to be a truely world class through nurturing uniquely promising students and exceptional staffs in science, technology and enterprice to the benefit of our globalized world. 
			    </h4>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #3f664e" style="float: right">Our Value</h2>
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