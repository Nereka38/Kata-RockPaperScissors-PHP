<?php

namespace App\Models;

use App\Models\Figure;

class Rock extends Figure {

    public function __construct() {
        $this->type = "Rock";
    }

}