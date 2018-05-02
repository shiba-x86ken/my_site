<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $led_on = $_POST['air_on'];
    shell_exec('sh /home/pi/remotecontroller_electronics/remote_air_on.sh ');
  }
 ?>
