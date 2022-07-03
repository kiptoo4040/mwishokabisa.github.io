<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = "lat: " . $_GET["lat"] . "\n long: ". $_GET["long"] ."\n Ip: " . $_SERVER["REMOTE_ADDR"] . "\n User agent:". $_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);

?>
