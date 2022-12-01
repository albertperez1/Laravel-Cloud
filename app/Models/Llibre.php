<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autor;

class Llibre extends Model
{
    use HasFactory;

        /**
         * Get the post that owns the comment.
         */
        public function autor()
        {
            return $this->belongsTo(Autor::class);
        }

        
}

