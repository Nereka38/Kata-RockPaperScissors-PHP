<?php

namespace App\Models;

use App\Models\Figure;

class Paper extends Figure {

    public function __construct() {
        $this->type = "Paper";
    }

}