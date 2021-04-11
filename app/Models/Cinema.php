<?php

namespace App\Models;

use App\Models\Common\IOrderable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    public function rooms() {
        return $this.$this->hasMany(Room::class);
    }
}
