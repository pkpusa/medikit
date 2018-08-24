
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->
</head>
<body>

<nav style="background-color:black;">
  <div class="container-fluid">
	<ul><li>
    <div class="navbar-header">
      <a style ="color :red; font-size:50px;" href="index.php?value=0">MediKit</a></br>
	  <a style ="color :aqua; font-size:20px;font-variant: small-caps;" href="#">An Online Medical Expert System</a>
    </div>
	</li>
	<li>         <div style="float:right; font-size:20px;">
			<p style ="color:white; font-size:25px;">
            <?php
            
			 if(isset($_SESSION['userid']))	
			 {
			 echo "Welcome,   ".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
        ?></p>
				<a href="userlogin.php?value=0" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="usersignup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div></li>
    </ul>
</div>
</nav>
  


</body>
</html>
