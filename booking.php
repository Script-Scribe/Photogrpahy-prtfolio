<?php
	$db=mysqli_connect('localhost', root, '', 'reservation')or die("connection failed" . mysqli_error());
	if(isset($_POST['SUBMIT']))
	{
		$name= mysqli_real_escape_string($db, $_POST['name']);
		$email= mysqli_real_escape_string($db, $_POST['email']);
		$date= mysqli_real_escape_string($db, $_POST['date']);
		$time= mysqli_real_escape_string($db, $_POST['time']);
		$select= mysqli_real_escape_string($db, $_POST['select']);
		$query= mysqli_query($db, "INSERT INTO users(name, email, date, time, select VALUES('$name, $email, $date, $time, $select')")
		if($query)
		{
			$_SESSION[''success]= "Your reservation has been submitted";
			$_SESSION['id'] = $db->inser_id;
			header('location: booking.html');
			exit();
		}
		else
		{
			$_SESSION['error']= "Sorry, check your inputs for errors";
		}
	}
?>