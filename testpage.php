<?php
$text = 'Take me to the spacejam and have a nice fly';
$newtext = wordwrap("# ". $text, 1, " <br />\n");
echo $newtext;
?>