<?php
$timestamp = time();
echo 'timestamp is' . $timestamp . '<br>';
$time = date("Y-m-d H:i:s", $timestamp);
echo 'time is ' . $time . '<br>';
$time = date("Y-m-d H:i:s");
echo "时间是：" . $time . "<br>";
$timestamp = strtotime($time);
echo "时间戳是" . $timestamp . "<br>";

