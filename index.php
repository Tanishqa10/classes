<?php

$conn = new mysqli();

// $stmt = new Query()
$stmt = $conn->prepare($sql); //Query

