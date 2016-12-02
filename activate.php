<?php
require('core/init.php');
?>
<html>
<head>
	<title>Activate yout account</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
		  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
			integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
			crossorigin="anonymous"></script>

</head>
<body>
	<div id="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
		<h1>Acivate your account</h1>
		<?php
			if(isset($_GET['success'])===true && empty($_GET['success'])===true){
			?>
			<h3>Congratulations your account has been activated!</h3>	
			<?php
			}else if (isset($_GET['email'],$_GET['hash'])===true) {
				$email=trim($_GET['email']);
				$hash=trim($_GET['hash']);
				if(!$users->email_exists($email)){
					$errors[]='sorry we could not find that email address';

				}else if(!$users->activate($email,$hash)) {
					$errors[]='sorry we could not activate the account ';
				}
				if(!empty($errors)){
					echo '<p>'.implode('</p><p>', $errors) . '</p>';
				}else {
					header('Location: activate.php?success');
                	exit();
				}

			}else {
				header('Location: index.html');
            	exit();
			}

		?>

	</div>


</body>
</html>