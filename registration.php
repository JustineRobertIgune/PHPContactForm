<?php include('server.php')?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
<head>
<body>
   <div class ="container">
   <div class ="header">
      <h2>Register</h2>
   
  
   </div>
   <form action ="registration.php" method ="post">

   	<?php include (errorfile.php)?>
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
		<label for ="E-mail"> E-mail:</label>
		<input type ="text" name ="E-mail" required>
		</div>
		<br/></br>
		<div>
		<label for ="Password1" >Password:</label>
		<input type ="text" name ="Password1" required>
		</div>
		<br/></br>
		<div>
		<label for ="Password2" >Confirm Password:</label>
		<input type ="text" name ="Password2" required>
		</div>
		<br/></br>
		<div>
		<label for ="Contacts" >Contacts:</label>
		<input type ="text" name ="Contacts" required>
		</div>
		<br/></br>
		<button type ="submit" name ="reg_user"> Submit</button>
		<p> Already a user: <a href ="login.php"><b>Log in </b> </a></p>
   </form>

</body>
</html>