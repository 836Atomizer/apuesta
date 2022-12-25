<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refill extends Model
{
    use HasFactory;

    protected $fillable = [
        'mount',
        'code_transaction',
        'bank_id',
        'canal_id',
        'player_id',
        'file_transaction',
        'status'
    ];

    function player()
    {
        return $this->belongsTo(Player::class);
    }
    function bank()
    {
        return $this->belongsTo(Bank::class);
    }
    function canal()
    {
        return $this->belongsTo(Canal::class);
    }
}
