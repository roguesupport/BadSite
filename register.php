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
				<h3>Register</h3>
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
				<form method="POST" action="register_action.php<?php if(isset($_GET['redirect'])){echo '?redirect=' . $_GET['redirect'];} ?>">
					<input type="text" name="first_name" placeholder="First Name" />
					<input type="text" name="last_name" placeholder="Last Name" />
					<input type="text" name="email" placeholder="Email" />
					<input type="password" name="password" placeholder="Password" />
					<input type="submit" name="submit" value="Register" />
				</form>
			</div>	
		</div>
	</div>
</body>
</html>
