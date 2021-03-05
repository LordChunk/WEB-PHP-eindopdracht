<?php

namespace App\Models;

use App\Models\Common\IBuyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;

    public function visitors(){
        return $this->belongsToMany(User::class);
    }

    public function Buy($StartDate, $EndDate, $Photos, $amountOfTickets)
    {
        // TODO: Implement Buy() method.
    }
}
