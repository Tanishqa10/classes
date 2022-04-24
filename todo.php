<?php

class Todo
{
    private $task;

    public function setTask($a)
    {
        $this->task = $a;
    }

    public function save()
    {
        echo "Task Saved: ".$this->task;
    }
}

$x = new Todo();

$x->setTask("Say Hello");

$x->save();