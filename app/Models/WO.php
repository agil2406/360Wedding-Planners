<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WO extends Model
{
    protected $table = 'wos';
    protected $guarded = ['id'];

    public function paket()
    {
        return $this->hasMany(PaketWO::class);
    }
}
