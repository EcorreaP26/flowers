<?php

$secret = 1786;

do {
    $random = rand();
} while ($random % $secret !== 0);

echo "Random value is " . $random;
