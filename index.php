<?php
$output = shell_exec('cat index.php 2>&1');
echo "<pre>$output</pre>";
?>
