<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $table = 'place'; // nom personnalisé
    public $timestamps = false;

    protected $fillable = [
        'nom',
        ];

    // Relations
    public function invites()
    {
        return $this->hasMany(Invite::class, 'idplace');
    }
    public function inviteTables()
    {
        return $this->hasMany(InviteTable::class, 'idplace');
    }
}
