<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = 'galeries';
    protected $guarded = ['id'];

    public function wo()
    {
        return $this->belongsTo(WO::class);
    }
}
