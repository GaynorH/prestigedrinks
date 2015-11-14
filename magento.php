<?php
$ourFileName = "maintenance.flag";
$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
fclose($ourFileHandle);
?>
