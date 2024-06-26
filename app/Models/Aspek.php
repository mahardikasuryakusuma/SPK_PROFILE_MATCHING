<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspek extends Model
{
    use HasFactory;

    protected $fillable = [
        'aspek',
        'presentase',
        'bobot_core',
        'bobot_secondary',
    ];

    public function faktor()
    {
        return $this->hasMany(Faktor::class, 'id_aspek');
    }
}
