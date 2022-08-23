<?php

namespace App\Models;

abstract class Figure {

    protected $type;

    public function getType()
    {
        return $this->type;
    }
}