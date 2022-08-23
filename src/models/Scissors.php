<?php

namespace App\Models;

use App\Models\Figure;

class Scissors extends Figure {

    public function __construct() 
    {
        $this->type = "Scissors";
    }

}