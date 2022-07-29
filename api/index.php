<?php
error_reporting(E_STRICT);
// error_reporting(E_ALL);
require './vendor/autoload.php';
$Arabic = new \ArPHP\I18N\Arabic();

// Latitude, Longitude, Zone, and Elevation
$Arabic->setSalatLocation(25.941298, 50.3073898, 3, 691);

// Month, Day, and Year
$Arabic->setSalatDate(date('n'), date('j'), date('Y'));
// echo "<b>Damascus, Syria</b> ".date('l F j, Y')."<br /><br />";

// Salat calculation configuration: Egyptian General Authority of Survey
$Arabic->setSalatConf('Shafi', -0.833333, -17.5, -19.5, 'Sunni');

$times = $Arabic->getPrayTime();
$region["region"] = "Kingdom of Bahrain";
array_push($times, $region);

echo "<pre>" . json_encode($times, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "</pre>";

// echo "<b>Imsak:</b> {$times[8]}<br />";
// echo "<b>Fajr:</b> {$times[0]}<br />";
// echo "<b>Sunrise:</b> {$times[1]}<br />";
// echo "<b>Dhuhr:</b> {$times[2]}<br />";
// echo "<b>Asr:</b> {$times[3]}<br />";
// echo "<b>Sunset:</b> {$times[6]}<br />";
// echo "<b>Maghrib:</b> {$times[4]}<br />";
// echo "<b>Isha:</b> {$times[5]}<br />";
// echo "<b>Midnight:</b> {$times[7]}<br /><br />";

// echo '<b>Imsak:</b> '   .date('l j F Y g:i a', $times[9][8]).'<br />';
// echo '<b>Fajr:</b> '    .date('l j F Y g:i a', $times[9][0]).'<br />';
// echo '<b>Sunrise:</b> ' .date('l j F Y g:i a', $times[9][1]).'<br />';
// echo '<b>Dhuhr:</b> '   .date('l j F Y g:i a', $times[9][2]).'<br />';
// echo '<b>Asr:</b> '     .date('l j F Y g:i a', $times[9][3]).'<br />';
// echo '<b>Sunset:</b> '  .date('l j F Y g:i a', $times[9][6]).'<br />';
// echo '<b>Maghrib:</b> ' .date('l j F Y g:i a', $times[9][4]).'<br />';
// echo '<b>Isha:</b> '    .date('l j F Y g:i a', $times[9][5]).'<br />';
// echo '<b>Midnight:</b> '.date('l j F Y g:i a', $times[9][7]).'<br /><br />';


