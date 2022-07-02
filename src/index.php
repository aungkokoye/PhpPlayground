<?php

echo 'w r here';

$array = [1,2,3,4,5];

foreach($array as $key => $value) {
    var_dump($key);
    var_dump($value);
}

echo phpinfo();