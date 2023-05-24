<?php

$date1 = date_create("2017-04-15");
$date2 = date_create("2018-04-15");

$difference = date_diff($date1,$date2);

echo 'Days Count - '.$difference->format("%a");