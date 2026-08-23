<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiumCredit extends Model
{
    protected $fillable = [
        'user_id',
        'transaction_id',
        'credits',
        'used',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function remaining(): int
    {
        return max(0, $this->credits - $this->used);
    }
}
