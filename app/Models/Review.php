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
        'users_id',
        'circle_id',
        'class_id'
        ];
        
    public function getPaginateByLimit(int $limit_count=5)
    {
        return $this::with('category')->orderby('updated_at','DESC')->paginate($limit_count);
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function circle()
    {
        return $this->belobsTo(Circle::class);
    }
    
    public function class()
    {
        return $this->belobsTo(Class::class);
    }
}
