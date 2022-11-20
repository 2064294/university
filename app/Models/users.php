<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        ];
        
    public function getPaginateByLimit(int $limit_count=5)
    {
        return $this::with('category')->orderby('updated_at','DESC')->paginate($limit_count);
    }
    
    public function circle()
    {
        return $this->hasMany(circle::class);
    }
    
    public function reviews()
    {
        return $this->hassMany(reviews::class);
    }
}
