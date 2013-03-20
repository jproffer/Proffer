<?php

// DATE ranges

// today
$tdS = strtotime(date("Y-m-d 00:00:00"));
$tdE = strtotime(date("Y-m-d 23:59:59"));
// this week
$year=date("Y");
$week=date("W");
$twS = strtotime(date("Y-m-d 00:00:00", strtotime("{$year}-W{$week}-1"))); //Returns the date of monday in week
$twE = strtotime(date("Y-m-d 23:59:59", strtotime("{$year}-W{$week}-7")));   //Returns the date of sunday in week

// next week
$nwyear=date("Y", strtotime("+1 week", time()));
$nwweek=date("W", strtotime("+1 week", time()));
$nwS = strtotime(date("Y-m-d 00:00:00", strtotime("{$nwyear}-W{$nwweek}-1"))); //Returns the date of monday in week
$nwE = strtotime(date("Y-m-d 23:59:59", strtotime("{$nwyear}-W{$nwweek}-7")));   //Returns the date of sunday in week

define("TODAY",  "$tdS|$tdE");
define("THISWEEK", "$twS|$twE");
define("NEXTWEEK", "$nwS|$nwE");
define("OTHER",strtotime("+1 day", $nwE));
