
<html>
<head>
    <title>Room Reserved</title>
    <link rel="stylesheet" href="style.css">
	
</head>
<body>

<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {    
    $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
    $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$daate = mysqli_real_escape_string($mysqli, $_POST['daate']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);  
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $dayss = mysqli_real_escape_string($mysqli, $_POST['dayss']);
    $contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
	$type = mysqli_real_escape_string($mysqli, $_POST['type']);
	$checked = mysqli_real_escape_string($mysqli, $_POST['checked']);
	$room = mysqli_real_escape_string($mysqli, $_POST['room']);
    $idcard = mysqli_real_escape_string($mysqli, $_POST['idcard']);
    $payment = mysqli_real_escape_string($mysqli, $_POST['payment']);
	
    // checking empty fields
    if(empty($fname) || empty($lname) || empty($daate) || empty($gender) || empty($dayss) || empty($email) || empty($address) || empty($type) || empty($contact) || empty($checked) || empty($room) || empty($idcard) || empty($payment)) {
        if(empty($fname)) {
            echo "<font color='red'> First Name field is empty.</font><br/>";
        }
		if(empty($lname)) {
            echo "<font color='red'>Last Name filed is empty.</font><br/>";
        }
		if(empty($gender)) {
            echo "<font color='red'>Gender is not Ticked.</font><br/>";
        }  
		if(empty($daate)) {
            echo "<font color='red'>Reserved date not entered.</font><br/>";
        }       
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        } 
		if(empty($address)) {
            echo "<font color='red'>Permanet address field is empty.</font><br/>";
        } 
        if(empty($contact)) {
            echo "<font color='red'>Pnone number empty.</font><br/>";
        }
        if(empty($dayss)) {
            echo "<font color='red'>Date of Check in not   entered.</font><br/>";
        }
		if(empty($type)) {
            echo "<font color='red'>Type of Room field is empty.</font><br/>";
        } 
		if(empty($idcard)) {
            echo "<font color='red'> Id not  submitted</font><br/>";
        }
		if(empty($payment)) {
            echo "<font color='red'> Paayment not seleced.</font><br/>";
        } 
        if(empty($checked)) {
            echo "<font color='red'> Check IN time nOt seleced.</font><br/>";
        } 
        if(empty($room)) {
            echo "<font color='red'> Room NO not seleced.</font><br/>";
        } 
		
		    
    } 
    else {             
        $result = mysqli_query($mysqli, "INSERT INTO room (fname,lname,gender,email,address,daate,dayss,type,checked,contact,room,idcard,payment)
                               VALUES('$fname','$lname','$gender','$email','$address','$daate','$dayss','$type','$checked','$contact','$room','$idcard','$payment')");
        if (!$result) die ("Insertion failed: " . mysqli_error($mysqli));
        echo"<font color='black' size='25px'> Congratulations ! Room Reservation successful.";
        echo"<br><br><a href='read.php'> View Result </a>";
    }
}
?>

</body>
</html>