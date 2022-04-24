<?php

class User
{
    public $name;
    public $passwd;

    public function save()
    {
        $conn = new mysqli();

        $stmt = $conn->prepare('INSERT INTO users (username, passwd) VALUES (?,?)');

        $stmt->bind_param("ss", $this->name, $this->passwd);

        $stmt->execute();

        $stmt->close();

        $conn->close();
    }
}