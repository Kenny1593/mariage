<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InviteTable extends Model
{
    use HasFactory;
    protected $table = 'invitetable'; // nom personnalisé
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'idplace',
        'idinvitation',
        ];

    // Relations
    public function place()
    {
        return $this->belongsTo(Place::class, 'idplace');
    }
    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'idinvitation');
    }
}
