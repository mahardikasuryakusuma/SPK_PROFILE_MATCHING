<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faktor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_aspek',
        'faktor',
        'target',
        'type',
    ];

    public function aspek()
    {
        return $this->belongsTo(Aspek::class, 'id_aspek');
    }

    public function samples()
    {
        return $this->hasMany(Sample::class, 'id_faktor');
    }
}
