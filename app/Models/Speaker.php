<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Speaker extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id'); 

    }
    
    public function course(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
