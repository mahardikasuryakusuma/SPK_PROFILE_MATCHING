<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $fillable = [
        'alternatif',
    ];

    
    
    public function samples()
    {
        return $this->hasMany(Sample::class, 'id_alternatif');
    }
}
