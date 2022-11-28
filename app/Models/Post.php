<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','image','user_id'];
    protected $appends = ['short_description', 'short_title'];

    public function getShortDescriptionAttribute(){
        return Str::of($this->description)->limit(100);
    }

    public function getShortTitleAttribute(){
        return Str::of($this->title)->limit(25);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
