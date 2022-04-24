<?php

include 'user.php';

$x = new User();

$x->name = $_POST['username'];
$x->passwd = $_POST['passwd'];

$x->save();