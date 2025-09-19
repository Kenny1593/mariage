<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;
    protected $table = 'invite'; // nom personnalisé
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'nombre',
        'idplace',
        ];

    // Relations
    public function place()
    {
        return $this->belongsTo(Place::class, 'idplace');
    }
    public function reels()
    {
        return $this->hasMany(Reel::class, 'idinvite');
    }

}
