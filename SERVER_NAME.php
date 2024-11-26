<?php
$output = shell_exec('echo $_SERVER["SERVER_NAME"]; 2>&1');
echo "<pre>$output</pre>";
?>
