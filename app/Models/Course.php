<?php

namespace App\Models;

use App\Models\Speaker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // speaker_id
    public function speaker():BelongsTo
    {
        return $this->belongsTo(Speaker::class,'speaker_id'); 

    }
    
    public function getRouteKeyName(){
        return 'slug';
    }
   
}
