<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Links extends Model
{
    use HasFactory, Notifiable;

    protected $fillable= [
        'id',
        'Libellé',
        'raccourci',
        'user_id',
    ];

    public function IDuse(){
        return  $this->belondsTo(User::class);
    }
}
