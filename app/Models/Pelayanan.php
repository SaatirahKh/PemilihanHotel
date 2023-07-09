<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;
    protected $table = 'pelayanan';

    public function hotel()
    {
        return $this->belongsToMany(Hotel::class, 'pelayanan_hote');
    }
}
