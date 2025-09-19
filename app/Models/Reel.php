<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reel extends Model
{
   use HasFactory;

    protected $table = 'reels'; // nom personnalisé

    protected $fillable = [
        'idinvite',
        'video',
    ];


    // Relations

    public function invite()
    {
        return $this->belongsTo(Invite::class, 'idinvite');
    }


}
