<?php

$conn = new mysqli("localhost", "harmanpreet", "harmanps181001", "test");

$statement = $conn->prepare('SELECT * FROM testing;');

$statement->execute();

$result = $statement->get_result();

$row = $result->fetch_assoc();

while($row)
{
    echo $row['name']."\n";
    $row = $result->fetch_assoc();
}

$statement->close();

$conn->close();