<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";

	$conn= new mysqli($servername, 
						$username, 
						$password, 
						$dbname);
	if ($conn->connect_error) {

		die("connection went wrong: " . $conn->connect_error);
	}

		$stu_name = $_POST['stu_name'];
		$reg_number = $_POST['reg_number'];
		$dept = $_POST['dept'];
		$faculty = $_POST['faculty'];
		$level = $_POST['level'];
		$course = $_POST['course'];
		$date = $_POST['date'];
		$comment = $_POST['comment'];
		$penalty = $_POST['penalty'];
		$duration = $_POST['duration'];
		$invigilator_name = $_POST['invigilator_name'];
		$invigilator_id = $_POST['invigilator_id'];
		

	$sql = "INSERT INTO db (stu_name, reg_num, dept, faculty, level, course, my_date, comment, penalty, duration, invigilator_name, invigilator_id )
			VALUES ('$stu_name', '$reg_number', '$dept', '$faculty', '$level', '$course', '$date', '$comment', '$penalty', '$duration', '$invigilator_name', '$invigilator_id' )";

		
	if($conn->query($sql)===TRUE)
	{
		echo  "<script type='text/javascript'>alert('data inserted'); </script>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;

	}
	$conn->close();

?>