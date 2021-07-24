<?php

$rnd = rand(1, 100);

$str = '';
for ($i = 0; $i < 1000000; $i++) {
    $str .= 's';
}

echo "Hello fpm, {$rnd}  {$str}\n";