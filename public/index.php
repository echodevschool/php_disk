<?php

use App\Entity\User;

require_once '../vendor/autoload.php';


$user = new User('admin', '1234', 'test@test.com');
$user = '123';
$user1 = "$user";
echo $user1;
var_dump($user);