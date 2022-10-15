<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'exerpt', 'body'];
    // protected $guarded = []; //no protection
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }
}
//many to many Relationship
//article has many tags
// tag has many articles  