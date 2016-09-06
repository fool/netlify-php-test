<?php

date_default_timezone_set ("PST8PDT");
print "<b>Date/Time (PST) Built: ".date("Ymd H:i:s e")." </b><p>\n";

print "Local time from the browser: <br>"."<script src='date.js'></script>"
?>

<form name="contact" action="index.html" netlify>
  <p>
    <label>Your Name:</label>
    <input type="text" name="name">
  </p>
  <p>
    <label>Your Email</label>
    <input type="email" name="email">
  </p>
  <p>
    <button>Send</button>
  </p>
</form>
