<?php
$dt = new DateTime('now', new DateTimezone('Asia/Bangkok'));
print_r($dt->format('F j, Y, g:i a'));
echo $dt->format('Y-m-d H:i:s');
