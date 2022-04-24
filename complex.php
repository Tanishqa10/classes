<?php

class Complex
{
    public $real;
    public $img;

    public function show()
    {
        echo $this->real." + i".$this->img;
    }

    public function mag()
    {
        return sqrt($this->real*$this->real + $this->img*$this->img);
    }
}

$x = new Complex();

$x->real = 2;
$x->img = 4;

$m = $x->mag();
echo $m;