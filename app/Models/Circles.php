<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Circle extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'user_id'
        ];
        
    public function getPaginateByLimit(int $limit_count=5)
    {
        return $this::with('category')->orderby('updated_at','DESC')->paginate($limit_count);
    }
    
    public function user()
    {
        return $this->belobsTo(User::class);
    }
    
    public function introductions()
    {
        return $this->hasMany(Introduction::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
