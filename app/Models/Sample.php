<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_alternatif',
        'id_faktor',
        'value',
    ];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'id_alternatif');
    }

    public function faktor()
    {
        return $this->belongsTo(Faktor::class, 'id_faktor');
    }
}
