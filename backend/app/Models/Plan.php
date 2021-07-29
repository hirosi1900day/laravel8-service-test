<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'name',
        'content',
        'is_selling'
    ];

    public function owner() {
        return $this->belongsTo(Owner::class);
    }
}
