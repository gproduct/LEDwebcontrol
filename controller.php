
<html>
<head>
<meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<?php
if (isset($_POST['LightON']))
{
exec("sudo python /home/pi/lighton_1.py");
}
if (isset($_POST['LightOFF']))
{
exec("sudo python /home/pi/lightoff_1.py");
}
?>

<form method="post">
<button class="btn" name="LightON">Light ON</button>&nbsp;
<button class="btn" name="LightOFF">Light OFF</button><br><br>
</form>


</html>

<!--
sudo apt-get update && sudo apt-get upgrade

sudo apt-get install python-dev
sudo apt-get install python-rpi.gpio

sudo apt-get install apache2 php5 libapache2-mod-php5

sudo service apache2 restart

sudo nano /etc/sudoers
 add to bottom of file:  www-data ALL=(root) NOPASSWD:ALL
!-->