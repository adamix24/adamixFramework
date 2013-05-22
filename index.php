<?php

$t = file_get_contents('http://www.adamix.net/web/index.php');
$t = str_replace('div','span',$t);
echo $t;