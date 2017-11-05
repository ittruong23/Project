<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caterogy extends Model
{   
    protected $table = 'caterogies';
    protected $fillable = [];
    
    public function author() {
        return $this->belongsTo( User::class, 'author_id', 'id');
    }
}
