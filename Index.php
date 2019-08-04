<?php

session_start();
if(isset($_SESSION['FName'])){


	$_SESSION['MSG'] = "You must log in first to view this page";
	header("location: login.php")

}

if(isset($_GET)){

	session_destroy();
	unset($_SESSION['FName']);
	header('location: login.php');

}

?>

<!DOCTYPE html>
<html>
<head>
   <title> Home Page</title>
</head>
<body>

	<h1>This is the home page</h1>
	<?php
	if(isset($_SESSION['success'])); ?>

	<div>
		<h3>
			<?php
			echo $_SESSION['Success'];
			unset($_SESSION['Success']);

			?>
		</h3>>
	</div>

<?php endif ?>

//If the user logs in print information about him
<?php if(isset($_SESSION['FName'])); ?>
    <h3> Welcome <strong><?php echo $_SESSION ['FName']?></strong></h3>

    <button> href="Index.php?logout ="1" </button>
 <?php endif ?>
</body>
</html>