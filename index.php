<?php
echo 'This is a test';
$config = parse_ini_file('config.ini');
echo $config['Username'];
?>