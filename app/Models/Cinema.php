<?php

namespace App\Models;

use App\Models\Common\IBuyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    public $AvailableSeats;
    public $Movies;

    public function Buy($Seats, $Movie)
    {
        // TODO: Implement Buy() method.
    }
}
