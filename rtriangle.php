<?php

class RTri
{
    public $h;
    public $b;
    public $p;

    public function setSides($hyp, $base, $per)
    {
        $this->h = $hyp;
        $this->b = $base;
        $this->p = $per;
    }

    public function check()
    {
        if(pow($this->h, 2) == pow($this->b, 2) + pow($this->p, 2))
        {
            echo "Yes it is a R T";
        }
        else
        {
            echo "no";
        }
    }
}

$x = new RTri();

$x->setSides(5, 4, 4);

$x->check();