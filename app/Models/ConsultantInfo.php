<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConsultantInfo extends Model
{
    use HasFactory;

    public function user_data(): HasOne
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
