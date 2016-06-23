<?php

$a = 1+2;
date_default_timezone_set ("PST8PDT");
print "<b>".date("Ymd")."<br>$a</b><p>\n";

print "And now from the browser...<br>"."<script src='date.js'></script>"
?>
