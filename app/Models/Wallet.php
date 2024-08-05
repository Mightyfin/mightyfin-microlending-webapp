<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'deposit',
        'withdraw',
        'user_id',
        'email',
        'phone'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
