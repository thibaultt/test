<?php
$output = shell_exec('ls . 2>&1');
echo "<pre>$output</pre>";
?>
