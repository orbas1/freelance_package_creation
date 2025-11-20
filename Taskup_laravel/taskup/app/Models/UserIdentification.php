<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserIdentification extends Model
{
    use HasFactory;
    protected $table = 'user_identification';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
