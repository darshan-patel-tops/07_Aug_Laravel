<?php
date_default_timezone_set('asia/kolkata');

echo time();
echo "<br>";
echo date('d-m-y');
echo "<br>";
echo date('d-m-Y');
echo "<br>";
echo date('m-d-Y');
echo "<br>";
echo date('D-M-Y');
echo "<br>";
echo date('H:i:s ');
echo "<br>";



echo date("d-m-y H:i:s");
echo "<br>";
echo date("d-m-Y H:i:s");
echo "<br>";
echo date("D-M-Y H:i:s");
echo "<br>";
echo date("j-m-y");
echo "<br>";
echo date("D");
echo "<br>";
echo date("F j, Y, g:i a");
echo "<br>";
echo time();
echo "<br>";
echo "August 16 2023 is on " . date("l",mktime(0,0,0,8,16,2023));
echo "<br>";
echo $date = "2003-12-29";
echo "<br>";
echo $newdate = date("d-m-Y",strtotime($date));







?>


<ul>
    <li> $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm</li>
    <li> $today = date("m.d.y");                         // 03.10.01</li>
    <li> $today = date("j, n, Y");                       // 10, 3, 2001</li>
    <li> $today = date("Ymd");                           // 20010310</li>
    <li> $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01</li>
    <li> $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.</li>
    <li> $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001</li>
    <li> $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month</li>
    <li> $today = date("H:i:s");                         // 17:16:18</li>
    <li> $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)</li>
</ul>