<?php

include 'todo.php';

$x = new Todo();

$x->task = $_POST['task'];

$x->save();