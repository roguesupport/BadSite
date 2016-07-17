<?php

include("html.php");

?>


<html>
<head>
	<script type="text/javascript" src="/javascript.js"></script>
	<link rel="stylesheet" type="text/css" href="/main.css"></link>
</head>

<body>
	<div class="wrapper">
		<div class="container">
			<?php header_code(); ?>
			<div class="register-box">
				<h3>Reset Password</h3>
				<?php
					if(isset($_GET['req'])){ ?>
					<ol class="error">
					<?php
						$required = explode(";", $_GET['req']);
						?>
						The following are required:
						<?php
						$z="";
						foreach($required as $item){
						?><li><?php echo htmlentities($z.$item); ?></li><?php
						$z=", ";
						}
						echo "."
						?>
					</ol>
					<?php
					}
					if(isset($_GET['err'])){ ?>
					<?php
						$error = explode(";", $_GET['err']);
						foreach($error as $item){
						?><ol class="error"><?php echo htmlentities($item); ?></ol><?php
						}
						?>
					<?php
					}
				 ?>
				<form method="POST" action="forgot_password.php">
					<input type="text" name="email" placeholder="Email" />
					<input type="submit" name="submit" value="Reset" />
				</form>
			</div>	
		</div>
	</div>
</body>
</html>
