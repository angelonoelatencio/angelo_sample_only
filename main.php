<?php
$ip = '208.67.222.222';

$latlong = explode(",", file_get_contents('https://ipapi.co/' . $ip . '/latlong/'));

$weather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?lat=' . $latlong[0] . '&lon=' . $latlong[1] . '&appid=API_KEY');

echo $weather;

$json = json_decode($weather);
?>

<html>
<H1 >Hello <?php echo $json ?> </H1>

</html>

