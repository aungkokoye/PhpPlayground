<?php

require __DIR__ . '/vendor/autoload.php';

use Aman\EmailVerifier\EmailChecker;

$emailChecker = new EmailChecker();

$email = "example@gmail.com";

$emailChecker->setFromEmail($email);

var_dump($emailChecker->checkMxAndDnsRecord("rafal.skucha+123@hotmail.co.uk"));


echo 'w r here';
