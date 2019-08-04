<?php include('server.php')?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
<head>
<body>
   <div class ="container">
   <div class ="header">
      <h2>Log In</h2>
   
  
   </div>
   <form action ="login.php" method ="post">
        <div>
		<label for ="FName" >FName:</label>
		<input type ="text" name ="FName" required>
		</div>
		<br/></br>
		<div>
		<label for ="LName" >LName:</label>
		<input type ="text" name ="LName" required>
		</div>
		<br/></br>
		
		<div>
		<label for ="Password1" >Password:</label>
		<input type ="text" name ="Password1" required>
		</div>
		<br/></br>
	
		<div>
		<label for ="Contacts" >Contacts:</label>
		<input type ="text" name ="Contacts" required>
		</div>
		<br/></br>
		<button type ="submit" name ="login_user"> Log in</button>
		<p> Not a user: <a href ="registration.php"><b>Register here </b> </a></p>
   </form>

</body>
</html>