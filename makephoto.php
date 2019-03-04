<?php

/* *************************************************** */
/* WebPiCamera by https://github.com/xraymarek  */
/* *************************************************** */

$filename = (time() .'-'.rand(1,999999));

echo(shell_exec("raspistill -w ".$_GET['width']." -h ".$_GET['height']." -q ".$_GET['quality']." -o /var/www/html/".$filename.".jpg -n -r -t ".$_GET['time'].""));



echo(json_encode(array(
"error" => 0,
"photoid" => ($filename))
));
?>