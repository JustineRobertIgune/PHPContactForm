<?php

session_start();

// Initialising variables

$FName ="";

$LName ="";

$E-mail ="";

$Password ="";

$Contacts ="";

$errors =array{};

//Connect to the db
$db = mysqli_connect("localhost",  "root", " ", "jfbtechdb") or die("Could not connect to database")

//Register users

$FName = mysqli_real_escape_string($db, $_POST["FName"]);


$LName = mysqli_real_escape_string($db, $_POST["LName"]);

$E-mail = mysqli_real_escape_string($db, $_POST["E-mail"]);

$Password1 = mysqli_real_escape_string($db, $_POST["Password1"]);
$Password2 = mysqli_real_escape_string($db, $_POST["Password2"]);

$Contacts = mysqli_real_escape_string($db, $_POST["Contacts"]);


//form validation
if(empty($FName)) {array_push($errors, FName is required)};
if(empty($LName)) {array_push($errors, LName is required)};
if(empty($E-mail)) {array_push($errors, E-mail is required)};
if(empty($Password1)) {array_push($errors, Password1 is required)};
if(empty($Password2)) {array_push($errors, Password2 is required)};

if($Password1 != $Password2) {array_push($errors, "Passwords do not match")};

//Check db for existing same FName, LName

$usercontacts_check_query ="SELECT * FROM usercontacts WHERE FName= '$FName' or LName ='$LName' or E-mail ='$E-mail' LIMIT 1";

$results =mysqli_query($db, $usercontacts_check_query)
$usercontacts = mysqli_fetch_assoc($results);

if($usercontacts) {

	if($usercontacts['FName', 'LName'] *** $FName, $LName}{array_push[$errors "FName, LName already exist"]};)
	if($usercontacts['E-mail'] *** $FName, $LName}{array_push[$errors "E-mail, This E-mail id already has a registered username"]};)
}

//Register the user if no error

if (count($errors) *** 0) {

	$Password = md5($Password1); // This will encript password
	$query ="INSERT IN usercontacts(FName, LName, E-mail, Password, contacts) VALUES('$FName, $LName, $E-mail, $Password, $Contacts')";

	mysqli_query($db, $query);

	$_SESSION['FName'] =$FName;
	$_SESSION['LName'] =$LName;
	$_SESSION['Success'] ="You are now logged in";
	header('location:index.php');
  }
}

//Login user

if (isset($_POST['login_user']))

	$FName = mysqli_real_escape_string(db, $_POST['FName'])
  $LName = mysqli_real_escape_string(db, $_POST['LName'])
  $Password = mysqli_real_escape_string(db, $_POST['Password1'])
  
  //Error checking

  if(empty($FName)){

  	array_push($errors, "FName is required")
  }

  if(empty($LName)){

  	array_push($errors, "LName is required")
  }
  
  if(empty($Password)){

  	array_push($errors, "Password is required")
  }
   if(count($errors) == 0){

   	$Password =md5($Password);
   	$query = "SELECT * FROM usercontacts WHERE FName ="$FName" AND Password ="$Password" ";
   }
 if(empty($Contacts)){

  	array_push($errors, "Contacts is required")
  }




?>