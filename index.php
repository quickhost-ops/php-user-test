<?php
$u = posix_getpwuid(posix_geteuid());
$dir = '/tmp/private-test';
@mkdir($dir, 0700);
$ok = @file_put_contents("$dir/t.txt", 'ok') !== false;
header('Content-Type: text/plain');
echo "PHP is running as: {$u['name']} (uid " . posix_geteuid() . ")\n";
echo "Can write to its own private folder: " . ($ok ? 'yes' : 'no') . "\n";
