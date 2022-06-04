# PHP program to determine the type of browset that a web client is using

<?php

echo $_SERVER['HTTP_USER_AGENT'];
$mybrowser = get_browser(null,true);
print_r($mybrowser);

?>