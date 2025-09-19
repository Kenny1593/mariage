<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;
    protected $table = 'invitation'; // nom personnalisé
    public $timestamps = false;

    protected $fillable = [
        'numero',
        ];

    // Relations
    public function inviteTables()
    {
        return $this->hasMany(InviteTable::class, 'idinvitation');
    }
    
}
