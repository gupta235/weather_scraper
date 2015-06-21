<?php

$city=$_GET['city'];

$city=str_replace(" ", "", $city);

$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

#echo $contents;

preg_match('/3 Day Weather Forecast Summary:(.*?)<\/span><\/span><\/span><\/p>/s', $contents, $matches);

#print_r($matches);

echo $matches[1];

?>