<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $guarded= ['id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
