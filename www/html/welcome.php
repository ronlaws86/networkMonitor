<html>

	<head>
	<style>
	body {
	background: black;
	}
	h1, h2, h3, a, p {
	color: white;
	}
	</style>
	</head>
	<body>
	<h1>First Run Setup</h1>
	<h2>For Setup, Please Visit one of the following IP addresses in your browser<h2> 
	<h3><?php exec("sudo hostname -I", $output,  $return); print($output[0]);?></h3>

	<a href="index.php">Go to admin console</a>
    <a href="tinyfilemanager.php">Go to File Manager</a> - Default login is admin/admin

	<p>Out of the box, your pi will be broadcasting a wifi network <i>raspi-webgui</i> with the password <i>ChangeMe</i></p>
	<p style="color: red">IT IS RECCOMENDED YOU CHANGE THIS BEFORE USE</p>

	<h3>In the setup GUI, go to <a href="http://localhost/index.php?page=url">Bootup URL</a> and change the value to http://localhost/monitor to remvoe this message</h3>
	<p>Username: admin</p>
	<p>Password: secret</p>

	<p> the ssh user / pass is pi / ChangeMe</p>
        <p style="color: red">IT IS RECCOMENDED YOU CHANGE THE DEFAULT PASSWORDS ASAP</p>

	</body>
</html>
