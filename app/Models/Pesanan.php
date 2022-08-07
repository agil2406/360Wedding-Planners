<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'orders';
    protected $guarded = ['id'];

    public function paket()
    {
        return $this->belongsTo(PaketWO::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
