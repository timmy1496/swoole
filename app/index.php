<?php

$str = '';
for ($i = 0; $i < 1000000; $i++) {
    $str .= 's';
}

echo "Hello fpm, {$str}\n";