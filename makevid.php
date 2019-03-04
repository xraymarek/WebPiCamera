<?php

/* *************************************************** */
/* WebPiCamera by https://github.com/xraymarek  */
/* *************************************************** */

$filename = (time() .'-'.rand(1,999999));

echo(shell_exec("raspivid -w ".$_GET['width']." -h ".$_GET['height']." -fps ".$_GET['fps']." -o /var/www/html/".$filename.".h264 -n -t ".($_GET['time']*1000).""));
shell_exec("ffmpeg -framerate ".$_GET['fps']." -i /var/www/html/".$filename.".h264 -c copy /var/www/html/".$filename.".mp4");


echo(json_encode(array(
"error" => 0,
"photoid" => ($filename))
));
?>