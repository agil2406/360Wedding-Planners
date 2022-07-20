<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWO extends Model
{
    protected $table = 'paketwos';
    protected $guarded = ['id'];

    public function wo()
    {
        return $this->belongsTo(WO::class);
    }
}
