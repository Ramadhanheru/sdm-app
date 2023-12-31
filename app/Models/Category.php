<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function post(){
        return $this->hasMany(Post::class);
    }
    
    public function getRouteKeyName()
    {
        
        return 'kode_unit';
    }
}
